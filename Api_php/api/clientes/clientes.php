<?php
  if ($api === 'clientes'){

    if($method == $_GET){
      include_once "get.php";
    }

    if($method == $_POST){
      include_once "post.php";
    }

    if($method == $_POST && $_POST['_method'] == "PUT"){
      include_once "put.php";
    }

    if($method == $_POST && $_POST['_method'] == "DELETE"){
      include_once "delete.php";
    }
  }
?>  