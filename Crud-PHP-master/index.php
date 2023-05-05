<?php
 include ('config/db.php');
 $result = mysqli_query($conn,'SELECT * FROM productos');
 ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style>
    .n{
        margin-top: 100px;
    }
</style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
<link rel="stylesheet" href="index.css" />

  <body>

  <!--Formulario-->

      <div class="container justify-items-center n">
      <div class="row">
      <div class="col-xs-12 col-lg-3">


      <form action="add.php" method="POST">

    <h3>Formulario:</h3>
        <br>

      <h1 class="text-left"><strong>Productos</strong></h1>
      <br>
      <input type="text" required placeholder="Ingresa el producto" name="producto" class="form-control">
      <br>
     

<br>

      <h1 class="text-left"><strong>Nombre</strong></h1>
      <br>
      <input type="text" required placeholder="Ingresa el nombre" name="nombre" class="form-control">
      <br>
 


     <br>

      <h1 class="text-left"><strong>Apellidos</strong></h1>
      <br>
      <input type="text" required placeholder="Ingresa los apellidos" name="apellidos" class="form-control">
      <br>
    


     <br>

      <h1 class="text-left"><strong>Telefono</strong></h1>
      <br>
      <input type="number" required placeholder="Ingresa el telefono" name="telefono" class="form-control">
      <br>
     

<input type="submit" value="Agregar" class="btn btn-primary btn-block">


      </form>
      </div>


      <div class="col-xs-12 col-lg-8 p-3">

      <!--Tablas-->

            <center>
<h1>Tabla General</h1>
</center>

<br>
      <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Productos</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Telefono</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($result as $row){ ?>
    <tr>
      <td><?php echo $row['cod_producto']; ?></td>
      <td><?php echo $row['producto'] ?></td>
      <td><?php echo $row['nombre'] ?></td>
      <td><?php echo $row['apellidos'] ?></td>
      <td><?php echo $row['telefono'] ?></td>
      <td><a href="edit.php?id=<?php echo $row['cod_producto']?>" class="btn btn-primary">Editar</a></td>
      <td><a href="delite.php?id=<?php echo $row['cod_producto']?>" class="btn btn-danger" >Eliminar</a></td>
    </tr>
        <?php }?>
  </tbody>
</table>

<br>
<br>
<br>

<center>
<h1>Tabla en columnas</h1>
</center>

<br>

<!--Tabla de productos-->
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Productos</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($result as $row){ ?>
    <tr>
      <td><?php echo $row['cod_producto']; ?></td>
      <td><?php echo $row['producto'] ?></td>
      <td><a href="edit.php?id=<?php echo $row['cod_producto']?>" class="btn btn-primary">Editar</a></td>
      <td><a href="delite.php?id=<?php echo $row['cod_producto']?>" class="btn btn-danger" >Eliminar</a></td>
    </tr>
        <?php }?>
  </tbody>
</table>

<br>
<br>
<!--Tabla de nombre-->

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($result as $row){ ?>
    <tr>
      <td><?php echo $row['cod_producto']; ?></td>
      <td><?php echo $row['nombre'] ?></td>
      <td><a href="edit.php?id=<?php echo $row['cod_producto']?>" class="btn btn-primary">Editar</a></td>
      <td><a href="delite.php?id=<?php echo $row['cod_producto']?>" class="btn btn-danger" >Eliminar</a></td>
    </tr>
        <?php }?>
  </tbody>
</table>

<br>
<br>

<!--Tabla de apellidos-->

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($result as $row){ ?>
    <tr>
      <td><?php echo $row['cod_producto']; ?></td>
      <td><?php echo $row['apellidos'] ?></td>
      <td><a href="edit.php?id=<?php echo $row['cod_producto']?>" class="btn btn-primary">Editar</a></td>
      <td><a href="delite.php?id=<?php echo $row['cod_producto']?>" class="btn btn-danger" >Eliminar</a></td>
    </tr>
        <?php }?>
  </tbody>
</table>

<br>
<br>

<!--Tabla de telefono-->

 <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Telefono</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($result as $row){ ?>
    <tr>
      <td><?php echo $row['cod_producto']; ?></td>
      <td><?php echo $row['telefono'] ?></td>
      <td><a href="edit.php?id=<?php echo $row['cod_producto']?>" class="btn btn-primary">Editar</a></td>
      <td><a href="delite.php?id=<?php echo $row['cod_producto']?>" class="btn btn-danger" >Eliminar</a></td>
    </tr>
        <?php }?>
  </tbody>
</table>







      </div>
      </div>
      </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>