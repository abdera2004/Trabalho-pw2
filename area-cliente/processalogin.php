<?php
require_once '../dao/UserDao.php';

$user = UserDao::checkCredentials($_POST['email'], $_POST['password']);


if($user){
    $authClient = [
        'id' => $user['idUser'],
        'nome' => $user['nomeUser'],
        'email' => $user['emailUser'],
        'img' => $user['imagemUser'],
        'token' => $user['tokenUser']
    ];
        session_start();
        $_SESSION["authClient"] = $authClient;
        header("Location: home.php");
}else{
        header("Location: login.php?status=erro1");  
}



?>