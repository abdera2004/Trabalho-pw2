<?php 
  require_once "../dao/JogoDao.php";
  
  $jogos = JogoDao::selectAllAsc();
  //var_dump($movies);
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

<body style="justify-content: center; align-items: center; height: 100vh; background-image: url(../img/site/fundo-neon2.jpg);">

  <div class="container-fluid container00">
    <div class="container">
      <?php 
        include('./../componentes/header-cliente.php');
      ?>
    </div>
    <div class="container" style="height: 70vh; ">
      <div class="px-lg-5">
        <div class="row py-5 justify-content-evenly ">
          <!-- Gallery item -->
          <div class="lista">
            <?php foreach($jogos as $jogo) { ?>
              <div id="card" class="rounded-4 border border-4 border-color-white">
                <img src="../img/jogo/<?=$movie[6]="" ? $movie[6] : 'padrao.png';?>" alt="" class="img-fluid card-img-top">
                <td><?=$jogo[1]?></td><br>
                <td>Gênero: <?=$jogo[2]?></td><br>
                <td>Plataformas: <?=$jogo[3]?></td><br>
                <td>Preço: <?=$jogo[4]?></td><br>
                <td>Data de lançamento: <?=$jogo[7]?></td>
                <td class="text-center">
                  <form action="process.php" method="POST">
                    <input type="hidden" class="form-control" id="acao" name="acao" value="SELECTID">
                    <input type="hidden" class="form-control" id="id" name="id" value="<?=$jogo[0]?>">
                    <button type="submit" class="dropdown-item" ><i
                        class="fas fa-edit fa-lg text-secondary"></i>
                    </button>
                  </form>
                </td>
                <td class="text-center ">
                  <a class="dropdown-item" onclick="modalRemover(<?=$jogo[0]?>,'idDeletar')">
                    <i class="fas fa-trash-alt fa-lg text-danger" style="cursor: pointer;"></i>
                  </a>
                </td>
              <div>
                <?php } ?>
          </div>
        </div>
      </div>
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