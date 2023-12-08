<?php 
  session_start();
  require_once("../componentes/modal.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Control Games | Login</title>
  <?php
  include('./../componentes/titulo.php');
  ?>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- icon -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"> <!-- CSS Projeto -->
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<div class="container-fluid">
  <div class="row mx-auto">
    <!-- Primeira div ocupando metade da tela (col-md-6) -->
    <div class="col-md-6 centralizado">
      <img src="../img/site/login.png">
    </div>
    
    <!-- Segunda div ocupando a outra metade da tela (col-md-6) -->
    <div class="col-md-6 centralizado">
      <form class="border rounded-4" style="background-color: #CBEFB6" method="post" action="home.php">
        <h1 class="p-1">BEM-VINDO(A) DE VOLTA!</h1>
        <hr class="opacity-100" style="width: 100%;">
        <div class="form-floating mb-3 mx-3">
          <input type="text" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
          <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating mx-3">
          <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>        
          <label for="floatingPassword">Senha</label>
        </div>
        <div class="checkbox mt-3 mb-2 mx-3">
          <label>
            <input type="checkbox" value="remember-me"> Lembre de mim
          </label>
        </div>
        <button class="w-50 btn btn-lg mb-2 mx-3" style="background-color: #FFCF00;" type="submit">Logar</button>
        <a class=" btn btn-primary px-3" role="button" aria-disabled="true" href="home.php">Voltar</i></a>
        <hr class="my-4">
        <small class="text-body-secondary p-1">Ao clicar em Cadastre-se, você concorda com os termos de uso.</small>
      </form>
    </div>
  </div>
</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer>
</script>
</body>

<style>

.centralizado {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh; 
              }

</style>

</html>