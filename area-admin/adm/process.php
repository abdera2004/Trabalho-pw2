<?php
 require_once '../../dao/AdmDao.php';
 require_once '../../model/Adm.php';
 require_once '../../model/Mensagem.php';

 $adm = new Adm();
 $msg = new Mensagem();

  //var_dump($_POST); 


 switch ($_POST["acao"]) {
  case 'DELETE':
   try {
        $admDao = UserDao::delete($_POST['idDeletar']);
        header("Location: index.php");
    } catch (Exception $e) {
      echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    }
    break;

  case 'SALVAR':
    //pode validar as informações
    $adm->setNome($_POST['nome']);
    $adm->setSobrenome($_POST['sobrenome']);
    $adm->setCpf($_POST['cpf']);
    $adm->setNasc($_POST['nasc']);
    $adm->setEmail($_POST['email']);
    $adm->setPassword($_POST['senha']);
    $adm->setImagem($adm->salvarImagem($_POST['nomeFoto'])); 
    $adm->setToken($adm->generateToken());
    try {
      $admDao = AdmDao::insert($adm);
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
        $adm->setNome($_POST['nome']);
        $adm->setSobrenome($_POST['sobrenome']);
        $adm->setCpf($_POST['cpf']);
        $adm->setNasc($_POST['nasc']);
        $adm->setEmail($_POST['email']);
        $adm->setPassword($_POST['senha']);
        $adm->setImagem($adm->salvarImagem($_POST['nomeFoto'])); 
        $adm->setToken($adm->generateToken());
        try {
          $admDao = AdmDao::update($_POST["idAdm"], $adm);
          $msg->setMensagem("Usuário Atualizado com sucesso.", "bg-success");
          header("Location: index.php");
        } catch (Exception $e) {
         echo 'Exceção capturada: ',  $e->getMessage(), "\n";

        } 
    break;

  case 'SELECTID':

    try {
        $admDao = UserDao::selectById($_POST['id']);
        // Configura as opções do contexto da solicitação
        include('register.php');
    } catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    } 
    break;
  }
?>