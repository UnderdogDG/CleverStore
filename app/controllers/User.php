<?php
  class User extends Controller{
    public function login(){
      $this->view('login');
    }
    public function register(){
      
      $this->view('register');
    }

    public function ingresar(){
      $this->view('ingresar');
    }
  }
?>