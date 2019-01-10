<?php
  class Products{

    public function __construct(){
      $this->db = new Database('CleverStore');
    }

    public function getShelf(){
      $this->db->query('SELECT * FROM art_store ORDER BY rank ASC LIMIT 9');
      return $this->db->resultSet([]);
    }

    public function addPurchase(){
      
    }

    public function fetchByCategory($category){
      $this->db->query('SELECT * FROM art_store WHERE art_class=$1');
      $data = $this->db->resultSet(array($category));
      return $data;
    }

    public function getItem($sku){
      $this->db->query('SELECT * FROM art_store WHERE sku=$1');
      $data = $this->db->resultSingle($sku);
      return $data;
    }

  }
?>