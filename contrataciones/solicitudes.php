

<?php include('conexion/localhost.php') ?>


<?php
 include('include/header.php') ?>

 
 



<body background ="imagenes/color2.jpg">

<br>
    
<div class="col-md-8">
<table class="table  table-light">
<thead>
    <tr>
        <th>Nombre del solicitante</th>
        <th>Edad</th>
        <th>Porque quiere el trabajo</th>
        <th>Antigous trabajo</th>
        <th>Duración en ese trabajo</th>
        <th>Ver información completa</th>
        
    </tr>
</thead>
<tbody>
    <?php
        $pid = $_GET['puestoid'];
        $query = "SELECT * FROM solicitud WHERE puesto_id=$pid ";
        $result_solicitud = mysqli_query($conexion,$query);

        while($row = mysqli_fetch_array($result_solicitud)) { ?>
            <tr>
                <td><?php echo $row['nombre']?></td>
                <td><?php echo $row['edad']?></td>
                <td><?php echo $row['idiomas']?></td>
                <td><?php echo $row['antiguo_trabajo']?></td>
                <td><?php echo $row['duracion']?></td>
                <<td><a href= "solicitud_individual.php?puestoid=<?php echo $_GET['puestoid']?>">Ver más</a></td>
         
        </tr>

        <?php }?>
</tbody>
</table>



























</div>
</div>
</body>

