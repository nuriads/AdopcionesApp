<?php
include 'conexion.php';

// Procesar datos del formulario
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];



// Consulta SQL para insertar datos en la tabla "usuario"
$sql = "INSERT INTO adopta (email, telefono, mensaje) VALUES (:email, :telefono, :mensaje)";

// Preparar la consulta SQL
$stmt = $pdo->prepare($sql);

// Vincular los parámetros de la consulta SQL con los valores del formulario
$stmt->bindParam(':email', $email);
$stmt->bindParam(':mensaje',$mensaje);
$stmt->bindParam(':telefono',$telefono);

if ($stmt->execute()) {
  http_response_code(200);
} else {
  http_response_code(400);
}


?>