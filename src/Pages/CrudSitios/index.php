<?php
# INICIALIZA O REPOSITÓRIO
require_once __DIR__ . '../../../Infraestrutura/Repositorio.php';
# MIDDLEWARE PARA GARANTIR QUE APENAS ADMNISTRADORES ACESSES ESTA PÁGINA
require_once __DIR__ . '../../../middleware/middleware-administrador.php';

# FAZ O CARREGAMENTO DE TODOS OS UTILIZADORES PARA MOSTRAR AO ADMINISTRADOR
$info = lerTodasinfos();

# CARREGA O CABECALHO PADRÃO COM O TÍTULO
$titulo = 'Painel de Administração de Informações';

//require_once __DIR__ . '/templates/cabecalho.php';
?>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class="container bg-light">
  <div class="pt-1 ">
    <div class="p-5 mb-2 bg-info text-white">
      <h1><?php echo $titulo ?> </h1>
      <p>CRUD | Front-end Bootstrap | Back-end PHP</p>
    </div>
    <main class="bg-light">
      <section class="py-4">
        <div class="d-flex justify-content">
          <a href="registo.php"><button class="btn btn-success px-4 me-2">Criar info</button></a>
          <a href="../Index/index.php"><button class="btn btn-info px-2 me-2">Sair Painel infos</button></a>
        </div>
      </section>
      <section>
        <?php
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
      <section>
        <div class="table-responsive">
          <table class="table">
            <thead class="table-secondary">
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">Texto</th>
                <th scope="col">Tipo</th>
              </tr>
            </thead>
            <tbody>
              <?php
              # VARRE TODOS OS UTILIZADORES PARA CONSTRUÇÃO DA TABELA
              foreach ($info as $info) {
              ?>
                <tr>
                  <th scope="row"><?= $info['nome'] ?></th>
                  <td><?= $info['texto'] ?></td>
                  <td><?= $info['tipo'] ?></td>
                  <td>
                    <div class="d-flex justify-content">
                      <a href="../../Controladores/controlar-infos.php?<?= 'info=atualizar&id=' . $info['id'] ?>"><button type="button" class="btn btn-primary me-2">Atualizar</button></a>
                      <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#deletar<?= $info['id'] ?>">Excluir</button>
                    </div>
                  </td>
                </tr>
                <!-- Modal -->
                <div class="modal fade" id="deletar<?= $info['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir info</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Esta operação não poderá ser desfeita. Tem certeza que deseja excluir esta info?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <a href="/src/Controladores/controlar-infos.php?<?= 'info=deletar&id=' . $info['id'] ?>"><button type="button" class="btn btn-danger">Confirmar</button></a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Fim Modal -->
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </section>
    </main>
    <script src="https://kit.fontawesome.com/f3e7e2778c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <?php
    # CARREGA O RODAPE PADRÃO
    //require_once __DIR__ . '/templates/rodape.php';
    ?>