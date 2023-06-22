<?php

# CARREGA MIDDLEWARE PAGARA GARANTIR QUE APENAS UTILIZADORES ACESSE O SITIO
require_once __DIR__ . '/../../middleware/middleware-autenticado.php';


$utilizador = utilizador();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monsanto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    
    
</head>
<body>
     <!-- Start nav -->
<?php
include_once __DIR__ . '/../nf/nav.php';
?>
<div class = 'container'>

    <div class="Text_Box">
        <div class="Title_text mt-3" >
            <h1 style="text-align: center;">Bem Vindo a Monsanto, <?= $utilizador['nome'] ?? null ?> <?= $utilizador['apelido'] ?? null ?> </h1>
        </div>
    </div>
    
    
    <div class="container d-flex align-items-center justify-content-center mt-3">
        <div class="card mb-3 " >
            <div class="row d-flex align-items-center w-100">
                <div class="col-md-8">
                    <div class="card-body">
                        <div class="Box2 mt-3 ">
                            <iframe class="vid1" width="750" height="460" src="https://www.youtube.com/embed/44MNaDCyR4A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-flex align-items-center justify-content-center mt-3">
        <div class="card mb-3 " >
            <div class="row d-flex align-items-center w-100">
                
                <div class="col-md-12">
                    <div class="card-body">
                        <p class="card-text" style="text-align:justify;">Monsanto é uma aldeia histórica localizada no centro de Portugal, na região de Idanha a Nova. Situada no topo de uma colina íngreme, 
                        a aldeia é conhecida pela sua impressionante paisagem rochosa e casas construídas entre as pedras. Além disso, Monsanto é conhecida por ser uma das aldeias mais pitorescas de Portugal, 
                        com as suas ruas estreitas e sinuosas e vistas panorâmicas de tirar o fôlego. 
                    A vila é um destino turístico popular para quem procura experimentar a cultura tradicional portuguesa e a rica história do país.</p>   
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container d-flex align-items-center justify-content-center mt-3">
        <div class="card mb-3 " >
            <div class="row d-flex align-items-center w-100">
                <div class="col-md-8">
                    <div class="card-body">
                        <div class="Box2 mt-3 ">
                            <iframe class="maps"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d195595.4463968602!2d-7.235562628688513!3d40.00445242506212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd3d75bd5000d04d%3A0x824a112737bb26!2sMonsanto!5e0!3m2!1spt-PT!2spt!4v1680544170821!5m2!1spt-PT!2spt" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



  
    <?php
        # MOSTRA CARD APENAS SE UTILIZDOR FOR ADMINISTRADOR
        if (autenticado() && $utilizador['administrador']) {
        echo '<div class="col-md-6">
        <div class="h-100 p-5 bg-body-tertiary border rounded-3">
            <h2>Painel de Administração de Utilizadores</h2>
            <p>Este painel é exclusivo para utilizadores REGISTADOS e que tenham o perfil de ADMINISTRADOR. Aqui você poderá criar,
                alterar, apagar, promover e despromover outros utilizadores a administradores do sistema.</p>
            <a href="../Admin/index.php"><button class="btn btn-outline-success" type="button">Administração de Utilizadores</button></a>
            <a href="../CrudSitios/index.php"><button class="btn btn-outline-success" type="button">Administração de Informações</button></a>
        </div>
        </div>';
        }
    ?>

</div>

    <?php
        require_once __DIR__ . '/../nf/footer.php';
    ?>
</body>
<script src="https://kit.fontawesome.com/f3e7e2778c.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>