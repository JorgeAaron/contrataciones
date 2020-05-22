<?php

include('../conexion/localhost.php');

require 'header.php';


$email= $_POST['email'];
$password = $_POST['password'];


$email = stripcslashes($email);
$password = stripcslashes($password);
//$email = mysqli_real_escape_string($email);
//$password = mysqli_real_escape_string($password);


$result = mysqli_query($conexion,"SELECT * FROM users where email = '$email' and password = '$password'"
) or die("Failed to query database ");
$row = mysqli_fetch_array($result);

if($row['email'] == $email && $row['password'] == $password){
    echo "Login sucessfull";

    $uid = $row['user_id'];

    session_start();
    $_SESSION['login'] = 'administrador';
    header("location: ../puesto.php?uid=".$uid);

} else {

    header("location: ../login.php");
    
    echo "Incorrecto";
}

