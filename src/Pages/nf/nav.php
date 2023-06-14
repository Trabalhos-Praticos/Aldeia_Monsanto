<style>
  #imagem{
    width:15%;
  }
</style>

<nav class="navbar navbar-expand-lg bg-body-black">
  <div class="container-fluid">
    <a class="navbar-brand" href="../Index/index.php"><img id="imagem" src="../../Assets/Logo/Monsanto.webp"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../Index/index.php">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../Historia/Historia.php">História</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../Estadias/Estadias.php">Estadias</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../ProgramasTuristicos/ProgramasTuristicos.php">Programas Turísticos</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../Visitar/Visitar.php">Visitar</a>
        </li>
      </ul>
      <span class="navbar-text">
      <ul class="nav navbar-nav navbar-right">
      <li><p></p></li>
      <li><form action="/src/Controladores/Autenticacao.php" method="post">
              <button class="btn btn-danger" type="submit" name="utilizador" value="logout">Logout</button>
            </form></li>
    </ul>
      </span>
    </div>
  </div>
</nav>