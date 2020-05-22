<?php

include("../conexion/localhost.php");


$username = $_POST['username'];
$email =$_POST['email'];
$password = $_POST['password1'];
$password2 = $_POST['password2'];
$description = $_POST['description'];


if($password == $password2 ) {
  // $password = md5($password);
   $sql = "INSERT INTO users(username, email, password, description) VALUES ('$username',
   '$email', '$password', '$description')";
   mysqli_query($conexion, $sql);
   $_SESSION['message'] = "Has iniciado sesión";

 



$result = mysqli_query($conexion,"SELECT * FROM users where email = '$email' and password = '$password'"
) or die("Failed to query database ");
$row = mysqli_fetch_array($result);

$uid = $row['user_id'];



   session_start();
   $_SESSION['login'] = 'administrador';
   header("location: ../puesto.php?uid=".$uid);
} else {
    $_SESSION['message'] = "Las contraseñas no coinciden";
}

