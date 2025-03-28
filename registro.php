<?php
$conexion = CreateConnection();
if ($conexion->connect_error) {
    echo "Error en la conexión a la base de datos";
    die("Error en la conexión a la base de datos: " . $conexion->connect_error);
}

// Obtener los datos enviados desde el formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];



if (empty($nombre) || empty($email) || empty($contrasena) || empty($direccion) || empty($telefono)) {
    header("Location: registrarse.php");
    exit();
}

// Código vulnerable a inyección SQL
$sql = "INSERT INTO usuarios (nombre, email, password, direccion, telefono) VALUES ('$nombre', '$email', '$contrasena','$direccion','$telefono')";
echo $sql;
// Ejecutar la consulta directamente sin preparar ni sanitizar
$resultado = $conexion->query($sql);


if ($resultado) {
    echo "Registro exitoso. Ahora puedes <a href='login.html'>iniciar sesión</a>.";
    redirectToWelcomePage();
} else {
    echo "Ocurrió un problema al intentar registrar el usuario: " . $conexion->error;
    redirectToRegister();
}

$conexion->close();

/**
 * Redirige al usuario a la página de bienvenida.
 */
function redirectToWelcomePage()
{
    header("Location: bienvenido.php");
    exit();
}

/**
 * Redirige al usuario a la página de login.
 */
function redirectToRegister()
{
    header("Location: index.html");
    exit();
}

function CreateConnection()
{
    try {
        // Datos de conexión a la base de datos
        $host = "localhost";
        $usuario_db = "root";
        $contrasena_db = "";
        $nombre_db = "RaicesColombianas";

        // Conexión a la base de datos
        $conexion = new mysqli($host, $usuario_db, $contrasena_db, $nombre_db);
        return $conexion;
    } catch (Exception $ex) {
        echo "Error en la conexión a la base de datos" . $ex->getMessage();
        exit();
    }
}
