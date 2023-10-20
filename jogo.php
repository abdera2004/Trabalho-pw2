<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jogos</title>
  <link rel="short icon" href="./../img/user/jogopng.png" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- icon Booststrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <!-- CSS Projeto -->
  <link rel="stylesheet" href="../css/style.css">
</head>

<body style="justify-content: center; align-items: center; height: 100vh ">

  <div class="container-fluid container00 container02">
    <div class="container">
      <?php 
        include('./../componentes/header-cliente.php');
      ?>
    </div>
    <div class="container" style="height: 70vh; ">
      <div class="px-lg-5">
        <div class="row py-5 justify-content-evenly ">
          <!-- Gallery item -->
          <div class="col-xxl-3 col-lg-3 col-md-6 mb-4 mt-3" style="width: 300px;">
            <div class="bg-white rounded shadow card">
              <img src="../img//site/nfsunbound.jpg" alt="" class="img-fluid card-img-top">
              <div class="p-4">
                <h5 class="card-title">Need for Speed Unbound</h5>
                <p class="small text-muted mb-2" style="text-align:justify">Need for Speed Unbound é um jogo eletrônico de simulação de direção de mundo aberto ambientado na cidade fictícia Lakeshore, inspirada em Chicago.</p>
                <p class="small text-muted mb-1"><span class="fw-bold">Categoria: </Span>Corrida</p>
                <p class="small text-muted mb-1"><span class="fw-bold">Plataformas: </Span>Windows, Playstation 5, Xbox Series</p>
              </div>
            </div>
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