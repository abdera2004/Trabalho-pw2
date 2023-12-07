<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Control Games | Sobre</title>
  <?php
  include('./../componentes/titulo.php');
  ?>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- icon Booststrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <!-- CSS Projeto -->
  <link rel="stylesheet" href="../css/style.css">
</head>

<?php 
  include('./../componentes/header-cliente.php');
?>

<body style="justify-content: center; align-items: center; height: 100vh; background-image: url(../img/site/fundo-neon4.jpg);">

  <div class="container-fluid h-100 container00 container01">
    <div class="container">

    </div>
    <div class="container" style="height: 70vh;">
      <div class="w-100 shadow bg-transparent">
        <div class="card-header text-center mt-5 mb-5">
          <h1 class="display-5" style="color: white;">O QUE É A CONTROL GAMES?</h1>
        </div>
        <div class="card-body mb-5">

          <p style="text-align: center; color: white;" class="fs-5">Somos uma empresa voltada para a venda de jogos eletronicos, onde buscamos sempre oferecer um servico de qualidade aos nossos clientes, valorizando os principios eticos e sempre priorizando a satisfacao e o bem-estar dos mesmos.</p>

        </div>

        <div class="">
          <h3 class="text-white mb-5">DESENVOLVIDO POR:</h3>
          <img src="./../img/site/ruan.jpeg" alt="mdo" width="169" height="169" class="rounded-circle align-text-center">
          <text class="fs-3 text-white px-3">RUAN SANTOS PEREIRA</text>
        </div>
      </div>
    </div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>

</body>
  <?php 
      include('./../componentes/footer-cliente.php');
  ?>
</html>