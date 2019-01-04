<?php
  class Classes{
    public function __construct(){
      $this->db = new Database('CleverStore');
    }

    public function obtClase($class){
      $this->db->query('SELECT * FROM art_store WHERE art_class=$1');
      $data = $this->db->resultSet(array($class));
      return $data;
    }

    public function fetchItem($id){
      $this->db->query('SELECT * FROM art_store WHERE sku=$1');
      $data = $this->db->resultSingle($id);
      return $data;
    }
  }
?>