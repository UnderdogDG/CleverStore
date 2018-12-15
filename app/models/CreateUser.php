<?php
  class CreateUser{
    public function __construct(){
      $this->db = new Database('user');
    }

    public function create($arr){
      $this->db->query('INSERT INTO user(name, first_name, email, phone, img) VALUES ($1)');
      $response = $this->db->resultSet($arr);
      return $response;
    }
  }
?>