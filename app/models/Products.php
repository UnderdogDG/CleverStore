<?php
  class Products{

    public function __construct(){
      $this->db = new Database('CleverStore');
    }

    public function getShelf(){
      $this->db->query('SELECT * FROM art_store ORDER BY rank ASC LIMIT 9');
      return $this->db->resultSet([]);
    }

    public function getSearch($searchItems){
      $query = 'SELECT * FROM art_store WHERE name LIKE ANY (VALUES ';

      for($i = 1; $i <= count($searchItems); $i++){
        $query .= "($$i)";

        if($i<count($searchItems)){
          $query .= ',';
        }else{
          $query .= ')';
        }
      }

      $this->db->query($query);
      $data = $this->db->resultSet($searchItems);
      return $data;
    }

    public function purchase(){
      
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

    public function getFavs($cartItems){
      $query = 'SELECT sku, name, price FROM art_store WHERE sku IN (';

      for($i = 1; $i <= count($cartItems); $i++){
        $query .= "($$i)";

        if($i<count($cartItems)){
          $query .= ',';
        }else{
          $query .= ')';
        }
      }

      $this->db->query($query);
      $data = $this->db->resultSet($cartItems);
      return $data;

    }

  }
?>