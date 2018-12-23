<?php
  class Database{
    private $host = HOST;
    private $db_name;
    private $user = USER;
    private $password = PASSWORD;
    private $port = PORT;

    private $stmt;
    private $response;
    private $dsn;

    public function __construct($table){
      $this->db_name = $table;
      $this->dsn = pg_connect("host=$this->host port=$this->port dbname=$this->db_name user=$this->user password=$this->password");
      if($this->dsn === false){ 
        die('<p>Error al conectar con DB!!!</p>');
      }
    }

    public function query($sql){
      $this->stmt = pg_prepare($this->dsn, 'Query', $sql);
    }

    public function execute($param){
      $this->response = pg_execute($this->dsn, 'Query', $param);
    }

    public function resultSet($param){
      $this->execute($param);
      $resultado = pg_fetch_all($this->response);
      pg_close($this->dsn);
      return  $resultado;
    }

    public function resultSingle($param){
      $this->execute($param);
      $resultado = pg_fetch_assoc($this->response);
      pg_close($this->dsn);
      return  $resultado;
    }

    public function close(){
      pg_close($this->dsn);
    }
  }

  // pg_close($link);
?>