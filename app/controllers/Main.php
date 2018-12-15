<?php
  class Main extends Controller{

    public function __construct(){
      $this->postModel = $this->model('Post');
    }

    public function index(){
      $posts = $this->postModel->getPost();

      $this->view('index', $posts);
    }

    public function about(){
      $this->view('about');
    }

  }
?>