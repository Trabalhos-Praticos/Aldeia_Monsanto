
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monsanto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="src/index.css">
    
    
</head>
<body>
     <!-- Start nav -->
<?php
include_once __DIR__ . '/../nf/nav.php';
?>
<div class = 'container'>
    <div class="Text_Box">
        <div class="Title_text">
            <h1>Bem Vindo a Monsanto</h1>
        </div>
    </div>
    <div id="Box1">
        <iframe id="vid1" width="750" height="460" src="https://www.youtube.com/embed/44MNaDCyR4A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <div class="boxT_1">
            <div class="texto_1">
                <p>Monsanto é uma aldeia histórica em Portugal, situada no topo de uma colina com vista panorâmica. Foi habitada desde o Paleolítico e possui vestígios arqueológicos de ocupação lusitana, romana, visigótica e árabe. Foi conquistada por D. Afonso Henriques em 1165 e doada aos Templários, que construíram o Castelo. Monsanto resistiu a cercos de invasores e hoje é possível visitar as ruínas do Castelo, a Capela de S. Miguel e a Capela de Santa Maria do Castelo. Também há a Festa de Santa Cruz e a Estação Arqueológica Romana de São Lourenço.</p>
            </div>
        </div>
    </div>
  
    <div class="Title">
    </div>
    
    <div class="Box_Loc">
        <div id="Box2">
            <iframe class="maps"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d195595.4463968602!2d-7.235562628688513!3d40.00445242506212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd3d75bd5000d04d%3A0x824a112737bb26!2sMonsanto!5e0!3m2!1spt-PT!2spt!4v1680544170821!5m2!1spt-PT!2spt" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div id="tex">
            <p>Monsanto é uma aldeia histórica localizada no centro de Portugal, na região de Idanha a Nova. Situada no topo de uma colina íngreme, 
                a aldeia é conhecida pela sua impressionante paisagem rochosa e casas construídas entre as pedras. Além disso, Monsanto é conhecida por ser uma das aldeias mais pitorescas de Portugal, 
                com as suas ruas estreitas e sinuosas e vistas panorâmicas de tirar o fôlego. 
               A vila é um destino turístico popular para quem procura experimentar a cultura tradicional portuguesa e a rica história do país.</p>
        </div>
    </div>
</div>

<?php
require_once __DIR__ . '/../nf/footer.php';
?>
</body>
<script src="https://kit.fontawesome.com/f3e7e2778c.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>