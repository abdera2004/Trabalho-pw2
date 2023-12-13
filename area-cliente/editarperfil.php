<?php     
  session_start();

  require_once("../componentes/modal.php");
  require_once '../dao/UserDao.php';

  if(!empty($_POST)){
    $id_User = $userDao['idUser'];
    $nome_User =  $userDao['nomeUser'];
    $sobrenome_User = $userDao['sobrenomeUser'];
    $cpf_User = $userDao['cpfUser'];
    $nasc_User= $userDao['nascUser'];
    $email_User = $userDao['emailUser'];
    $password_User = $userDao['passwordUser'];
    $imagem_User = $userDao['imagemUser'];
    }else{
      $nome_User = '';
      $sobrenome_User = '';
      $cpf_User = '';
      $nasc_User= '';
      $email_User = '';
      $password_User = '';
      $imagem_User = '';
      $id_User = '';
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Control Games | Cadastro</title>
  <?php
  include('./../componentes/titulo.php');
  ?>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- icon -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"> <!-- CSS Projeto -->
  <link rel="stylesheet" href="../css/style.css">
</head>

<body style="justify-content: center; align-items: center; background-image: url(../img/site/cadastro.jpg);" class="container00">
  <div class="container-fluid">
    <div class="container">
    <div class="p-3 bg-transparent">
      <div class="text-center">
        <h1 class="">EDITAR PERFIL</h1>
      </div>      
      <form method="post" action="editarperfilprocesso.php" enctype="multipart/form-data" class="needs-validation" novalidate>
              <input type="hidden" name="idUser" id="idUser" placeholder="id" value="<?=$id_User?>">
              <input type="hidden" name="nomeFoto" id="nomeFoto" placeholder="nome foto" value="<?=$imagem_User?>">
              <input type="hidden" value="<?=$id_User?'ATUALIZAR':'SALVAR'?>" name="acao" >
          <div class="row">
            <div class="col-md-9">
              <div class="d-flex flex-row">
                <div class="bg-white text-center me-3" style="border-radius: 100px;">
                  <img id="preview" src="../../img/user/<?=$imagem_User!="" ? $imagem_User : 'padrao.png';?>" alt="..."
                    class=""  style="width:200px; height: 200px; object-fit: cover; border-radius: 100px;">
                  <input type="file" id="foto" name="foto" accept="image/*" class="custom-file-input" style="display: none">
              </div>
              <label for="foto" style="height: 40px" class="btn btn-light mb-2">Carregar Imagem</label>
            </div>
            
                <div class="col-md-6">
                    <label for="nome" class="col-form-label">Nome:</label>
                    <input type="text" class="form-control" name="nome" maxlength="50" id="nome" value="<?=$nome_User?>" required>
                </div>

                <div class="col-md-6">
                    <label for="sobrenome" class="col-form-label ">Sobrenome:</label>
                    <input type="text" class="form-control" name="sobrenome" maxlength="50" id="sobrenome" required>
                </div>

                <div class="col-md-6">
                <label for="cpf" class="col-form-label ">CPF:</label>
                    <input type="text" data-mask="000.000.000-00" data-mask-selectonfocus="true" class="form-control" name="cpf" maxlength="50" id="cpf" required>
                </div>

              <div class="row">

                <div class="col-md-6">
                    <label for="nasc" class="col-form-label">Data de Nascimento:</label>
                    <input type="date"  class="form-control" name="nasc" maxlength="50" id="nasc" required>
                </div>

              </div>
              <div class="row">

                <div class="col-md-6">
                    <label for="email" class="col-form-label">Email:</label>
                    <input type="email" class="form-control" name="email" maxlength="50" id="email" required>
                </div>

              </div>

                <div class="col-md-6">
                    <label for="password" class="col-form-label">Senha:</label>
                    <input type="password" class="form-control" name="password" maxlength="50" id="password" required>
                </div>

                <div class="col-md-6">
                <label for="passwordconf" class="col-form-label">Confirmar Senha:</label>
                    <input type="password" class="form-control" name="passwordconf" maxlength="50" id="passwordconf" required>
                </div><br>
            </div>
          </div>
          <div class="row">
          <div class="col-md-12 ">
              <div class="row">
              <div class="row mt-4">
                <div class="col-md-2">
                  </div>
                  <div class=" text-end  col-md-10">
                  <a class=" btn btn-primary px-3" role="button" aria-disabled="true" href="home.php">Voltar</i></a>
                  <input type="submit" class=" btn btn-success" value="Salvar">
                </div>
                </div>
            </div>
          </div>
        </form>
      </div>


    <div>
  </div>

  <script type="text/javascript" src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer>
  </script>
  <!-- Para usar Mascara  -->
  <script type="text/javascript" src="./../js/jquery.mask.min.js"></script>
  <script type="text/javascript" src="./../js/personalizar.js"></script>
  <script type="text/javascript" src="./../js/modal.js"></script>
</body>

</html>