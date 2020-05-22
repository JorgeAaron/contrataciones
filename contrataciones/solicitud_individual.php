<?php
include('include/header.php');
?>

<br>
<body background= "imagenes/color2.jpg">

<div class="col-md-8 ">
<div class="table-responsive-md ">
<table class="table table-bordered table-light">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Sexo</th>
      <th scope="col">Trabajo previo</th>
      <th scope="col">Duración</th>
      <th scope="col">Idiomas</th>  
      
    </tr>
  </thead>
  <tbody>
    
    <?php
        $pid = $_GET['puestoid'];
        $query = "SELECT * FROM solicitud WHERE puesto_id=$pid ";
        $result_solicitud = mysqli_query($conexion,$query);
        while($row = mysqli_fetch_array($result_solicitud)) { ?>
        <tr>
      
      <td><?php echo $row['nombre']; ?></td>
      <td><?php echo $row['sexo']; ?></td>
      <td><?php echo $row['antiguo_trabajo']; ?></td>
      <td><?php echo $row['duracion']; ?></td>
      <td><?php echo $row['idiomas']; ?></td>
    </tr>
  </tbody>
  
</table>
</div>

<div class="table-responsive-md ">
<table class="table table-bordered table-light">
  <thead>
    <tr>
      <th scope="col">Año de nacimiento</th>
      <th scope="col">Dirección</th>
      <th scope="col">Colonia</th>
      <th scope="col">Codigo Postal</th>
      <th scope="col">Telefono de casa</th>  
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $row['nacimiento']; ?></td>
      <td><?php echo $row['direccion']; ?></td>
      <td><?php echo $row['colonia']; ?></td>
      <td><?php echo $row['codigo_postal']; ?></td>
      <td><?php echo $row['telefono']; ?></td>
    </tr>
  </tbody>
  
</table>
</div>

<div class="table-responsive-md ">
<table class="table table-bordered table-light">
  <thead>
    <tr>
      <th scope="col">Estatura</th>
      <th scope="col">Peso</th>
      <th scope="col">Estado civil</th>
      <th scope="col">Descripción</th>
      <th scope="col">Escolaridad</th>  

    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $row['estatura']; ?></td>
      <td><?php echo $row['peso']; ?></td>
      <td><?php echo $row['estado']; ?></td>
      <td><?php echo $row['descripcion']; ?></td>
      <td><?php echo $row['escolaridad']; ?></td>
     
    </tr>
  </tbody>


  </table>
  </div>
  </div>
        <?php }?>

        

</body>