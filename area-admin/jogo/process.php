<?php
 require_once '../../dao/JogoDao.php';
 require_once '../../model/Jogo.php';
 require_once '../../model/Mensagem.php';

 $jogo = new Jogo();
 $msg = new Mensagem();

  //var_dump($_POST); 


 switch ($_POST["acao"]) {
  case 'DELETE':
   try {
        $jogoDao = JogoDao::delete($_POST['idDeletar']);
        header("Location: index.php");
    } catch (Exception $e) {
      echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    }
    break;

  case 'SALVAR':
    //pode validar as informações
    $jogo->setnomeJogo($_POST['nome']);
    $jogo->setGenero($_POST['genero']);
    $jogo->setPlataforma($_POST['plataforma']);
    $jogo->setPreco($_POST['preco']);
    $jogo->setTamanho($_POST['tamanho']);
    $jogo->setImagem($jogo->salvarImagem($_POST['nomeFoto'])); 
    try {
      $jogoDao = JogoDao::insert($jogo);
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
        $jogo->setnomeJogo($_POST['nome']);
        $jogo->setGenero($_POST['genero']);
        $jogo->setPlataforma($_POST['plataforma']);
        $jogo->setPreco($_POST['preco']);
        $jogo->setTamanho($_POST['tamanho']);
        $jogo->setImagem($jogo->salvarImagem($_POST['nomeFoto'])); 
        try {
          $jogoDao = JogoDao::update($_POST["codJogo"], $jogo);
          $msg->setMensagem("Jogo Atualizado com sucesso.", "bg-success");
          header("Location: index.php");
        } catch (Exception $e) {
         echo 'Exceção capturada: ',  $e->getMessage(), "\n";

        } 
    break;

  case 'SELECTID':

    try {
        $jogoDao = JogoDao::selectById($_POST['cod']);
        // Configura as opções do contexto da solicitação
        include('register.php');
    } catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    } 

  
    break;


  }




 

?>