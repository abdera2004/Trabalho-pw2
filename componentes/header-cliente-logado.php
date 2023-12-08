<header>
  <nav class="navbar navbar-expand-lg d-flex flex-column" style="background-color: #353535;">
    <div class="container-fluid d-flex w-100" style="justify-content: space-between;">
      <a href="home.php" class="d-flex link-body-emphasis text-decoration-none start-0">
        <img src="./../img/site/logo-nova.png" width="100" height="100" class="" alt="">
      </a>
      <a href="#" class="text-white d-block link-body-emphasis text-decoration-none dropdown-toggle"
      data-bs-toggle="dropdown" aria-expanded="false">
      <img src="./../img/user/<?=$authClient['img']? $authClient['img'] : 'padrao.png'?>" alt="mdo" width="90" height="90" class="rounded-circle">
      </a>
      <ul class="dropdown-menu text-small">
          <a class="dropdown-item" href="#"><?=$authClient['nome']?></a>
          <li><a class="dropdown-item" href="#">Perfil</a></li>
          <li><a class="dropdown-item" href="favorito.php">Favoritos</a></li>

          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
        </ul>
      </div>
      <div class="w-100">
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 mb-md-0" style="justify-content: space-between;">
            <li><a href="home.php" class="nav-link px-3 text-nav text-white">HOME</a></li>
            <li><a href="jogo.php" class="nav-link px-3 text-nav text-white">JOGOS</a></li>
            <li><a href="sobre.php" class="nav-link px-3 text-nav text-white">SOBRE</a></li>
            <div style="margin-left: 10px; margin-right: 10px;"></div>
            <div style="background-color: white; border-radius: 50px; padding-top: 7px" class="">
              <li><a type="button" href="logout.php" class="text-nav" style="justify-content: center; align-items: center; color: red;">LOGOUT</a></li>
            </div>
            <div class="">
              <form class="d-flex" role="search">
              <input class="form-control me-2 rounded-5" type="search" placeholder="Pesquisar..." aria-label="Search">
              </form>
            </div>
          </ul>
      </div>
  </nav>
</header>

<style>

.imagem{
  
object-fit: contain;
margin-bottom: 10px;

}

.text-nav{
  color: #2BC016; 
  padding-left: 10px; 
  padding-right: 10px;
  font-weight: bold;
}

</style>