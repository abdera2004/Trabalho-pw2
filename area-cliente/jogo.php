<?php 
  require_once "../dao/JogoDao.php";
  
  $jogos = JogoDao::selectAllAsc();
  //var_dump($jogos);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Control Games | Jogos</title>
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

<body style="justify-content: center; align-items: center; background-image: url(../img/site/fundo-neon2.jpg); overflow-x: hidden;">

<?php
  session_start();
  if(isset($_SESSION["authClient"])){
  $authClient = $_SESSION["authClient"];
  include('./../componentes/header-cliente-logado.php');
  }else{
    include('./../componentes/header-cliente.php');
  }
?>

    <div>
      <div class="">
        <div class="row py-5 justify-content-evenly">
          <!-- Gallery item -->
          <?php foreach($jogos as $jogo) { ?>
            <div class="col-xxl-3 col-lg-3 col-md-6 mb-4 mt-3 m-1">
            <div class="bg-white rounded-4 shadow-card" style="height: 100%;">
              <img src="../img/jogo/<?=$jogo[6]!=".jpg" ? $jogo[6] : 'padrao.png';?>" alt="" class="img-fluid card-img-top rounded-top-4" style="width: 100%; height: 50%;  object-fit: cover;">
              <div style="height: 50%">  
                <div class="text-center justify-content-center d-flex">
                  <h6 class="card-title"><?=$jogo[1]?></h6>
                </div>
                <div class="justify-content-left px-2">
                  <h7 class="" style="font-size: small; font-weight: bold;">Gênero: <?=$jogo[2]?></h7><br>
                  <h7 class="" style="font-size: small; font-weight: bold;">Plataformas: <?=$jogo[3]?></h7><br>
                  <h7 class="" style="font-size: small; font-weight: bold;">Tamanho: <?=$jogo[5]?></h7><br>
                </div>
                <div class="text-center justify-content-center d-flex">
                  <h6 class="card-title py-4" style="color: #2BC016; font-weight: bold; font-size: large;"><?=$jogo[4]?></h6>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
      </div>
    </div>
<?php
  include('./../componentes/footer-cliente.php');
?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
</body>
</html>