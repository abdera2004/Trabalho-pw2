<?php

require_once 'dao/AdmDao.php';

$adm = AdmDao::checkCredentials($_POST['email'], $_POST['password']);

if($adm){
    $authAdm = [
        'nome' => $adm['nomeAdm'],
        'email' => $adm['emailAdm'],
        'img' => $adm['imagemAdm'],
        'token' => $adm['tokenAdm']
    ];
        session_start();
        $_SESSION["authAdm"] = $authAdm;
        header("Location: area-admin/home/index.php");
}else{
        header("Location: login.php?status=erro1");  
}

?>