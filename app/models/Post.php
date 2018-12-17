<?php
  class Post{

    private $db;

    public function __construct(){
      $this->db = new Database('CleverStore');
    }

    public function getPost(){
      $this->db->query('SELECT * FROM art_store ORDER BY rank ASC LIMIT 9');
      // $this->db->execute();
      return $this->db->resultSet([]);
    }

  }
?>