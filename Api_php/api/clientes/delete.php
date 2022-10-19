<?php
  if($acao == '' && $param == ''){
    echo json_encode(['ERRO' => 'caminho não encontrado!']);exit;
  }
  if($acao == 'delete' && $param == ''){
    echo json_encode(['ERRO' => 'É necessario informar um cliente!']);exit;
  }

  if($acao == 'delete' && $param != ''){
    
    $db = DB::connect();
    $rs=$db->prepare("DELETE FROM clientes WHERE id={$params}");
    $exec = $rs->execute();

    if($exec){
      echo json_encode(["dados" => 'Dados excluidos com sucesso!']);
    }else{
      echo json_encode(["dados" => 'Houve algum erro ao excluir os dados!']);
    }

  }
?>