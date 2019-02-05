<?php
  class Product extends Controller{
    private $aut = false;

    // #region [1] ======== ( CONSTRUCT ) ========
    public function __construct(){

      if(!isset($_SESSION)){ 
        session_start(); 
      }
      
      if(isset($_SESSION["name"])){
        $this->aut = true;
      }

    }
    // #endregion   ========================

    // #region [2] ======== ( ITEM ) ========
    public function item($id){
      $model = $this->model('Products');
      $data = $model->getItem($id);

      $this->view('product/detail-test', $data);
    }
    // #endregion   ========================

    // #region [3] ======== ( ADD TO CART ) ========
    public function addToCart(){
      // session_start();
      if($this->aut){
        $sku = $_POST["sku"];
        $quantity = $_POST["quantity"];

        $model = $this->model('Products');
        $data = $model->getItem(array($sku));

        unset($data["description"]);
        $data['quantity'] = $quantity;

        // $data = ["sku"=>$_POST["sku"], "quantity"=>$_POST["quantity"]];
        array_push($_SESSION["cart"], $data);

        echo json_encode($data);
      }else{
        echo json_encode(array('error'=>"Usuario no Ingresado"));
      }
    }
    // #endregion   ========================

    public function removeFromCart(){
      if($this->aut){
        $item = $_POST["item"];

        unset($_SESSION['cart'][$item]);

        echo json_encode($_SESSION['cart']);
      }else{
        echo json_encode(array('error'=>"Usuario no Ingresado"));
      }
    }

    // #region [4] ======== ( BUY ) ========
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
    // #endregion   ========================
    
  }
?>