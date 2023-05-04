
<?php require_once '../../controlador/proyecto.php'?>
  <!-- otros elementos head -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
    integrity="sha384-g2/ebR0raWWAvi1VKOcfn0mOSXWcS60Zo2Qxg0/lui01BRsW4UC4d4mJ0Fg1Uu9C"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>


<link rel="stylesheet" href="../../public/estilos.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">

<head>
<?php require_once("../html/mainHeader.php"); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
</head>

<body>
<?php require_once("../html/mainMenu.php"); ?>


<div class="container">
  <div class="row mx-auto row-cols-3">
    <?php foreach ($proyectos as $proyecto) { ?>
      <?php
        $colores = array( // se creo un array de colres para cada ves que entre el for cambie de color el car
          "linear-gradient(to bottom right, #8A2BE2, #4B0082)",
          "linear-gradient(to bottom right, #FFA07A, #CD5C5C)",
          "linear-gradient(to bottom right, #00CED1, #00FA9A)",
          "linear-gradient(to bottom right, #FFD700, #FF8C00)"
        );
        $color = $colores[array_rand($colores)]; // randum de colores
      ?>
      <div class="col mb-4">
        <div class="card" style="background: <?php echo $color; ?>;"> 
          <img src="IMAGEN DEL PROYECTO" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $proyecto['titulo']; ?></h5>
            <p class="card-text"><?php echo $proyecto['descripcion']; ?></p>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalProyecto">Ver proyecto</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
 

</div>
<?php require_once 'modal.php'?><!-- jQuery -->
<script type="text/javascript" src="proyecto.js"></script>