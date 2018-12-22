<?php
  class User extends Controller{

    private $name = "";
    private $first_name = "";
    private $email = "";
    private $password = "";
    private $email_conf = "";
    private $password_conf = "";
    private $tel;
    private $img = "";
    
    // #region [8] ======== ( REGISTRO ) ========
    public function registro($data = []){

      if(!(empty($data))){
        [
          'name'=>$this->name, 
          'first_name'=>$this->first_name,
          'tel'=>$this->tel,
          'email'=>$this->email,
          'email_conf'=>$this->email_conf,
          'password'=>$this->password,
          'password_conf'=>$this->password_conf,
          'img'=>$this->img

        ] = $data;
      }

      $this->view('user/registro', array(
                                        "name"=>$this->name, 
                                        "first_name"=>$this->first_name,
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
      [$user] = $model->searchUser( $data['email'], $data['password'] );

      if(in_array('Error', $data) || !$user){
        $this->view('user/ingresar', $data);
      }else{
        $this->view('user/agregado', $user);
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

        $this->view('user/agregado', $data);
        
      }
    }
    // #endregion   ========================

    // #region [2] ======== ( NOUSER ) ========
    public function nouser(){
      $this->view('user/nouser');
    }
    // #endregion   ========================

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
        'first_name' => '/\w{3,15}/',
        'tel' => '/\d\d-\d\d-\d\d-\d\d/',
        'email' => '/^\w{6,}[@]\w{3,8}[.][a-z]{3,8}([.][a-z]{2,4})?$/',
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
      [
        "name"=>$filename,
        "type"=>$filetype,
        "size"=>$filesize,
        "tmp_name"=>$filetemp
      ] = $file;

      $maxsize = 2 * 1024 * 1024;
      $permitidos = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
      $ext = pathinfo($filename, PATHINFO_EXTENSION);

      if($filesize < $maxsize){
        if(!array_key_exists($ext, $permitidos) || !in_array($filetype, $permitidos)) {
          $img = "Error: La Extensión debe ser: .jpg / .jpeg / .gif / .png.";
        }else{
          preg_match('/(?![php]).*/', pathinfo($filetemp, PATHINFO_FILENAME), $matches);
          $random = random_int(1, 999);
          $random = ($random < 10) ? '00' . $random : (($random < 100) ? '0' . $random : $random);
          $img = $random . $matches[0] . "." . pathinfo($filename, PATHINFO_EXTENSION);
        }
      }else{
        $img = "Error: El tamaño del archivo es mayor a 2MB.";
      }

      return $img;
    }
    // #endregion   ========================

    // #region [5] ======== ( VALIDARREG ) ========
    public function validarReg($cadena, $match){
      return (preg_match($match, $cadena)) ? $cadena : "Error";
    }
    // #endregion   ========================
  }
?>