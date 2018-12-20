<?php
  class Core{
    protected $control = 'Main';
    protected $method = 'index';
    protected $params = [];

    public function __construct(){
      
      $url = $this->getUrl();

      if(file_exists('../app/controllers/' . ucwords($url[0]) . '.php')){
        $this->control = ucwords($url[0]);
        unset($url[0]);
      }

      include_once '../app/controllers/' . $this->control . '.php';

      $this->control = new $this->control;

      if(isset($url[1])){
        if(method_exists($this->control, $url[1])){
          $this->method = $url[1];
          unset($url[1]);
        }
      }

      $this->params = $url ? array_values($url) : [];

      call_user_func([$this->control, $this->method], $this->params);

    }

    public function getUrl(){
      if(isset($_GET["url"])){
        $url = trim($_GET["url"]);
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);
        return $url;
      }
    }

  }

?>