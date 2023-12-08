<?php
 require_once '../../dao/TelAdmDao.php';
 require_once '../../model/TelAdm.php';
 require_once '../../model/Mensagem.php';

 $teladm = new TelAdm();
 $msg = new Mensagem();

  //var_dump($_POST); 

  session_start();
  if(isset($_SESSION["authAdm"])){
  $authAdm = $_SESSION["authAdm"];
  }

 switch ($_POST["acao"]) {
  case 'DELETE':
   try {
        $teladmDao = TelAdmDao::delete($_POST['idDeletar']);
        header("Location: index.php");
    } catch (Exception $e) {
      echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    }
    break;

  case 'SALVAR':
    //pode validar as informações
    $teladm->setNum($_POST['num']);
    try {
      $teladmDao = TelAdmDao::insert($teladm);
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
        $teladm->setNum($_POST['num']);
        try {
          $teladmDao = TelAdmDao::update($_POST["codTelAdm"], $teladm);
          $msg->setMensagem("Número Atualizado com sucesso.", "bg-success");
          header("Location: index.php");
        } catch (Exception $e) {
         echo 'Exceção capturada: ',  $e->getMessage(), "\n";

        } 
    break;

  case 'SELECTID':

    try {
        $teladmDao = TelAdmDao::selectById($_POST['id']);
        // Configura as opções do contexto da solicitação
        include('register.php');
    } catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    } 
    break;
  }
?>