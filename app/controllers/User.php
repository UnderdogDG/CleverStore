<?php
  class User extends Controller{

    private $name = "";
    private $last_name = "";
    private $email = "";
    private $password = "";
    private $email_conf = "";
    private $password_conf = "";
    private $tel;
    private $img = "";
    private $aut = false;

    public function __construct(){
      
      if(!isset($_SESSION)){ 
        session_start(); 
      }
      
      if(isset($_SESSION["name"])){
        $this->aut = true;
      }

    }

    public function index(){
      $model = $this->model('Products');

      $data = $model->getShelf();
      $this->view('index', $data);
    }
    
    // #region [8] ======== ( REGISTRO ) ========
    public function registro($data = []){

      if(!(empty($data))){
        $this->name = $data['name'];
        $this->last_name = $data['last_name'];
        $this->tel = $data['tel'];
        $this->email = $data['email'];
        $this->email_conf = $data['email_conf'];
        $this->password = $data['password'];
        $this->password_conf = $data['password_conf'];
        $this->img = $data['img'];
      }

      $this->view('user/registro', array(
                                        "name"=>$this->name, 
                                        "last_name"=>$this->last_name,
                                        "tel"=>$this->tel,
                                        "email"=>$this->email,
                                        "email_conf"=>$this->email_conf,
                                        "password"=>$this->password,
                                        "password_conf"=>$this->password_conf,
                                        'img'=>$this->img
                                      ));
    }
    // #endregion   ========================

    // #region [1] ======== ( INGRESAR ) ========
    public function ingresar(){
      $this->view('user/ingresar', $data = ["email"=>"", "password"=>""]);
    }
    // #endregion   ========================

    // #region [6] ======== ( LOGIN ) ========
    public function login(){

      $data = $this->validar();

      $model = $this->model('Users');
      $user = $model->searchUser( $data['email'], $data['password'] );

      if(in_array('Error', $data) || !$user){
        $this->view('user/ingresar', $data);
      }else{
        $this->userSession($user);
      }
    }
    // #endregion   ========================

    // #region [8] ======== ( SIGNIN ) ========
    public function signin(){
      $img = "";

      if($_FILES["img"]["error"] != 4){
        $file = $_FILES["img"];
        $img = $this->validarImg($file);
      }else{
        $img = 'default.png'; 
      }

      $data = $this->validar();
      $data["img"] = $img;

      $model = $this->model('Users');
      $user = ($model->searchEmail($data['email'])) ? "Error" : "";

      if($user == "Error" || in_array('Error', $data) || preg_match('/Error/', $img)){

        $this->view('user/registro', $data);

      }else{

        unset($data['email_conf']);
        unset($data['password_conf']);
        $model = $this->model('Users');
        $model->addUser($data);

        if($data["img"] != 'default.png'){
          move_uploaded_file($_FILES["img"]["tmp_name"], "img/upload/" . $data["img"]);
        }

        // $model2 = $this->model('Users');
        // $user2 = $model2->searchUser( $data['email'], $data['password'] );
        // $this->userSession($user2);
        
        $this->view('user/agregado', $data);
      }
    }
    // #endregion   ========================

    public function agregado(){
      $this->view('user/agregado');
    }

    // #region [9] ======== ( PERFIL ) ========
    public function perfil(){
      if($this->aut){
        $this->view('user/perfil');
      }else{
        $this->view('user/nouser');
      }      
    }
    // #endregion   ========================

    public function editar($id){
      if($this->aut){
        $model = $this->model('Users');
        $data = $model->searchUserById($id);

        $data['password_conf'] = "";

        $this->view('user/edit', $data);
      }else{
        $this->view('user/nouser');
      } 
    }

    public function update(){
      $img = "";

      if($_FILES["img"]["error"] != 4){
        $file = $_FILES["img"];
        $img = $this->validarImg($file);
      }else{
        $img = $_SESSION["img"]; 
      }

      $data = $this->validar();
      $data["img"] = $img;


      if(in_array('Error', $data) || preg_match('/Error/', $img)){

        header("Location: http://localhost/store/user/editar/" . $_SESSION["user"]);

      }else{
        $id = $_SESSION["user"];
        unset($data['password_conf']);

        $data["id"] = $id;

        $model = $this->model('Users');
        $model->updateUser($data);

        if($data["img"] != $_SESSION["img"]){
          move_uploaded_file($_FILES["img"]["tmp_name"], "img/upload/" . $data["img"]);
          $file = $_SESSION["img"];
          unlink("./img/upload/" . $file);

          // $real = realpath('./');
          
          $_SESSION["img"] = $data["img"];
        }
        
        header("Location: http://localhost/store/user/perfil/");
      }
    }

    // #region [6] ======== ( CART ) ========
    public function cart(){
      // session_start();
      if($this->aut){
        $this->view('user/cart');
      }else{
        $this->view('user/nouser');
      }
    }
    // #endregion   ========================

    // #region [7] ======== ( LOGOUT ) ========
    public function logout(){
      unset($_SESSION["user"]);
      unset($_SESSION["name"]);
      unset($_SESSION["last_name"]);
      unset($_SESSION["img"]);
      unset($_SESSION["cart"]);
      unset($_SESSION["fav"]);
      session_start();
      session_destroy();
      header("Location: http://localhost/store/");
    }
    // #endregion   ========================

    // #region [2] ======== ( NOUSER ) ========
    public function nouser(){
      $this->view('user/nouser');
    }
    // #endregion   ========================

    // #region [9] ======== ( ADDFAVS ) ========
    public function addFav(){
      if($this->aut){
        $skuFav= $_POST['fav'];
        $user = $_SESSION['user'];

        // $modelFav = $this->model('Users');
        // $resultado = $modelFav->getFav($user);

        $favs = $_SESSION['fav'];

        $newFav = ($favs) ? $favs . "/" . $skuFav : $skuFav;

        $_SESSION['fav'] = $newFav;

        $model = $this->model('Users');
        $model->addFav($newFav, $user);

        echo $newFav;
      }else{
        echo json_encode(array('error'=>"Usuario no Ingresado"));
      }
    }
    // #endregion   ========================

    public function favoritos(){
      if($this->aut){
        if($_SESSION['fav']){
          $favs = $_SESSION['fav'];
          $favs = explode('/', $favs);

          $model = $this->model('Products');
          $data = $model->getFavs($favs);

          
        }else{
          $data = [];
        }

        $this->view('search', $data);
      }else{
        $this->view('user/nouser');
      }
    }

    // #region [4] ======== ( AJAX ) ========
    public function ajax(){
      $email = trim($_POST["email"]);

      $model = $this->model('Users');
      $user = ($model->searchEmail($email)) ? "Error" : "";

      echo $user;
    }
    // #endregion   ========================

    // #region [3] ======== ( VALIDAR-PARAMS ) ========
    public function validar($params = ''){

      $validators = [
        'name' => '/\w{3,15}/',
        'last_name' => '/\w{3,15}/',
        'tel' => '/\d\d-\d\d-\d\d-\d\d/',
        'email' => '/^[\w.]{6,}[@]\w{3,8}[.][a-z]{3,8}([.][a-z]{2,4})?$/',
        'password' => '/^.{8,20}$/',
        'email_conf' => '/'. trim($_POST["email"]) . '/',
        'password_conf' => '/'. trim($_POST["password"]) . '/'
      ];

      $data = [];

      foreach ($_POST as $key => $value){
          $data[trim($key)] = $this->validarReg(trim($value), $validators[trim($key)]);
      }

      return $data;
      
    }
    // #endregion   ========================

    // #region [7] ======== ( VALIDAR-IMG ) ========
    public function validarImg($file){

      $img = "";

      $filename = $file['name'];
      $filetype = $file['type'];
      $filesize = $file['size'];
      $filetemp = $file['tmp_name'];

      $maxsize = 2 * 1024 * 1024;
      $permitidos = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
      $ext = pathinfo($filename, PATHINFO_EXTENSION);

      if($filesize < $maxsize){
        if(!array_key_exists($ext, $permitidos) || !in_array($filetype, $permitidos)) {
          $img = "Error: La Extensión debe ser: .jpg / .jpeg / .gif / .png.";
        }else{
          preg_match('/(?![php]).*/', pathinfo($filetemp, PATHINFO_FILENAME), $matches);
          $random = rand(1, 999);
          $random = ($random < 10) ? '00' . $random : (($random < 100) ? '0' . $random : $random);
          $img = $random . $matches[0] . "." . pathinfo($filename, PATHINFO_EXTENSION);
        }
      }else{
        $img = "Error: El tamaño del archivo es mayor a 2MB.";
      }

      return $img;
    }
    // #endregion   ========================

    // #region [8] ======== ( SESSION START ) ========
    public function userSession($data){

      $_SESSION["user"]=$data["id"];
      $_SESSION["name"]=$data["name"];
      $_SESSION["last_name"]=$data["last_name"];
      $_SESSION["img"]=$data["img"];
      $_SESSION["cart"]=[];
      $_SESSION["fav"] = ($data["fav"]) ? $data["fav"] : "";

      header("Location: http://localhost/store/");
    }
    // #endregion   ========================

    // #region [5] ======== ( VALIDARREG ) ========
    public function validarReg($cadena, $match){
      return (preg_match($match, $cadena)) ? $cadena : "Error";
    }
    // #endregion   ========================
  }
?>