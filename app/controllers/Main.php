<?php
  class Main extends Controller{

    public function __construct(){
      $this->postModel = $this->model('Products');
    }

    public function index(){
      $data = $this->postModel->getShelf();
      $this->view('index', $data);
    }

    public function search(){
      if(isset($_GET['search'])){
        echo 'TRUE';
        $search = $_GET['search'];
        $this->view('search',$data);
      }else{
        echo 'FALSE';
        $this->view('index');
      }
    }

    public function section($section){
      [0 => $class] = $section;

      [$class=>$category] = [
        'clothes'=>'clt', 
        'shoes'=>'sho', 
        'jewels'=>'jwl',
        'props'=>'acc',
      ];

      $model = $this->model('Products');
      $data = $model->fetchByCategory($category);

      // $this->view('class/test', $data);
      $this->view('search', $data);
    }

  }
?>