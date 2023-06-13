
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monsanto</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="src/index.css">
    <link rel="stylesheet" href="src/nav_Footer/nav_v2.css">
    <link rel="stylesheet" href="src/nav_Footer/footer.css">
    <link rel="stylesheet" href="src/Slideshow/slideshow.css">
</head>
<body>
     <!-- Start nav -->
<?php
include '/src/nav_Footer/nav_v2.php';
?>
    
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
    <section class="Container_1">
        <div class="cont_Tit_1">
            <h1>Paisagens de monsanto </h1>
        </div>
            <!-- Slideshow container -->
        <div class="slideshow-container">
        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
        <div class="numbertext"></div>
        <img src="src/Assets/img/monsanto-13.jpg">
        <!-- <div class="text">Caption Text</div> -->
        </div>
  
        <div class="mySlides fade">
            <div class="numbertext"></div>
            <img id="imgslide" src="src/Assets/img/Imagem2.jpeg" >
            <div class="text"></div>
        </div>
  
        <div class="mySlides fade">
            <div class="numbertext"></div>
            <img id="imgslide" src="src/Assets/img/Imagem3.jpeg" >
            <div class="text"></div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext"></div>
            <img id="imgslide" src="src/Assets/img/imagem4.jpeg" >
            <div class="text"></div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext"></div>
            <img id="imgslide" src="src/Assets/img/Imagem5.jpeg" >
            <div class="text"></div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
  
        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
        </div>
    </section> 
  
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
    <footer>
        <div class="redes">
            <a href="" class="action" target="_blank"><img src="src/Assets/img/tiktok.png" alt="TikTok">TikTok</a>
            <a href="" class="action" target="_blank"><img src="src/Assets/img/instagram.png" alt="instagram">Instagram</a>
            <a href="" class="action" target="_blank"><img src="src/Assets/img/twitter.png" alt="Twitter">Twitter</a>
            <p>Projeto desenvolvido por André Carvalho e Lucas Cruz</p>
        </div>
    </footer>
</body>

<script src="src/nav_Footer/nav.js"></script>
<script src="src/Index.js"></script>
</html>