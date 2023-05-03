
<?php
require_once("../../config.php");
require_once '../../modelo/Proyecto.php';



$proyecto=new Proyecto();
$proyectos = $proyecto->proyecto();







?>