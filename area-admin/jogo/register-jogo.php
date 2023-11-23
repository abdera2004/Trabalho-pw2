<?php 
  require_once("../../componentes/modal.php");
  require_once '../../dao/JogoDao.php';
  if(!empty($_POST)){
    $cod_Jogo = $JogoDao['codJogo'];
    $nome_Jogo =  $JogoDao['nomeJogo'];
    $genero_Jogo = $JogoDao['generoJogo'];
    $plataforma_Jogo = $JogoDao['plataformaJogo'];
    $preco_Jogo= $JogoDao['precoJogo'];
    $tamanho_Jogo = $JogoDao['tamanhoJogo'];
    $imagem_Jogo = $JogoDao['imagemJogo'];
    }else{
      $nome_Jogo = '';
      $genero_Jogo = '';
      $plataforma_Jogo = '';
      $preco_Jogo = '';
      $tamanho_Jogo = '';
      $imagem_Jogo = '';
      $cod_Jogo = '';
    }

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Control Games | Adm</title>
  <link rel="short icon" href="./../../img/site/logo.png" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- icon -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"> <!-- CSS Projeto -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body style="justify-content: center; align-items: center; height: 100vh ">
  <?php 
      include('./../../componentes/header-adm.php');
  ?>
  <div class="container-fluid" style="height: 90vh">
    <div class="row h-100">
      <?php 
      include('./../../componentes/menu-adm.php');
      ?>
      <div class="col-md-10  p-4 borber">
        <div class="card">
          <form method="post" action="process.php" enctype="multipart/form-data" class="needs-validation" novalidate>
            <div class="card-header">
              <strong>INFORMAÇÕES DO JOGO</strong>
              <input type="text" name="codjogo" id="idUser" placeholder="id" value="<?=$cod_Jogo?>">
              <input type="text" name="nomeFoto" id="nomeFoto" placeholder="nome foto" value="<?=$imagem_Jogo?>">
              <input type="text" value="<?=$cod_Jogo?'ATUALIZAR':'SALVAR'?>" name="acao" >

            </div>
            <div class="card-body row" style="align-items: center; justify-content: center;">
              <div class="col-md-2   text-center" >
                <div class="bg-white rounded border" >
                  <img id="preview" src="../../img/jogo/<?=$imagem_Jogo!="" ? $imagem_Jogo : 'padrao.png';?>" alt="..."
                    class="rounded  w-100  "  style="height:200px; object-fit: cover; border:4px solid #ccc" >
                </div>
              </div>
              <div class=" col-md-10">
                <div class="row">
                  <div class="col-md-3 mb-3">
                    <label for="nome" class="col-form-label">Nome:</label>
                    <input type="text" class="form-control" name="nome" maxlength="50" id="nome" value="<?=$nome_Jogo?>"
                      required>
                    <div class="invalid-feedback">
                      Nome Inválido
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="genero" class="col-form-label">Gênero:</label>
                    <input type="text" class="form-control" name="genero" maxlength="50" id="genero"
                      value="<?=$genero_Jogo?>" required>
                    <div class="invalid-feedback">
                      Gênero Inválido
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="plataforma" class="col-form-label">Plataforma:</label>
                    <input type="text" class="form-control" name="plataforma" maxlength="50" id="plataforma"
                      value="<?=$plataforma_Jogo?>" required>
                    <div class="invalid-feedback">
                      Plataforma Inválida
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <label for="preco" class="col-form-label">Preço:</label>
                    <input type="text" class="form-control" name="preco" id="preco" value="<?=$preco_Jogo?>"  data-mask="R$ 000,00" data-mask-selectonfocus="true" value="<?=$preco_Jogo?>" required>
                    <div class="invalid-feedback">
                      Preço Inválido
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="tamanho" class="col-form-label">Tamanho:</label>
                    <input type="email" class="form-control" name="tamanho" maxlength="100" value="<?=$tamanho_Jogo?>"
                      id="tamanho" required>
                    <div class="invalid-feedback">
                      Tamanho Inválido
                    </div>
                  </div>
                </div>
                <div class="row mt-5 ">
                  <div class="col-md-2">
                    <input type="file" id="foto" name="foto" accept="image/*" class="custom-file-input">
                  </div>
                  <div class=" text-end  col-md-10">
                  <a class=" btn btn-primary px-3" role="button" aria-disabled="true" href="index.php">Voltar</i></a>
                  <input type="submit" class=" btn btn-success" value="Salvar">
                </div>
                </div>

              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer>
  </script>
  <!-- Para usar Mascara  -->
  <script type="text/javascript" src="./../../js/jquery.mask.min.js"></script>
  <script type="text/javascript" src="./../../js/personalizar.js"></script>
  <script type="text/javascript" src="./../../js/modal.js"></script>

</body>

</html>