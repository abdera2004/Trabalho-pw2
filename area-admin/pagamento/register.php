<?php 
  require_once("../../componentes/modal.php");
  require_once '../../dao/PagamentoDao.php';
  if(!empty($_POST)){
    $cod_Pagamento = $pagamentoDao['codPagamento'];
    $desc_Pagamento =  $pagamentoDao['descFormaPagamento'];
    }else{
      $desc_Pagamento = '';
      $cod_Pagamento = '';
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<?php
  session_start();
  if(isset($_SESSION["authAdm"])){
  $authAdm = $_SESSION["authAdm"];
  }
?>
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
      <div class="col-md-10 p-4 border">
        <div class="card">
          <form method="post" action="process.php" enctype="multipart/form-data" class="needs-validation" novalidate>
            <div class="card-header">
              <strong>INFORMAÇÕES DO PAGAMENTO</strong>
              <input type="text" name="codPagamento" id="codPagamento" placeholder="codPagamento" value="<?=$cod_Pagamento?>">
              <input type="text" value="<?=$cod_Pagamento?'ATUALIZAR':'SALVAR'?>" name="acao">
            </div>
            <div class="card-body row" style="align-items: center; justify-content: center;">
              <div class="col-md-1 text-center">
              </div>
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-3 mb-3">
                    <label for="nome" class="col-form-label">Descrição:</label>
                    <input type="text" class="form-control" name="nome" maxlength="50" id="nome" value="<?=$desc_Pagamento?>"  required>
                    <div class="invalid-feedback">
                      Nome Inválido
                    </div>
                  </div>
                </div>
                  <div class="row mt-1">
                  <div class="text-end col-md-1">
                  <a class="btn btn-primary px-3 my-1" role="button" aria-disabled="true" href="index.php">Voltar</i></a>
                  <input type="submit" class="px-3 btn btn-success" value="Salvar">
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