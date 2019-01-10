<?php
  class Product extends Controller{
    public function status(){
      $this->view('cart/status');
    }

    public function item($id){
      $model = $this->model('Products');
      $data = $model->fetchItem($id);

      $this->view('item/detail', $data);
    }

    public function add(){
      session_start();
      $data = $_POST["quantity"];
      $_SESSION["cart"] = $data;
      echo $data;
    }

    public function buy(){
      // $model = $this->model('Products');
      
      $this->view('cart/buy');
    }
  }
?>