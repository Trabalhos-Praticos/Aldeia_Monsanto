<?php
# CARREGA MIDDLEWARE PAGARA GARANTIR QUE APENAS UTILIZADORES ACESSE O SITIO
require_once __DIR__ . '/../../middleware/middleware-utilizador.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="ProgramasTurísticas.css"> -->
    <title>Programas Turísticos</title>
</head>
<body>
<?php

include_once __DIR__ . '../../nf/nav.php';

?>
<div class="container_prog">
    <div class="title_box_prog">

        <h1 style="text-align: center;">Programas Turísticos</h1>

    </div>

    <div class="container d-flex align-items-center justify-content-center mt-3">
    <div class="card mb-3 align-items-center " >
    <div class="row d-flex align-items-center w-100">
        <div class="col p-2 ">
            <img src="../../Assets/img/biketour1.jpg" class="img-fluid rounded-start" alt="..." >
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h3 class="card-title">BIKE TOUR</h3>
                <p class="card-text">A beleza desta Bike Tour permite pedalar em locais de elevada natureza histórica.</p>
                
            </div>
        </div>
    </div>

</div>

</div>

<div class="container d-flex align-items-center justify-content-center mt-3">
<div class="card mb-3 align-items-center " >
    <div class="row d-flex align-items-center w-100">
        <div class="col p-2 ">
            <img src="../../Assets/img/biketour2.jpg" class="img-fluid rounded-start" alt="..." >
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h3 class="card-title">PASSEIO DE BICICLETA NAS ALDEIAS HISTÓRICAS PORTUGUESAS</h3>
                <p class="card-text">Este passeio de bicicleta permite-lhe descobrir a história da mais antiga fronteira europeia. Encontre doze aldeias espalhadas pelo Centro de Portugal, cada uma mais surpreendente que a anterior.</p>   
            </div>
        </div>
    </div>
</div>
</div>


<div class="container d-flex align-items-center justify-content-center mt-3">
<div class="card mb-3 align-items-center " >
    <div class="row d-flex align-items-center w-100">
        <div class="col p-2 ">
            <img src="../../Assets/img/caminhada1.jpg" class="img-fluid rounded-start" alt="..." >
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h3 class="card-title">CAMINHADA PELAS ALDEIAS HISTÓRICAS – MONSANTO</h3>
                <p class="card-text">Caminhe e inspire-se nas paisagens únicas do interior de Portugal e deguste iguarias regionais como o queijo, vinho, cabrito, borrego e enchidos.</p> 
            </div>
        </div>
    </div>
</div>
</div>

<div class="container d-flex align-items-center justify-content-center mt-3">
<div class="card mb-3 align-items-center " >
    <div class="row d-flex align-items-center w-100">
        <div class="col p-2 ">
            <img src="../../Assets/img/biketour3.jpg" class="img-fluid rounded-start" alt="..." >
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h3 class="card-title">CICLOTURISMO NAS ALDEIAS HISTÓRICAS – CASTELO RODRIGO</h3>
                <p class="card-text">Envolva-se numa experiência medieval por entre as muralhas da aldeia histórica de Castelo Rodrigo, local de excepcional interesse histórico pelos monumentos que conserva.</p> 
            </div>
        </div>
    </div>
</div>
</div>


<div class="container d-flex align-items-center justify-content-center mt-3">
<div class="card mb-3 align-items-center " >
    <div class="row d-flex align-items-center w-100">
        <div class="col p-2 ">
            <img src="../../Assets/img/biketour4.jpg" class="img-fluid rounded-start" alt="..." >
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h3 class="card-title">CICLOTURISMO NAS ALDEIAS HISTÓRICAS – MONSANTO</h3>
                <p class="card-text">Mergulhe numa experiência incrível que mistura aldeias medievais idílicas, conheça aquela que é distinguida como sendo a “aldeia mais portuguesa de Portugal”.</p> 
            </div>
        </div>
    </div>
</div>
</div>


<div class="container d-flex align-items-center justify-content-center mt-3">
<div class="card mb-3 align-items-center " >
    <div class="row d-flex align-items-center w-100">
        <div class="col p-2 ">
            <img src="../../Assets/img/ilhapedra.jpg" class="img-fluid rounded-start" alt="..." >
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h3 class="card-title">DA ILHA DA PEDRA À EGITÂNIA</h3>
                <p class="card-text">Monsanto surge imponente na paisagem clamando desde logo a sua importância e majestosidade. Esta ilha de pedra rodeada de curiosas formações rochosas possui um mundo de recantos por descobrir.</p>
            </div>
        </div>
    </div>
</div>
</div>


<div class="container d-flex align-items-center justify-content-center mt-3">
<div class="card mb-3 align-items-center " >
    <div class="row d-flex align-items-center w-100">
        <div class="col p-2 ">
            <img src="../../Assets/img/sagradoaoprofano.jpg" class="img-fluid rounded-start" alt="..." >
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h3 class="card-title">DO SAGRADO E DO PROFANO</h3>
                <p class="card-text">Gosta do inesperado? Quer conhecer uma aldeia que poucos conhecem? Neste passeio a Proença-a-Velha, uma das mais antigas povoações de Portugal, percorremos os seus caminhos entre oliveiras e lugares sagrados.</p> 
            </div>
        </div>
    </div>
</div>
</div>


<div class="container d-flex align-items-center justify-content-center mt-3">
<div class="card mb-3 align-items-center " >
    <div class="row d-flex align-items-center w-100">
        <div class="col p-2 ">
            <img src="../../Assets/img/rioeges.jpg" class="img-fluid rounded-start" alt="..." >
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h3 class="card-title">ERGES: CAMINHADA SENSORIAL</h3>
                <p class="card-text">Quer fazer uma pausa? Temos uma experiência de tranquilidade, natureza e cultura para si: nas margens do rio Erges despertamos todos os sentidos, e saboreamos a cultura local.</p>
            </div>
        </div>
    </div>
</div>
</div>


<div class="container d-flex align-items-center justify-content-center mt-3">
<div class="card mb-3 align-items-center " >
    <div class="row d-flex align-items-center w-100">
        <div class="col p-2 ">
            <img src="../../Assets/img/egitania.jpg" class="img-fluid rounded-start" alt="..." >
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h3 class="card-title">ILUMINANDO O PASSADO</h3>
                <p class="card-text">Caminhe e inspire-se nas paisagens únicas do interior de Portugal e deguste iguarias regionais como o queijo, vinho, cabrito, borrego e enchidos.</p> 
            </div>
        </div>
    </div>
</div>
</div>

<div class="container d-flex align-items-center justify-content-center mt-3">
<div class="card mb-3 align-items-center " >
    <div class="row d-flex align-items-center w-100">
        <div class="col p-2 ">
            <img src="../../Assets/img/got.jpg" class="img-fluid rounded-start" alt="..." >
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h3 class="card-title">LENDAS E DRAGÕES</h3>
                <p class="card-text">É fã da Guerra dos Tronos ? Esta atividade é para si! Visite os misteriosos cenários da Casa do Dragão, e “mergulhe” nas lendas da aldeia histórica de Monsanto.</p>
            </div>
        </div>
    </div>
</div>
</div>

<div class="container d-flex align-items-center justify-content-center mt-3">
<div class="card mb-3 align-items-center " >
    <div class="row d-flex align-items-center w-100">
        <div class="col p-2 ">
            <img src="../../Assets/img/egitania2.jpg" class="img-fluid rounded-start" alt="..." >
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h3 class="card-title">RETRATOS DOS TEMPOS</h3>
                <p class="card-text">Viaje no tempo. Pise caminhos percorridos por romanos, visigodos e templários. Sinta e respire História na antiga cidade de Egitânia, um local com mais de 2 mil anos, onde deuses foram adorados e diferentes povos se cruzaram.</p>
            </div>
        </div>
    </div>
</div>
</div>

<div class="container d-flex align-items-center justify-content-center mt-3">
<div class="card mb-3 align-items-center " >
    <div class="row d-flex align-items-center w-100">
        <div class="col p-2 ">
            <img src="../../Assets/img/btt.jpg" class="img-fluid rounded-start" alt="..." >
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h3 class="card-title">PASSEIO DE BTT NAS ALDEIAS HISTÓRICAS PORTUGUESAS</h3>
                <p class="card-text">Viaje no tempo. Pise caminhos percorridos por romanos, visigodos e templários. Sinta e respire História na antiga cidade de Egitânia, um local com mais de 2 mil anos, onde deuses foram adorados e diferentes povos se cruzaram.</p>
            </div>
        </div>
    </div>
</div>
</div>


<div class="container d-flex align-items-center justify-content-center mt-3">
<div class="card mb-3 align-items-center " >
    <div class="row d-flex align-items-center w-100">
        <div class="col p-2 ">
            <img src="../../Assets/img/geomonumento.jpg" class="img-fluid rounded-start" alt="..." >
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h3 class="card-title">PEDRAS COM HISTÓRIA</h3>
                <p class="card-text">Envolva-se num cenário em que a Natureza e o Homem são um só. Deixe-se devorar por uma paisagem avassaladora. Toque em geomonumentos, conheça a história e estratégias de guerra que se transformaram em lendas vivas.</p> 
            </div>
        </div>
    </div>
</div>
</div>

<div class="container d-flex align-items-center justify-content-center mt-3">
<div class="card mb-3 align-items-center " >
    <div class="row d-flex align-items-center w-100">
        <div class="col p-2 ">
            <img src="../../Assets/img/aldeiahist.jpg" class="img-fluid rounded-start" alt="..." >
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h3 class="card-title">TOUR ALDEIAS HISTÓRICAS</h3>
                <p class="card-text">Tour de van pelas Aldeias Históricas, mais propriamente, por Almeida, Castelo Mendo e Castelo Rodrigo.</p> 
            </div>
        </div>
    </div>
</div>
</div>

<div class="container d-flex align-items-center justify-content-center mt-3">
<div class="card mb-3 align-items-center " >
    <div class="row d-flex align-items-center w-100">
        <div class="col p-2 ">
            <img src="../../Assets/img/aldeiamedie.jpg" class="img-fluid rounded-start" alt="..." >
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h3 class="card-title">TOUR ALDEIAS MEDIEVAIS</h3>
                <p class="card-text">Guardadas durante séculos por muralhas inabaláveis, vigiadas por torres e castelos ancestrais, as suas ruas de granito foram calcorreadas por diversos povos e as suas casas viram nascer personalidades marcantes da história do país.</p> 
            </div>
        </div>
    </div>
</div>
</div>

<div class="container d-flex align-items-center justify-content-center mt-3">
<div class="card mb-3 align-items-center " >
    <div class="row d-flex align-items-center w-100">
        <div class="col p-2 ">
            <img src="../../Assets/img/kayak.jpg" class="img-fluid rounded-start" alt="..." >
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h3 class="card-title">TOUR AVENTURA DE KAYAK NO RIO CÔA</h3>
                <p class="card-text">Tour Aventura de Kayak No Rio Côa, com piquenique e visita às gravuras Rupestres do Vale do Côa.</p> 
            </div>
        </div>
    </div>
</div>
</div>

<div class="container d-flex align-items-center justify-content-center mt-3">
<div class="card mb-3 align-items-center " >
    <div class="row d-flex align-items-center w-100">
        <div class="col p-2 ">
            <img src="../../Assets/img/belmonte.jpg" class="img-fluid rounded-start" alt="..." >
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h3 class="card-title">TOUR BELMONTE E MUSEUS</h3>
                <p class="card-text">Visita a Belmonte, com passagem por Centum Cellas, pelo Museu dos Descobrimentos, Museu do azeite, Castelo de Belmonte, Igreja de Santiago e Panteão dos Cabrais e pelo Ecomuseu do Zêzere.</p> 
            </div>
        </div>
    </div>
</div>
</div>

<div class="container d-flex align-items-center justify-content-center mt-3">
<div class="card mb-3 align-items-center " >
    <div class="row d-flex align-items-center w-100">
        <div class="col p-2 ">
            <img src="../../Assets/img/covaodosconchos.jpg" class="img-fluid rounded-start" alt="..." >
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h3 class="card-title">TOUR COVÃO DOS CONCHOS</h3>
                <p class="card-text">Covão dos Conchos é uma lagoa artificial localizada no Parque Natural da Serra da Estrela, em Portugal, no território da aldeia de montanha do Sabugueiro. O Covão dos Conchos tornou-se famoso pelo vertedouro de boca do sino.</p> 
            </div>
        </div>
    </div>
</div>
</div>

<div class="container d-flex align-items-center justify-content-center mt-3">
<div class="card mb-3 align-items-center " >
    <div class="row d-flex align-items-center w-100">
        <div class="col p-2 ">
            <img src="../../Assets/img/gravurarupestre.jpg" class="img-fluid rounded-start" alt="..." >
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h3 class="card-title">TOUR GRAVURAS RUPESTRES</h3>
                <p class="card-text">Tour Diurna ou Noturna. Como uma imensa galeria ao ar livre, o Vale do Côa apresenta mais de mil rochas com manifestações rupestres, identificadas em mais de 80 sítios distintos, sendo predominantes as gravuras paleolíticas.</p> 
            </div>
        </div>
    </div>
</div>
</div>

<div class="container d-flex align-items-center justify-content-center mt-3">
<div class="card mb-3 align-items-center " >
    <div class="row d-flex align-items-center w-100">
        <div class="col p-2 ">
            <img src="../../Assets/img/miradourofaia.jpg" class="img-fluid rounded-start" alt="..." >
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h3 class="card-title">TOUR MIRADOURO DA FAIA</h3>
                <p class="card-text">Covão dos Conchos é uma lagoa artificial localizada no Parque Natural da Serra da Estrela, em Portugal, no território da aldeia de montanha do Sabugueiro. O Covão dos Conchos tornou-se famoso pelo vertedouro de boca do sino.</p> 
            </div>
        </div>
    </div>
</div>
</div>

<div class="container d-flex align-items-center justify-content-center mt-3">
<div class="card mb-3 align-items-center " >
    <div class="row d-flex align-items-center w-100">
        <div class="col p-2 ">
            <img src="../../Assets/img/pordosol.jpg" class="img-fluid rounded-start" alt="..." >
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h3 class="card-title">TOUR PÔR DO SOL</h3>
                <p class="card-text">Desfrute de um maravilhoso pôr do sol, junto de quem mais gosta. Experiência acompanhada com espumante.</p> 
            </div>
        </div>
    </div>
</div>
</div>

<div class="container d-flex align-items-center justify-content-center mt-3">
<div class="card mb-3 align-items-center " >
    <div class="row d-flex align-items-center w-100">
        <div class="col p-2 ">
            <img src="../../Assets/img/idanha.png" class="img-fluid rounded-start" alt="..." >
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h3 class="card-title">UM MANJAR DOS DEUSES</h3>
                <p class="card-text">Vamos saborear o passado! Nesta atividade em Idanha -a- Velha, trilhamos caminhos percorridos por romanos, suevos, visigodos e templários e deliciamo-nos com a cozinha de autor da Chef Maria Caldeira de Sousa na Casa da Velha Fonte.</p> 
            </div>
        </div>
    </div>
</div>
</div>

<div class="container d-flex align-items-center justify-content-center mt-3">
<div class="card mb-3 align-items-center " >
    <div class="row d-flex align-items-center w-100">
        <div class="col p-2 ">
            <img src="../../Assets/img/fosseis.jpg" class="img-fluid rounded-start" alt="..." >
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h3 class="card-title">UM MAR DE FÓSSEIS</h3>
                <p class="card-text">Quer “mergulhar numa terra que já foi mar? Que tal, tocar em fósseis com mais de 400 milhões de anos? Tudo isto é possível, nesta visita a um local por onde passaram garimpeiros e contrabandistas!</p> 
            </div>
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