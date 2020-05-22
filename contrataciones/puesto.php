<?php

include("conexion/localhost.php")

?>

<?php

include("include/header.php");



?>


<body background= "imagenes/color2.jpg">
  
  <div class="container p-4">
  <h2 style="color:white">Agregue nuevos puestos de trabajo</h2> 
  <br>
    <div class="row">
    <div class="col-md-4">
      <?php if(isset($_SESSION['message'])) { ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <?= $_SESSION['message'] ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
      <?php } ?>
      
      <div class="card card-body">
        <form action="agregar_puesto.php?uid=<?php echo $_GET['uid'] ?>" method= "POST">
          <div class="form-group">
            <input type="text" name="title" class="form-control"
           placeholder="Nombre del puesto:" autofocus >        
  </div>
  <div class="form-group">
            <input type="text" name="salary" class="form-control"
            placeholder="Sueldo:" autofocus >       
  </div>
  <div class="form-group">
    <textarea name="description" rows ="4" class="form-control"
    placeholder="Descripcion del puesto:"></textarea>
</div>
<input type="submit" class="btn btn-success btn-block"
  name="agregar_puesto" value= "Agregar puesto">
        </form>
      </div>
      </div>
      </div>
      </div>
 
   <!--fsd-->

   <div class = "container">
<div class = "row">
<?php

$uid =  $_GET['uid'];
$query = "SELECT * FROM puesto WHERE user_id = $uid";
      $result_prueba = mysqli_query($conexion, $query);

      while($row = mysqli_fetch_array($result_prueba)) { ?>

<div class="col-3 p-2">
<div class="card">
  <div class="card-header">
    CRPublicidad
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?php echo $row['nombre']; ?></li>
    <li class="list-group-item"><?php echo $row['sueldo']; ?></li>
    <li class="list-group-item">
    <?php echo $row['descripcion']; ?>
    </li>
     <a href="solicitudes.php?puestoid=<?php echo $row['idpuesto']?>" class="btn btn-primary">Ver solicitudes</a>
  </ul>
</div>
</div>

      <?php } ?>

      </div>
      </div>  




    

</body>

<?php include('include/footer.php') ?>

</html>