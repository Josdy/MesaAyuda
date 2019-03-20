<?php 
session_start();
require 'config/db.php';


  
  $query = 'SELECT * FROM unidad WHERE estado=1';
  $result = $conexion->query($query);
  $listas = '<option value="#">Seleccionar Unidad</option>';
  
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $listas .= "<option value='$row[id_unidad]'>$row[nombre]</option>";
  }
  echo ($listas);


?>