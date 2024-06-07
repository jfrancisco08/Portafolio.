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

$sql = "SELECT * FROM registro WHERE nombre='$nombre' AND apellido='$apellido'";
$result = $conn->query($sql);

// Verificar si se encontraron resultados
if ($result->num_rows > 0) {
    echo "<script>window.location.href = 'inicio.html';</script>";
    exit();
} else {
    echo "<script>alert('Usuario incorrecto, debe registrarse.'); window.history.back();</script>";
}

$conn->close();
?>