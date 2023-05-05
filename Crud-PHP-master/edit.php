<?php
 include ('config/db.php');

    $id = $_GET['id'];
    $result = mysqli_query($conn,"select * from productos where cod_producto = '$id'");
    $row = mysqli_fetch_assoc($result);
   
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       $producto = $_POST['producto'];
       $nombre = $_POST['nombre'];
       $apellidos = $_POST['apellidos'];
       $telefono = $_POST['telefono'];
        $resultt = mysqli_query($conn,"update productos set producto = '$producto', nombre = '$nombre', apellidos = '$apellidos', telefono = '$telefono' where cod_producto = '$id'");
       
        if($resultt){
        header('location: index.php');
        }
    }

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
        justify-content:  center;
    }
</style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <link rel="stylesheet" href="index.css" />
  </head>
  <body>
    <h1>Edicion de datos capturados:</h1>
      <div class="container">
      <div class="row n">
      <div class="col-xs-12 col-lg-5">
      <form method="POST">
        
       
      <h1 class="text-left"><strong>Editar Producto:</strong></h1>
      <br>
     
      <input type="text" placeholder="producto" value="<?php echo $row['producto'];?>" name="producto" class="form-control">
      
      <br>
      <br>
      <h1 class="text-left"><strong>Editar Nombre:</strong></h1>
      <br>
      <input type="text" placeholder="nombre" value="<?php echo $row['nombre'];?>" name="nombre" class="form-control">

      <br>
      <br>
      <h1 class="text-left"><strong>Editar Apellidos:</strong></h1>
      <br>
      <input type="text" placeholder="apellidos" value="<?php echo $row['apellidos'];?>" name="apellidos" class="form-control">

      <br>
      <br>
      <h1 class="text-left"><strong>Editar Telefono:</strong></h1>
      <br>
      <input type="text" placeholder="telefono" value="<?php echo $row['telefono'];?>" name="telefono" class="form-control">
     <br>
     <br>
      <input type="submit" name="editar" value="Editar" class="btn btn-primary btn-block">
      <br>
      <br>
      </form>
      </div>
      </div>
      </div>
      </form>
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