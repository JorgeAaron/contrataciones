<?php include('conexion/localhost.php') ?>

<?php include('include/header.php') ?>
<br>

<body background= "imagenes/color2.jpg">
<div class = "container">
<h2 style="color:white">Bienvenido, selecciona uno de los puestos que tenemos y manda tu formulario.</h2> 
  <br>
<div class = "row">
<?php $query = "SELECT * FROM puesto INNER JOIN users WHERE users.user_id = puesto.user_id";
      $result_prueba = mysqli_query($conexion, $query);

      while($row = mysqli_fetch_array($result_prueba)) { ?>

<div class="col-3 pb-3 ">
<div class="card">
  <div class="card-header">
    <?php echo $row['username']; ?>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?php echo $row['nombre']; ?></li>
    <li class="list-group-item"><?php echo $row['sueldo']; ?></li>
    <li class="list-group-item">
    <?php echo $row['descripcion']; ?>
    </li>
    <a href="formulario.php?puestoid=<?php echo $row['idpuesto']?>" class="btn btn-success">Crear solicitud</a>
  </ul>
</div>
</div>

      <?php } ?>

      </div>
      </div>

      </body>