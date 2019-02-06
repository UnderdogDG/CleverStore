<?php
  class Users{
    public function __construct(){
      $this->db = new Database('CleverStore');
    }

    public function addUser($arr){
      $this->db->query('INSERT INTO reg_users(name, first_name, tel, email, password, img) VALUES ($1, $2 , $3, $4, $5, $6)');
      $resultado = $this->db->execute($arr);
    }

    public function searchEmail($email){
      $this->db->query('SELECT email FROM reg_users WHERE email=$1');
      $resultado = $this->db->resultSet(array($email));
      return $resultado[0];
    }

    public function searchUser($email, $password){
      $this->db->query('SELECT * FROM reg_users WHERE email=$1 AND password=$2');
      $resultado = $this->db->resultSingle(array( $email, $password));
      return $resultado;
    }

    public function searchUserById($id){
      $this->db->query('SELECT * FROM reg_users WHERE id=$1');
      $resultado = $this->db->resultSingle($id);
      return $resultado;
    }

    public function getFav($id){
      $this->db->query('SELECT fav FROM reg_users WHERE id=$1');
      $resultado = $this->db->resultSingle(array($id));
      return $resultado;
    }

    public function addFav($fav, $user){
      $this->db->query('UPDATE reg_users SET fav=$1 WHERE id=$2');
      $this->db->execute(array($fav, $user));
    }
  }
?>