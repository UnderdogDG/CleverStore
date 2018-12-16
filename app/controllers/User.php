<?php
  class User extends Controller{
    public function login(){
      $this->view('user/login');
    }
    public function registro(){
      
      $this->view('user/registro');
    }

    public function ingresar(){
      $this->view('user/ingresar');
    }

    public function nouser(){
      $this->view('user/nouser');
    }
  }
?>