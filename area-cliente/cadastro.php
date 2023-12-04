<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Control Games | Adm</title>
  <?php
  include('./../componentes/titulo.php');
  ?>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- icon -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"> <!-- CSS Projeto -->
  <link rel="stylesheet" href="../css/style.css">
</head>

<body style="justify-content: center; align-items: center; height: 100vh;  " class="bg-dark">
  <div class="container col-xl-10 col-xxl-8 " style="height: 95vh; padding:8% 30px; background-color:'#ccc'">
    <div class="row align-items-center g-lg-5 py-4">
      <div class="mx-auto">
        <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary" method="post" action="home.php">
          <div class="col-md-2 text-center">
            <div class="d-flex flex-row">
              <div class="bg-white rounded border mb-3" >
                <img id="preview" src="../../img/user/<?=$imagem_User!="" ? $imagem_User : 'padrao.png';?>" alt="..."
                  class="rounded  w-100" style="height:1000px; object-fit: cover; border:4px solid #ccc" >
              </div>
            
            <div class="col-md-2 mb-3 px-3">
              <input type="file" id="foto" name="foto" accept="image/*" class="custom-file-input">
            </div>
          </div>
          </div>
          <div class="form-floating mb-3">
            <input type="text" name="nome" class="form-control" id="floatingInput" placeholder="Nome">
            <label for="floatingInput">Nome</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" name="sobrenome" class="form-control" id="floatingPassword" placeholder="Sobrenome">
            <label for="floatingPassword">Sobrenome</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" name="cpf" class="form-control" id="floatingPassword" placeholder="CPF">
            <label for="floatingPassword">CPF</label>
          </div>
          <div class="form-floating mb-3">
            <input type="date" name="nasc" class="form-control" id="floatingPassword" placeholder="Data de nascimento">
            <label for="floatingPassword">Data</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control" id="floatingPassword" placeholder="Email">
            <label for="floatingPassword">Email</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Senha">
            <label for="floatingPassword">Senha</label>
          </div>
          <div class="checkbox mt-3 mb-2">
            <label>
              <input type="checkbox" value="remember-me"> Lembre de mim
            </label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Logar</button>
          <hr class="my-4">
          <small class="text-body-secondary">Ao clicar em Cadastre-se, você concorda com os termos de uso.</small>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
</body>

</html>