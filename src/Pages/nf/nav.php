<style>
  #imagem {
    width: 13%;
  }
</style>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
          <a class="nav-link" href="../Estadias/Estadias_p.php">Estadias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../ProgramasTuristicos/ProgramasTuristicos_p.php">Programas Turísticos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../Visitar/Visitar_p.php">Monumentos</a>
        </li>
      </ul>

      <span class="navbar-text">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/src/Pages/Perfil/perfil.php"><button class="btn btn-outline-info" style="margin-right: 10px;" type="button">Editar Perfil</button></a></li>
        </ul>
      </span>
      <span class="navbar-text">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <form action="/src/Controladores/Autenticacao.php" method="post">
              <button class="btn btn-outline-danger " type="submit" name="utilizador" value="logout">Logout</button>
            </form>
          </li>
        </ul>
      </span>
    </div>
  </div>
</nav>