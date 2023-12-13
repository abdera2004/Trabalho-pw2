<?php

require_once '../dao/UserDao.php';
require_once '../model/User.php';
require_once '../model/Mensagem.php';

$user = new User();
$msg = new Mensagem();

   //var_dump($_POST);
switch ($_POST["acao"]) {

case 'ATUALIZAR':
        //pode validar as informações
        $user->setNome($_POST['nome']);
        $user->setSobrenome($_POST['sobrenome']);
        $user->setCpf($_POST['cpf']);
        $user->setNasc($_POST['nasc']);
        $user->setEmail($_POST['email']);
        $user->setPassword($_POST['password']);
        $user->setImagem($user->salvarImagem($_POST['nomeFoto'])); 
        $user->setToken($user->generateToken());
        try {
          $userDao = UserDao::update($_POST["idUser"], $user);
          $msg->setMensagem("Usuário Atualizado com sucesso.", "bg-success");
          header("Location: index.php");
        } catch (Exception $e) {
         echo 'Exceção capturada: ',  $e->getMessage(), "\n";

        } 
    break;
    }
?>