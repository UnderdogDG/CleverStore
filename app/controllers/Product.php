<?php
  class Product extends Controller{
    private $aut = false;

    public function __construct(){
      // session_start();
      if(!isset($_SESSION)){ 
        session_start(); 
      }
      
      if(isset($_SESSION["name"])){
        $this->aut = true;
      }

    }

    public function item($id){
      $model = $this->model('Products');
      $data = $model->getItem($id);

      $this->view('product/detail', $data);
    }

    public function addToCart(){
      // session_start();
      if($this->aut){
        $data = ["sku"=>$_POST["sku"], "quantity"=>$_POST["quantity"]];
        array_push($_SESSION["cart"], $data);

        echo json_encode($data);
      }else{
        echo json_encode(array('error'=>"Usuario no Ingresado"));
      }
    }

    public function buy(){

      if($this->aut){
        $sku = $_POST["sku"];
        $quantity = $_POST["quantity"];

        $model = $this->model('Products');
        $data = $model->getItem(array($sku));

        $data["quantity"] = $quantity;
        
        $this->view('product/buy', $data);
      }else{
        $this->view('user/nouser');
      }

    }

  }
?>