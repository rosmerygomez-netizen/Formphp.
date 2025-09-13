<?php
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$direccion = $_POST['direccion'];
$salario = $_POST['salario'];
$correo = $_POST['correo'];
$cargo = $_POST['cargo'];



echo "<h2>Información recibida</h2>";
echo "El empleado $nombre tiene $edad años.<br>";
echo "Vive en $direccion y su salario es: $salario.";
echo "su correo es $correo y su cargo es: $cargo.";
?>
