<?php

   if($acao == '' && $param == ''){
    echo json_encode(['ERRO' => 'caminho não encontrado!']);exit;
  }
  if($acao=='login' && $param == ''){
    Usuarios::login($_POST['login'],$_POST['senha']);
    exit;
  }
  

?>