<?php
  class Post{

    private $db;

    public function __construct(){
      $this->db = new Database('world');
    }

    public function getPost(){
      $this->db->query('SELECT * FROM person WHERE last_name LIKE $1');
      // $this->db->execute();
      return $this->db->resultSet(['doe']);
    }

  }
?>