<?php
  if($acao == '' && $param == ''){
    echo json_encode(['ERRO' => 'caminho não encontrado!']);
  }
  if($acao == 'update' && $param == ''){
    echo json_encode(['ERRO' => 'É necessario informar um cliente!']);
  }

  if($acao == 'update' && $param != ''){
    array_shift($_POST);
    $sql = "UPDATE clientes SET";

    $contado =1;
    foreach(array_keys($_POST) as $indice){
      if(count($_POST)> $contador){
        $sql.= "{$indice} = '{$_POST[$indice]}', ";
      }else{
        $sql.= "{$indice} = '{$_POST[$indice]}' ";
      } 
      $contador++;
    }
    $sql .= "WHERE id= {param}";
  }

    $db = DB::connect();
    $rs=$db->prepare($sql);
    $exec = $rs->execute();

    if($exec){
      echo json_encode(["dados" => 'Dados atualizar com sucesso!']);
    }else{
      echo json_encode(["dados" => 'Houve algum erro ao atualizar os dados!']);
    }

?>