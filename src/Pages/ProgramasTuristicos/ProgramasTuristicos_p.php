<?php
# CARREGA MIDDLEWARE PAGARA GARANTIR QUE APENAS UTILIZADORES ACESSE O SITIO
require_once __DIR__ . '/../../middleware/middleware-utilizador.php';
require_once __DIR__ . "../../../Infraestrutura/Repositorio.php";

$info = lerinfosProgramasTuristicos();
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


<div class="title_box_prog">
        <h1 style="text-align: center;">Programas Turísticos</h1>
    </div>

    
 <div class='d-flex align-items-center justify-content-center mt-3'>
  <?php 
    foreach($info as $infos){
  ?>
    <div class="card mb-3 align-items-center" >
      <div class="row d-flex align-items-center w-100">
        <div class="col p-2">
          <?php echo '<img class="card-img-top" alt="..." src="../../Assets/uploads/'.$infos['foto']. '">'; ?> 
        </div> 
          <div class="col-md-8">
            <div class="card-body"> 
              <h5><?= $infos['nome'] ?></h5>
              <p><?= $infos['texto'] ?></p>
            </div>
          </div>

      </div>
    
  <?php 
    }
  ?> 
   </div>
  </div>
  
  
<?php
require_once __DIR__ . '/../nf/footer.php';
?>
<script src="https://kit.fontawesome.com/f3e7e2778c.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>