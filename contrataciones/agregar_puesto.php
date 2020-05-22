<?php




include("conexion/localhost.php");


if (isset($_POST['agregar_puesto'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $salario = $_POST['salary'];
    $uid = $_GET['uid'];

    

    $query = "INSERT INTO puesto(nombre, descripcion, sueldo, user_id) VALUES ('$title', '$description', '$salario','$uid')";
    $result = mysqli_query($conexion,$query);

    if(!$result) {
        die("Query failed");
    }

    echo 'saved';




$_SESSION['message'] = 'Guardado exitosamente';
$_SESSION['message_type'] = 'Exitoso';

header("Location: puesto.php?uid=".$uid);

}

?>