<?php
 require_once '../../dao/CompraDao.php';
 require_once '../../model/Compra.php';
 require_once '../../model/Mensagem.php';

 $compra = new Compra();
 $msg = new Mensagem();

  //var_dump($_POST); 


  session_start();
  if(isset($_SESSION["authAdm"])){
  $authAdm = $_SESSION["authAdm"];
  }

 switch ($_POST["acao"]) {
  case 'DELETE':
   try {
        $compraDao = CompraDao::delete($_POST['idDeletar']);
        header("Location: index.php");
    } catch (Exception $e) {
      echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    }
    break;

  case 'SALVAR':
    //pode validar as informações
    $compra->setQtd($_POST['qtd']);
    $compra->setVal($_POST['val']);
    $compra->setData($_POST['data']);
    $compra->setPag($_POST['pag']);
    $compra->setStatus($_POST['status']);
    $compra->setNome($_POST['nome']);
    try {
      $compraDao = CompraDao::insert($compra);
      $msg->setMensagem("Usuário Salvo com sucesso.", "bg-success");
      header("Location: index.php");
    } catch (Exception $e) {
     // echo 'Exceção capturada: ',  $e->getMessage(), "\n";
      $msg->setMensagem("Verifique os dados Digitados.", "bg-danger");
      header("Location: register.php");
    } 
    break;
  case 'ATUALIZAR':
        //pode validar as informações
        $compra->setQtd($_POST['qtd']);
        $compra->setVal($_POST['val']);
        $compra->setData($_POST['data']);
        $compra->setPag($_POST['pag']);
        $compra->setStatus($_POST['status']);
        $compra->setNome($_POST['nome']);
        try {
          $compraDao = CompraDao::update($_POST["codCompra"], $compra);
          $msg->setMensagem("Compra atualizada com sucesso.", "bg-success");
          header("Location: index.php");
        } catch (Exception $e) {
         echo 'Exceção capturada: ',  $e->getMessage(), "\n";

        } 
    break;

  case 'SELECTID':

    try {
        $compraDao = CompraDao::selectById($_POST['id']);
        // Configura as opções do contexto da solicitação
        include('register.php');
    } catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    } 
    break;
  }
?>