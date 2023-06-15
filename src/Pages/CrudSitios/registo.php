<?php
# MIDDLEWARE PARA GARANTIR QUE APENAS UTILIZADORES NÃO AUTENTICADOS VEJAM A PÁGINA DE REGISTO
//require_once __DIR__ . '/../../middleware/middleware-nao-autenticado.php';

# CARREGA O CABECALHO PADRÃO COM O TÍTULO
$titulo = '- Registro';
//include_once __DIR__ . '/templates/cabecalho.php';
?>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body class="container vh-100 d-flex align-items-center justify-content-center text-center bg-light">
  <div class="w-75">
    <main>
      <section>
        <?php
        //include_once __DIR__ . '../../nf/nav.php';
        # MOSTRA AS MENSAGENS DE SUCESSO E DE ERRO VINDA DO CONTROLADOR-UTILIZADOR
        if (isset($_SESSION['sucesso'])) {
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
          echo $_SESSION['sucesso'] . '<br>';
          echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
          unset($_SESSION['sucesso']);
        }
        if (isset($_SESSION['erros'])) {
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
          foreach ($_SESSION['erros'] as $erro) {
            echo $erro . '<br>';
          }
          echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
          unset($_SESSION['erros']);
        }
        ?>
      </section>
      <form action="../../Controladores/controladorRegisto-Info.php" method="post">
        <h1 class="h3 mb-3 fw-normal">Registo</h1>
        <div class="form-floating mb-2">
          <input type="text" class="form-control" name="nome" placeholder="nome" maxlength="100" size="100" value="<?= isset($_REQUEST['nome']) ? $_REQUEST['nome'] : null ?>" required>
          <label for="nome">Nome:</label>
        </div>
        <div class="form-floating mb-2">
          <input type="text" class="form-control" name="texto" placeholder="texto" maxlength="500" size="500" value="<?= isset($_REQUEST['texto']) ? $_REQUEST['texto'] : null ?>" required>
          <label for="texto">Texto:</label>
        </div>
        <div class='input-group mb-2'>
        <label class="input-group-text" for="TipoDeRegisto">Tipo de registo</label>
            <select id="TipoDeRegisto" class="form-control" name='tipo'>
                <option value='Estadia'>Estadia</option>
                <option value='Programa Turistico'>Programa Turistico</option>
                <option value='Monumento'>Monumento</option>
            </select>
        </div>
        <div class="input-group mb-3">
        <label class="input-group-text" for="inputGroupFile01">Imagem</label>
        <input accept="image/*" type="file" class="form-control" id="inputGroupFile01" name="imagem" />
      </div>
        <button class="w-100 btn btn-lg btn-success mb-2" type="submit" name="info" value="registo">Registar</button>
      </form>
      <a href="/index.php"><button class="w-100 btn btn-lg btn-info">Voltar</button></a>
    </main>
    <?php
    //include_once __DIR__ . '/templates/rodape.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>