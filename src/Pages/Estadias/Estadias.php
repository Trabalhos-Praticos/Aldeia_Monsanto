<?php
# CARREGA MIDDLEWARE PARA GARANTIR QUE APENAS UTILIZADORES ACESSE O SITIO
require_once __DIR__ . '/../../middleware/middleware-utilizador.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="estadias.css"> -->


    <title>Estadias Monsanto</title>
</head>

<body>
    <?php
    include_once __DIR__ . '../../nf/nav.php';
    ?>

<div class="info_container">
        <div class="title_box">

            <h1 style="text-align: center;">Melhores Estadias de Monsanto</h1>
        </div>


    <div class="container d-flex align-items-center justify-content-center mt-3">

        <div class="card mb-3 align-items-center " >
            <div class="row d-flex align-items-center w-100">
                <div class="col p-2 ">
                    <img src="../../Assets/img/casas da vila.jpg" class="img-fluid rounded-start" alt="..." >
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title">Casas da Vila</h3>
                        <h5 class="card-title">R. do Pardieiro nº 6 e 7, 6060-094 Monsanto - 6060-094 Monsanto 351960281677</h5>
                        <p class="card-text">Casas da Villa é um empreendimento turístico em Monsanto, a aldeia mais portuguesa de Portugal. Cada casa foi cuidadosamente restaurada para preservar sua arquitetura original e homenagear a história da região. Comodidades modernas foram adicionadas para oferecer uma experiência autêntica. A localização no coração de Monsanto proporciona vistas deslumbrantes e um ambiente tranquilo.</p>
                        <a href="https://goo.gl/maps/VwYGrosbiWtKesLaA" class="btn btn-primary">Ver no Mapa</a>
                        <a href="https://www.booking.com/Share-Z4M24i" target="_blank" class="btn btn-primary">Reserve já</a>
                    </div>
                </div>
            </div>

        </div>
        
    </div>


    <div class="container d-flex align-items-center justify-content-center mt-3">

<div class="card mb-3 align-items-center " >
    <div class="row d-flex align-items-center w-100">
        <div class="col p-2 ">
            <img src="../../Assets/img/2.jpg" class="img-fluid rounded-start" alt="..." >
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h3 class="card-title">Casa Pires Mateus</h3>
                <h5 class="card-title">Rua Fernando Namora, Nº 4 - 6060-091 967086530, 918110179</h5>
                <p class="card-text">A Casa Pires Mateus é uma casa reconstruída recentemente, mantendo o estilo tradicional, na histórica aldeia de Monsanto. Com quartos confortáveis e casas de banho privativas, possui uma cozinha partilhada e sala comum. Os hóspedes podem relaxar no terraço com vista para a aldeia. Localizada a uma curta distância do Castelo de Monsanto, a Casa Pires Mateus é uma opção acolhedora para explorar a região.</p>
                <a href="https://goo.gl/maps/VwYGrosbiWtKesLaA" class="btn btn-primary">Ver no Mapa</a>
                <a href="https://www.booking.com/Share-Z4M24i" target="_blank" class="btn btn-primary">Reserve já</a>
            </div>
        </div>
    </div>

</div>

</div>


<div class="container d-flex align-items-center justify-content-center mt-3">

<div class="card mb-3 align-items-center " >
    <div class="row d-flex align-items-center w-100">
        <div class="col p-2 ">
            <img src="../../Assets/img/3.jpg" class="img-fluid rounded-start" alt="..." style="width: 150%;">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h3 class="card-title">Quinta de São Pedro de Vir-A-Corça</h3>
                <h5 class="card-title">Quinta de São Pedro de Vir-a-Corça - 6060-085 Monsanto Monsanto 00351918825579</h5>
                <p class="card-text">A Casa Pires Mateus é uma casa reconstruída recentemente, mantendo o estilo tradicional, na histórica aldeia de Monsanto. Com quartos confortáveis e casas de banho privativas, possui uma cozinha partilhada e sala comum. Os hóspedes podem relaxar no terraço com vista para a aldeia. Localizada a uma curta distância do Castelo de Monsanto, a Casa Pires Mateus é uma opção acolhedora para explorar a região.</p>
                <a href="https://goo.gl/maps/VwYGrosbiWtKesLaA" class="btn btn-primary">Ver no Mapa</a>
                <a href="https://www.booking.com/Share-Z4M24i" target="_blank" class="btn btn-primary">Reserve já</a>
            </div>
        </div>
    </div>

</div>

</div>




    <?php
    require_once __DIR__ . '/../nf/footer.php';
    ?>
    <script src="https://kit.fontawesome.com/f3e7e2778c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>