
<?php include("conexion/localhost.php");


    

    $nombre= $_POST['nombre'];
    $apellidop = $_POST['apellidop'];
    $apellidom = $_POST['apellidom'];
    $nacimi = $_POST['nacimi'];
    $direccion = $_POST['direccion'];
    $colonia = $_POST['colonia'];
    $postal = $_POST['postal'];
    $telefono = $_POST['telcasa'];
    $s ='fdsf';
    //$v = $_POST['v'];
    $hm = $_POST['hm'];
    $idioma = $_POST['idioma'];
    $previo = $_POST['previo'];
    $duracion = $_POST['duracion'];
    $edad = $_POST['edad'];
    $puestoid = $_GET['puestoid'];
    $estatura = $_POST['estatura'];
    $peso = $_POST['peso'];    
    $descripcion = $_POST['descripcion'];
    $escolaridad = $_POST['escolaridad'];   
    

   // echo $nacimi;



    $query = "INSERT INTO solicitud(nombre, edad, nacimiento,  colonia, codigo_postal, telefono, sexo, estatura, peso, puesto_id, idiomas, antiguo_trabajo, duracion, apellidop, apellidom, estado, direccion, descripcion, escolaridad) 
    VALUES ('$nombre','$edad', '$nacimi', '$colonia', '$postal','$telefono', '$hm', '$estatura','$peso', '$puestoid','$idioma', '$previo', '$duracion','$apellidop', '$apellidom','$s','$direccion','$descripcion','$escolaridad')";
    $result = mysqli_query($conexion,$query);

    if(!$result) {
        die("Query failed");
    }

   header('location: completado.php');


?>