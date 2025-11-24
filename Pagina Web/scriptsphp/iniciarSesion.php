<?php
session_start();
$host = "localhost";
$baseDatos = "LSBMGrupo3";
$usuario = "iniciarsesion";
$pass = "realizarConsulta2025";
$conexion = mysqli_connect($host, $usuario, $pass, $baseDatos);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($conexion) {
        if (isset($_POST["botonIniciarSesion"])) {
            $emailInicioSesion = $_POST['emailInicioSesion'];
            $passwordInicioSesion = $_POST['passwordInicioSesion'];
            $sql = "SELECT * FROM empresas_registradas WHERE correo_empresa = '$emailInicioSesion'";
            $consulta = mysqli_query($conexion, $sql);
            if ($consulta) {
                $resultado = mysqli_fetch_array($consulta);
                $passwordCifrada = $resultado['contrasenya'];
                if (password_verify($passwordInicioSesion, $passwordCifrada)) {
                    $_SESSION['mensaje'] = "Ha iniciado sesión. Bienvenid@.";
                    $_SESSION['usuario'] = $emailInicioSesion;
                    setcookie("sesion_activa", "true", time() + 3600, "/");
                    header("Location: ../index.php");
                    exit;
                }
                else {
                    $_SESSION['mensaje'] = "Usuario y/o contraseña incorrectos.";
                }
            }
            if ($consulta) {
                header("Location: ../index.php");
            }
        }
        header("Location: ../index.php");
        exit;
    }
}
else {
    header("Location: ../index.php");
    exit;
}
?>