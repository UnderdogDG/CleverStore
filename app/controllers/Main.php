<?php
  class Main extends Controller{

    public function __construct(){
      $this->postModel = $this->model('Post');
    }

    public function index(){
      $data = $this->postModel->getPost();

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

      [$class=>$item] = [
        'clothes'=>'clt', 
        'shoes'=>'sho', 
        'jewels'=>'jwl',
        'props'=>'acc',
      ];

      $model = $this->model('Classes');
      $data = $model->obtClase($item);

      // $this->view('class/test', $data);
      $this->view('search', $data);
    }

    public function item($id){
      $model = $this->model('Classes');
      $data = $model->fetchItem($id);

      $this->view('item/detail', $data);
    }

  }
?>