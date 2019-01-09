<?php
  class Cart extends Controller{
    public function status(){
      $this->view('cart/status');
    }

    public function add(){
      session_start();
      $data = $_POST["quantity"];
      $_SESSION["cart"] = $data;
      echo $data;
    }
  }
?>