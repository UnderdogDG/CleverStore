<?php
  class User extends Controller{

    private $name = "";
    private $first_name = "";
    private $email = "";
    private $password = "";
    private $email_conf = "";
    private $password_conf = "";
    private $tel;
  
    public function registro($data = []){

      if(!(empty($data))){
        [
          'name'=>$this->name, 
          'first_name'=>$this->first_name,
          'tel'=>$this->tel,
          'email'=>$this->email,
          'email_conf'=>$this->email_conf,
          'password'=>$this->password,
          'password_conf'=>$this->password_conf

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
                                      ));
    }

    public function ingresar(){
      $this->view('user/ingresar');
    }

    public function nouser(){
      $this->view('user/nouser');
    }

    public function validar(){

      function validarReg($cadena, $match){
        return (preg_match($match, $cadena)) ? $cadena : "Error";
      }

      $data = [
        'name' => validarReg($_POST["name"], '/\w{3,15}/'),
        'first_name' => validarReg($_POST['first_name'], '/\w{3,15}/'),
        'tel' => validarReg($_POST['tel'], '/\d\d-\d\d-\d\d-\d\d/'),
        'email' => validarReg($_POST['email'], '/^\w{6,}[@]\w{3,8}[.][a-z]{3,8}([.][a-z]{2,4})?$/'),
        'email_conf' => ($_POST["email_conf"] == $_POST['email']) ? $_POST["email_conf"] : "Error",
        'password' => validarReg($_POST["password"], '/.{8,}/'),
        'password_conf' => ($_POST["password_conf"] == $_POST['password']) ? $_POST["password_conf"] : "Error"
      ];

      $model = $this->model('Users');
      $user = ($model->searchEmail($data['email'])) ? "Error" : "";

      if($user == "Error" || in_array('Error', $data)){
        $this->view('user/registro', $data);
      }else{
        unset($data['email_conf']);
        unset($data['password_conf']);
        $model = $this->model('Users');
        $model->addUser($data);
        $this->view('user/agregado', $data);
      }


      
    }

    public function ajax(){
      $email = trim($_POST["email"]);

      $model = $this->model('Users');

      $user = ($model->searchEmail($email)) ? "Error" : "";

      echo $user;
    }

  }
?>