<?php
  header('Access-Control-Allow-Origin: *');
  header('Content-type:aplication/json');

  date_default_timezone_set("America/Sao_Paulo");

  if(isset ($_GET['path'])){
    $path= explode("/", $_GE['path']);
  }else{
    echo "Esse caminho não existe!";exit;
  }

  if(isset($path[0])){
    $api = $path;
  }else {
    echo "Caminho não existe!"; exit;
  }
  if(isset($path[1])){
    $acao = $path;
  }else {
    $acao = '';
  }
  if(isset($path[2])){
    $param = $path;
  }else {
    $param = '';
  }

  $method = $_SERVER["REQUEST_METHOD"];
  $GLOBAIS['secretJWT'] = '123456';

  include_once "classes/autoload.class.php";
  new Autoload();

  
?>  