<?php
 require_once '../../dao/PagamentoDao.php';
 require_once '../../model/Pagamento.php';
 require_once '../../model/Mensagem.php';

 $pagamento = new Pagamento();
 $msg = new Mensagem();

  //var_dump($_POST); 


 switch ($_POST["acao"]) {
  case 'DELETE':
   try {
        $pagamentoDao = PagamentoDao::delete($_POST['idDeletar']);
        header("Location: index.php");
    } catch (Exception $e) {
      echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    }
    break;

  case 'SALVAR':
    //pode validar as informações
    $pagamento->setDesc($_POST['nome']);
    try {
      $pagamentoDao = PagamentoDao::insert($pagamento);
      $msg->setMensagem("Usuário Salvo com sucesso.", "bg-success");
      header("Location: index.php");
    } catch (Exception $e) {
     // echo 'Exceção capturada: ',  $e->getMessage(), "\n";
      $msg->setMensagem("Verifique os dados Digitados.", "bg-danger");
      header("Location: register.php");
    } 
    break;

  case 'SELECTID':

    try {
        $pagamentoDao = PagamentoDao::selectById($_POST['codPagamento']);
        // Configura as opções do contexto da solicitação
        include('register.php');
    } catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    } 
    break;
  }
?>