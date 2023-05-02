
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

</body>
<!-- JavaScript de Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<div class="container">
  <div class="row mx-auto row-cols-3"> <!-- De tres en tres a la cuarta recorro 1 hacia abajo -->
  <?php
  // Array de colores para el background
  $colores = array(
    "linear-gradient(to bottom right, #8A2BE2, #4B0082)",
    "linear-gradient(to bottom right, #FFA07A, #CD5C5C)",
    "linear-gradient(to bottom right, #00CED1, #00FA9A)",
    "linear-gradient(to bottom right, #FFD700, #FF8C00)"
  );
?>
    <?php foreach ($proyectos as $proyecto) { ?> <!-- recorro los resultados del controlador -->
        <?php
    // Obtener un color aleatorio del array
    $color = $colores[array_rand($colores)];
  ?>
      <div class="col mb-4">
        <div class="card" style="background: <?php echo $color; ?>;" 
          <img src="IMAGEN DEL PROYECTO" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $proyecto['titulo']; ?></h5>
            <p class="card-text"><?php echo $proyecto['descripcion']; ?></p>
            <a href="ENLACE AL PROYECTO" class="btn btn-primary">Ver proyecto</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
<!-- jQuery -->

<script>
  $(document).ready(function() {
    $('.card').click(function() {
      $(this).toggleClass('border-primary');
    });
  });
</script>