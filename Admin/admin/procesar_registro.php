<?php
// Incluir archivo de conexión a la base de datos
include('Configuración/conexion.php');

// Recibir los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$contraseña = $_POST['contraseña'];
$confirmar_contraseña = $_POST['confirmar_contraseña'];

// Validar si las contraseñas coinciden
if ($contraseña !== $confirmar_contraseña) {
    die('Las contraseñas no coinciden.');
}

// Encriptar la contraseña
$contraseña_encriptada = password_hash($contraseña, PASSWORD_DEFAULT);

// Insertar los datos en la base de datos
$sql = "INSERT INTO usuarios (nombre, email, telefono, direccion, contraseña) VALUES ('$nombre', '$email', '$telefono', '$direccion', '$contraseña_encriptada')";

if (mysqli_query($conexion, $sql)) {
    echo "Registro exitoso. <a href='login.php'>Iniciar sesión</a>";
} else {
    echo "Error al registrar: " . mysqli_error($conexion);
}

// Cerrar la conexión
mysqli_close($conexion);
?>
