<?php
  class Users{
    public function __construct(){
      $this->db = new Database('CleverStore');
    }

    public function addUser($arr){
      $this->db->query('INSERT INTO reg_users(name, first_name, tel, email, password) VALUES ($1, $2 , $3, $4, $5)');
      print_r($arr);
      $resultado = $this->db->execute($arr);
    }

    public function searchEmail($email){
      $this->db->query('SELECT email FROM reg_users WHERE email=$1');
      $resultado = $this->db->resultSet(array($email));
      return $resultado[0];
    }
  }
?>