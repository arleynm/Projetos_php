<?php
  header('Access-Control-Allow-Origin: *');
  header('Content-type:aplication/json');

  date_default_timezone_set("America/Sao_Paulo");

  if($path= explode("/", $_GE['path']);

  if(isset($path[0])){
    $api = $path;
  }else {
    echo "Caminho não existe!"; exit;
  }
  var_dump($path);
?>