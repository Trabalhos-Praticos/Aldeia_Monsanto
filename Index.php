
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
include_once __DIR__ . '/src/nf/nav.php';
?>
<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">Seja Bem vindo</h1>
        <p class="lead">Para aceder ao site primeiro precisa de estar logado.</p>
        <p>Caso não tenha uma conta faça um registo.</p>
        <hr class="my-4">
        <!-- <p>It uses utility classes for typography and spacing to space content out within the larger container.</p> -->
        <a href="/src/pages/Login/login.php"><button type="button" class="btn btn-primary">Login</button></a>
        <a href="/src/Pages/Registo/registo.php"><button type="button" class="btn btn-info">Registo</button></a>
    </div>
</div>
<?php
require_once __DIR__ . '/src/nf/footer.php';
?>
</body>

<script src="https://kit.fontawesome.com/f3e7e2778c.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>