<?php

 include ('config/db.php');

 if(!empty($_POST['producto'])){

  $producto = $_POST['producto'];
  $nombre = $_POST['nombre'];
  $apellidos = $_POST['apellidos'];
  $telefono = $_POST['telefono'];
  
  $query = mysqli_query($conn,"INSERT INTO productos(producto,nombre,apellidos,telefono) VALUES ('$producto','$nombre','$apellidos','$telefono')");
  
  if($query){
      header('location:index.php');
  }
}
?>