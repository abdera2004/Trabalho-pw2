<?php
 require_once '../../dao/PlataformaDao.php';
 require_once '../../model/Plataforma.php';
 require_once '../../model/Mensagem.php';

 $plataforma = new Plataforma();
 $msg = new Mensagem();

  //var_dump($_POST); 


 switch ($_POST["acao"]) {
  case 'DELETE':
   try {
        $plataformaDao = PlataformaDao::delete($_POST['idDeletar']);
        header("Location: index.php");
    } catch (Exception $e) {
      echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    }
    break;

  case 'SALVAR':
    //pode validar as informações
    $plataforma->setDesc($_POST['nome']);
    try {
      $plataformaDao = PlataformaDao::insert($plataforma);
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
        $plataformaDao = PlataformaDao::selectById($_POST["codPlataformaJogo"]);
        // Configura as opções do contexto da solicitação
        include('register.php');
    } catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    } 
    break;
  }
?>