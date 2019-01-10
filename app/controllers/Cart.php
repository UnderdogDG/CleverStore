<?php
  class Cart extends Controller{
    public function status(){
      $this->view('cart/status');
    }

    public function addToCart(){
      session_start();
      $data = $_POST["quantity"];
      $_SESSION["cart"] = $data;
      echo $data;
    }

    public function buy(){
      // $model = $this->model('Products');
      
      $this->view('product/buy');
    }
  }
?>