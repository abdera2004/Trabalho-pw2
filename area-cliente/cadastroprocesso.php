<?php
 require_once '../dao/UserDao.php';
 require_once '../model/User.php';
 require_once '../model/Mensagem.php';

 $user = new User();
 $msg = new Mensagem();

    //var_dump($_POST);
switch ($_POST["acao"]) {


    case 'ATUALIZAR':
        echo 'Atualizar';
    break;
    case 'SALVAR':
            //pode validar as informações
    $user->setNome($_POST['nome']);
    $user->setCpf($_POST['cpf']);
    $user->setNasc($_POST['nasc']);
    $user->setCelular($_POST['cel']);
    $user->setEmail($_POST['email']);
    $user->setPassword($_POST['password']);
    $user->setCep($_POST['cep']);
    $user->setEndereco($_POST['endereco']);
    $user->setImagem($user->salvarImagem($_POST['nomeFoto'])); 
    $user->setToken($user->generateToken());
    try {
      $userDao = ClientDao::insert($user);
      $msg->setMensagem("Usuário Salvo com sucesso.", "bg-success");
      header("Location: login.php");
    } catch (Exception $e) {
     echo 'Exceção capturada: ',  $e->getMessage(), "\n";
     $msg->setMensagem("Verifique os dados Digitados.", "bg-danger");
     header("Location: cadastro.php");
    } 
    break;
    }

?>