<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "jfweb"; 

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$lugar = $_POST['lugar'];

$sql = "INSERT INTO registro (nombre, apellido, telefono, lugar) VALUES ('$nombre', '$apellido', '$telefono', '$lugar')";

if ($conn->query($sql) === TRUE) {
    header("Location: inicio.html");
        exit();
} else {
    echo "Error al registrar los datos: " . $conn->error;
}

$conn->close();
?>
