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




    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div id="carouselExampleCaptions" class="carousel slide mh-100">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="8" aria-label="Slide 9"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="9" aria-label="Slide 10"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="10" aria-label="Slide 11"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="11" aria-label="Slide 12"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="12" aria-label="Slide 13"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="13" aria-label="Slide 14"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="14" aria-label="Slide 15"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="15" aria-label="Slide 16"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="16" aria-label="Slide 17"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="17" aria-label="Slide 18"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="18" aria-label="Slide 19"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="19" aria-label="Slide 20"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="20" aria-label="Slide 21"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="21" aria-label="Slide 22"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="22" aria-label="Slide 23"></button>

  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img  src="../../Assets/img/imagens carrossel/biketour1.jpg" class="d-block w-100"  alt="..." > 
      <div class="carousel-caption d-none d-md-block text-black">
        <h5>BIKE TOUR</h5>
        <p>A beleza desta Bike Tour permite pedalar em locais de elevada natureza histórica.</p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="../../Assets/img/imagens carrossel/bicileta_nova.jpg" class="d-block w-100 " alt="...">
      <div class="carousel-caption d-none d-md-block text-black">
        <h5><b>PASSEIO DE BICICLETA NAS ALDEIAS HISTÓRICAS PORTUGUESAS</b></h5>
        <p>Este passeio de bicicleta permite-lhe descobrir a história da mais antiga fronteira europeia. Encontre doze aldeias espalhadas pelo Centro de Portugal, cada uma mais surpreendente que a anterior.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../../Assets/img/imagens carrossel/caminhada1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-black">
        <h5>CAMINHADA PELAS ALDEIAS HISTÓRICAS – MONSANTO</h5>
        <p>Caminhe e inspire-se nas paisagens únicas do interior de Portugal e deguste iguarias regionais como o queijo, vinho, cabrito, borrego e enchidos.</p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="../../Assets/img/imagens carrossel/pexels-philipp-m-100582.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-black">
        <h5>CICLOTURISMO NAS ALDEIAS HISTÓRICAS – CASTELO RODRIGO</h5>
        <p>Envolva-se numa experiência medieval por entre as muralhas da aldeia histórica de Castelo Rodrigo, local de excepcional interesse histórico pelos monumentos que conserva.</p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="../../Assets/img/imagens carrossel/pexels-pixabay-161172.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-black">
        <h5>CICLOTURISMO NAS ALDEIAS HISTÓRICAS – MONSANTO</h5>
        <p>Mergulhe numa experiência incrível que mistura aldeias medievais idílicas, conheça aquela que é distinguida como sendo a “aldeia mais portuguesa de Portugal”.</p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="../../Assets/img/imagens carrossel/ilhadapedra_atualizado.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-black">
        <h5>DA ILHA DA PEDRA À EGITÂNIA</h5>
        <p>Monsanto surge imponente na paisagem clamando desde logo a sua importância e majestosidade. Esta ilha de pedra rodeada de curiosas formações rochosas possui um mundo de recantos por descobrir.</p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="../../Assets/img/imagens carrossel/santuario-de-nossa-senhora-de-mercoles.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-black">
        <h5>DO SAGRADO E DO PROFANO</h5>
        <p>Gosta do inesperado? Quer conhecer uma aldeia que poucos conhecem? Neste passeio a Proença-a-Velha, uma das mais antigas povoações de Portugal, percorremos os seus caminhos entre oliveiras e lugares sagrados.</p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="../../Assets/img/imagens carrossel/rioeges.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-black">
        <h5>ERGES: CAMINHADA SENSORIAL</h5>
        <p>Quer fazer uma pausa? Temos uma experiência de tranquilidade, natureza e cultura para si: nas margens do rio Erges despertamos todos os sentidos, e saboreamos a cultura local.</p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="../../Assets/img/imagens carrossel/egitania.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-black">
        <h5>ILUMINANDO O PASSADO</h5>
        <p>Caminhe e inspire-se nas paisagens únicas do interior de Portugal e deguste iguarias regionais como o queijo, vinho, cabrito, borrego e enchidos.</p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="../../Assets/img/imagens carrossel/got.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-black">
        <h5>LENDAS E DRAGÕES</h5>
        <p>É fã da Guerra dos Tronos ? Esta atividade é para si! Visite os misteriosos cenários da Casa do Dragão, e “mergulhe” nas lendas da aldeia histórica de Monsanto.</p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="../../Assets/img/imagens carrossel/egitania2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-black">
        <h5>RETRATOS DOS TEMPOS</h5>
        <p>Viaje no tempo. Pise caminhos percorridos por romanos, visigodos e templários. Sinta e respire História na antiga cidade de Egitânia, um local com mais de 2 mil anos, onde deuses foram adorados e diferentes povos se cruzaram.</p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="../../Assets/img/imagens carrossel/pexels-pixabay-38296.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-black">
        <h5>PASSEIO DE BTT NAS ALDEIAS HISTÓRICAS PORTUGUESAS</h5>
        <p>Viaje no tempo. Pise caminhos percorridos por romanos, visigodos e templários. Sinta e respire História na antiga cidade de Egitânia, um local com mais de 2 mil anos, onde deuses foram adorados e diferentes povos se cruzaram.</p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="../../Assets/img/imagens carrossel/geomonumento.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-black">
        <h5>PEDRAS COM HISTÓRIA</h5>
        <p>Envolva-se num cenário em que a Natureza e o Homem são um só. Deixe-se devorar por uma paisagem avassaladora. Toque em geomonumentos, conheça a história e estratégias de guerra que se transformaram em lendas vivas.</p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="../../Assets/img/imagens carrossel/aldeiahist.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-black">
        <h5>TOUR ALDEIAS HISTÓRICAS</h5>
        <p>Tour de van pelas Aldeias Históricas, mais propriamente, por Almeida, Castelo Mendo e Castelo Rodrigo.</p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="../../Assets/img/imagens carrossel/aldeiamedie.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-black">
        <h5>TOUR ALDEIAS MEDIEVAIS</h5>
        <p>Guardadas durante séculos por muralhas inabaláveis, vigiadas por torres e castelos ancestrais, as suas ruas de granito foram calcorreadas por diversos povos e as suas casas viram nascer personalidades marcantes da história do país.</p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="../../Assets/img/imagens carrossel/kayak.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-black">
        <h5>TOUR AVENTURA DE KAYAK NO RIO CÔA</h5>
        <p>Tour Aventura de Kayak No Rio Côa, com piquenique e visita às gravuras Rupestres do Vale do Côa.</p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="../../Assets/img/imagens carrossel/belmonte.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-black">
        <h5>TOUR BELMONTE E MUSEUS</h5>
        <p>Visita a Belmonte, com passagem por Centum Cellas, pelo Museu dos Descobrimentos, Museu do azeite, Castelo de Belmonte, Igreja de Santiago e Panteão dos Cabrais e pelo Ecomuseu do Zêzere.</p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="../../Assets/img/imagens carrossel/covaodosconchos.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-black">
        <h5>TOUR COVÃO DOS CONCHOS</h5>
        <p>Covão dos Conchos é uma lagoa artificial localizada no Parque Natural da Serra da Estrela, em Portugal, no território da aldeia de montanha do Sabugueiro. O Covão dos Conchos tornou-se famoso pelo vertedouro de boca do sino.</p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="../../Assets/img/imagens carrossel/gravurarupestre.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-black">
        <h5>TOUR GRAVURAS RUPESTRES</h5>
        <p>Tour Diurna ou Noturna. Como uma imensa galeria ao ar livre, o Vale do Côa apresenta mais de mil rochas com manifestações rupestres, identificadas em mais de 80 sítios distintos, sendo predominantes as gravuras paleolíticas.</p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="../../Assets/img/imagens carrossel/miradourofaia.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-black">
        <h5>TOUR MIRADOURO DA FAIA</h5>
        <p>Covão dos Conchos é uma lagoa artificial localizada no Parque Natural da Serra da Estrela, em Portugal, no território da aldeia de montanha do Sabugueiro. O Covão dos Conchos tornou-se famoso pelo vertedouro de boca do sino.</p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="../../Assets/img/imagens carrossel/pordosol.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-black">
        <h5>TOUR PÔR DO SOL</h5>
        <p>Desfrute de um maravilhoso pôr do sol, junto de quem mais gosta. Experiência acompanhada com espumante.</p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="../../Assets/img/imagens carrossel/idanha.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-black">
        <h5>UM MANJAR DOS DEUSES</h5>
        <p>Vamos saborear o passado! Nesta atividade em Idanha -a- Velha, trilhamos caminhos percorridos por romanos, suevos, visigodos e templários e deliciamo-nos com a cozinha de autor da Chef Maria Caldeira de Sousa na Casa da Velha Fonte.</p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="../../Assets/img/imagens carrossel/fosseis.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-black-bold">
        <h5>UM MAR DE FÓSSEIS</h5>
        <p>Quer “mergulhar numa terra que já foi mar? Que tal, tocar em fósseis com mais de 400 milhões de anos? Tudo isto é possível, nesta visita a um local por onde passaram garimpeiros e contrabandistas!</p>
      </div>
    </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>












<!-- <div class="container d-flex align-items-center justify-content-center mt-3">
<div class="card mb-3 align-items-center " >
    <div class="row d-flex align-items-center w-100">
        <div class="col p-2 ">
            <img src="../../Assets/img/imagens carrossel/biketour1.jpg" class="img-fluid rounded-start" alt="..." >
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
            <img src="../../Assets/img/imagens carrossel/bicileta_nova.jpg" class="img-fluid rounded-start" alt="..." >
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
            <img src="../../Assets/img/imagens carrossel/caminhada1.jpg" class="img-fluid rounded-start" alt="..." >
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
            <img src="../../Assets/img/imagens carrossel/pexels-philipp-m-100582.jpg" class="img-fluid rounded-start" alt="..." >
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
            <img src="../../Assets/img/imagens carrossel/pexels-pixabay-161172.jpg" class="img-fluid rounded-start" alt="..." >
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
            <img src="../../Assets/img/imagens carrossel/ilhadapedra_atualizado.jpg" class="img-fluid rounded-start" alt="..." >
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
            <img src="../../Assets/img/imagens carrossel/sagradoaoprofano.jpg" class="img-fluid rounded-start" alt="..." >
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
            <img src="../../Assets/img/imagens carrossel/rioeges.jpg" class="img-fluid rounded-start" alt="..." >
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
            <img src="../../Assets/img/imagens carrossel/egitania.jpg" class="img-fluid rounded-start" alt="..." >
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
            <img src="../../Assets/img/imagens carrossel/got.jpg" class="img-fluid rounded-start" alt="..." >
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
            <img src="../../Assets/img/imagens carrossel/egitania2.jpg" class="img-fluid rounded-start" alt="..." >
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
            <img src="../../Assets/img/imagens carrossel/pexels-pixabay-38296.jpg" class="img-fluid rounded-start" alt="..." >
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
            <img src="../../Assets/img/imagens carrossel/geomonumento.jpg" class="img-fluid rounded-start" alt="..." >
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
            <img src="../../Assets/img/imagens carrossel/aldeiahist.jpg" class="img-fluid rounded-start" alt="..." >
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
            <img src="../../Assets/img/imagens carrossel/aldeiamedie.jpg" class="img-fluid rounded-start" alt="..." >
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
            <img src="../../Assets/img/imagens carrossel/kayak.jpg" class="img-fluid rounded-start" alt="..." >
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
            <img src="../../Assets/img/imagens carrossel/belmonte.jpg" class="img-fluid rounded-start" alt="..." >
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
            <img src="../../Assets/img/imagens carrossel/covaodosconchos.jpg" class="img-fluid rounded-start" alt="..." >
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
            <img src="../../Assets/img/imagens carrossel/gravurarupestre.jpg" class="img-fluid rounded-start" alt="..." >
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
            <img src="../../Assets/img/imagens carrossel/Miradouro-da-Faia-Pinhel.jpg" class="img-fluid rounded-start" alt="..." >
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
            <img src="../../Assets/img/imagens carrossel/pordosol.jpg" class="img-fluid rounded-start" alt="..." >
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
            <img src="../../Assets/img/imagens carrossel/idanha.png" class="img-fluid rounded-start" alt="..." >
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
            <img src="../../Assets/img/imagens carrossel/fosseis.jpg" class="img-fluid rounded-start" alt="..." >
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
</div>  -->
<?php
require_once __DIR__ . '/../nf/footer.php';
?>
<script src="https://kit.fontawesome.com/f3e7e2778c.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>