<?php 
  require_once("../../componentes/modal.php");
  require_once '../../dao/CompraDao.php';
  if(!empty($_POST)){
    $id_Compra = $compraDao['codCompra'];
    $qtd_Compra =  $compraDao['qtdJogosCompra'];
    $valor_Compra = $compraDao['valorTotalCompra'];
    $data_Compra = $compraDao['dataCompra'];
    $pag_Compra = $compraDao['formaPagamento'];
    $status_Compra = $compraDao['statusCompra'];
    $nome_Compra = $compraDao['nomeJogo'];
    }else{
        $qtd_Compra = '';
        $valor_Compra = '';
        $data_Compra = '';
        $pag_Compra = '';
        $status_Compra = '';
        $nome_Compra = '';
        $id_Compra = '';
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
      <div class="col-md-10 p-4 borber">
        <div class="card">
          <form method="post" action="process.php" enctype="multipart/form-data" class="needs-validation" novalidate>
            <div class="card-header">
              <strong>INFORMAÇÕES DA COMPRA</strong>
              <input type="text" name="idCompra" id="idCompra" placeholder="id" value="<?=$id_Compra?>">
              <input type="text" value="<?=$id_Compra?'ATUALIZAR':'SALVAR'?>" name="acao" >
            </div>

            <div class="card-body row" style="align-items: center; justify-content: center;">
              <div class="col-md-2   text-center" >
              </div>
              <div class=" col-md-10">
                <div class="row">
                  <div class="col-md-3 mb-3">
                    <label for="nome" class="col-form-label">Nome do jogo:</label>
                    <input type="text" class="form-control" name="nome" maxlength="50" id="nome" value="<?=$nome_Compra?>"
                      required>
                    <div class="invalid-feedback">
                      Nome Inválido
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="data" class="col-form-label">Data da compra:</label>
                    <input type="date" class="form-control" name="data" maxlength="50" id="data"
                      value="<?=$data_Compra?>" required>
                    <div class="invalid-feedback">
                      Data Inválida
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="val" class="col-form-label">Valor total:</label>
                    <input type="text" class="form-control" name="val" maxlength="50" id="val"
                      data-mask="R$ 000.00" data-mask-selectonfocus="true" value="<?=$valor_Compra?>" required>
                    <div class="invalid-feedback">
                      Valor Inválido
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <label for="qtd" class="col-form-label">Quantidade de jogos:</label>
                    <input type="number" class="form-control" name="qtd" id="qtd" value="<?=$qtd_Compra?>" required>
                    <div class="invalid-feedback">
                      Quantidade Inválida
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="pag" class="col-form-label">Forma de pagamento:</label>
                    <input type="text" class="form-control" name="pag" maxlength="50" value="<?=$pag_Compra?>"
                      id="pag" required>
                    <div class="invalid-feedback">
                      Forma de pagamento Inválida
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="status" class="col-form-label">Status:</label>
                    <input type="text" class="form-control" name="status" value="<?=$status_Compra?>" maxlength="100"
                      id="status" required>
                    <div class="invalid-feedback">
                      Status Inválido
                    </div>
                  </div>
                </div>
                <div class="row mt-5 ">
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