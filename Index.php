
<?php

require_once __DIR__ . '/src/middleware/middleware-nao-autenticado.php';
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monsanto</title>
     <link rel="stylesheet" href="./index.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   
    
    
    
</head>
<body>
     <!-- Start nav -->
  <?php
  /*
include_once __DIR__ . '/src/nf/nav.php';*/
?>  



<span class="background"></span>
        <span class="centering">
            <form class="my-form">
                <span class="login-welcome-row">
                    <img
                        class="login-welcome"
                        src="./src/Assets/Logo/Monsanto.png"
                    />
                    <!-- optimize the image in production -->
                    <h1>Login!</h1>
                    <p class="lead ">Para aceder ao site primeiro precisa de estar logado.</p>
                </span>
                <div class="text-field">
                    <label for="email">Email:</label>
                    <input
                        aria-label="Email"
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Your Email"
                        required
                    >
                    <img
                        alt="Email Icon"
                        title="Email Icon"
                        src="./src/Assets/Index/email.svg"
                    >
                </div>
                <div class="text-field">
                    <label for="password">Password:</label>
                    <input
                        id="password"
                        type="password"
                        aria-label="Password"
                        name="password"
                        placeholder="Your Password"
                        title="Minimum 6 characters at least 1 Alphabet and 1 Number"
                        pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$"
                        required
                    >
                    <img
                        alt="Password Icon"
                        title="Password Icon"
                        src="./src/Assets/Index/password.svg"
                    >
                </div>
                <input type="submit" class="my-form__button" value="Login" />
                <div class="my-form__actions">
                    <div class="my-form__row">
                        <span>Esqueceste-te da palavra-passe?</span>
                        <a href="#" title="Reset Password">Mudar palavra-passe</a>
                    </div>
                    <div class="my-form__signup">
                        <a href="./src/Pages/CrudSitios/registo.php" title="Create Account">Criar conta</a>
                    </div>
                </div>
            </form>
        </span>
        




  <!-- <div class="container">
    <div class="jumbotron ">
        <h1 class="display-4 p-4 ">Seja Bem vindo</h1>
        <p class="lead ">Para aceder ao site primeiro precisa de estar logado.</p>
        <p>Caso não tenha uma conta faça um registo.</p>
        <hr class="my-4 ">
       <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <a href="src/Pages/Login/login.php"><button type="button" class="btn btn-primary">Login</button></a>
        <a href="/src/Pages/Registo/registo.php"><button type="button" class="btn btn-info">Registo</button></a>
    </div>
</div>   -->
<?php
/*
require_once __DIR__ . '/src/nf/footer.php';*/
?>
</body>


<script src="index.js"></script>
<script src="https://kit.fontawesome.com/f3e7e2778c.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>