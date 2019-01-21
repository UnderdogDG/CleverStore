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
        $searchItems = [];

        $search = trim($_GET['search']);
        $search = ucwords($search) . " " . strtolower($search);
        $search = explode(" ", $search);

        foreach($search as $item){
          $searchItems[] = "%".$item."%";
        }

        $model = $this->model('Products');
        $data = $model->getSearch($searchItems);
        $this->view('search', $data);
        // $this->view('test', $data);
      }else{
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