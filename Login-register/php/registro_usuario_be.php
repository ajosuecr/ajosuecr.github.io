<?php 

    include 'conexion_be.php';

    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $query = "INSERT INTO usuarios(usuario, correo, contrasena)   
              VALUES('$usuario', '$correo', '$contrasena')";
    $ejecutar = mysqli_query($conexion, $query);
?> 