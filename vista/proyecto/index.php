
<?php require_once '../../controlador/proyecto.php'?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">

<!-- Agregar tu archivo CSS personalizado -->
<link rel="stylesheet" href="../../public/estilos.css">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<head>
<?php require_once("../html/mainHeader.php"); ?>

</head>

<body>
<?php require_once("../html/mainMenu.php"); ?>
<div class="modal fade" id="modalProyecto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Título del proyecto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="IMAGEN DEL PROYECTO" class="img-fluid" alt="...">
        <p>Descripción del proyecto</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <a href="ENLACE AL PROYECTO" class="btn btn-primary">Ir al proyecto</a>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row mx-auto row-cols-3">
    <?php foreach ($proyectos as $proyecto) { ?>
      <?php
        $colores = array(
          "linear-gradient(to bottom right, #8A2BE2, #4B0082)",
          "linear-gradient(to bottom right, #FFA07A, #CD5C5C)",
          "linear-gradient(to bottom right, #00CED1, #00FA9A)",
          "linear-gradient(to bottom right, #FFD700, #FF8C00)"
        );
        $color = $colores[array_rand($colores)];
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
<!-- jQuery -->
<script>
  $(document).ready(function() {
    $('.btn-primary').click(function(e) {
      e.preventDefault();
      var title = $(this).siblings('.card-title').text();
      var imgSrc = $(this).siblings('.card-img-top').attr('src');
      var description = $(this).siblings('.card-text').text();
      var link = $(this).attr('href');
      $('#modalProyecto .modal-title').text(title);
      $('#modalProyecto .modal-body img').attr('src', imgSrc);
      $('#modalProyecto .modal-body p').text(description);
      $('#modalProyecto .modal-footer a').attr('href', link);
      $('#modalProyecto').modal('show');
    });
  });
  $(document).ready(function() {
    $('.card').click(function() {
      $(this).toggleClass('border-primary');
    });
  });
</script>