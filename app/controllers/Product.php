<?php
  class Product extends Controller{
    public function status(){
      $this->view('product/status');
    }

    public function item($id){
      $model = $this->model('Products');
      $data = $model->getItem($id);

      $this->view('product/detail', $data);
    }

    public function addToCart(){
      session_start();
      $data = $_POST["quantity"];
      $_SESSION["cart"] = $data;
      echo $data;
    }

    public function buy(){
      $sku = $_POST["sku"];
      $quantity = $_POST["quantity"];

      $model = $this->model('Products');
      $data = $model->getItem($sku);
      
      $this->view('product/buy');
    }
  }
?>