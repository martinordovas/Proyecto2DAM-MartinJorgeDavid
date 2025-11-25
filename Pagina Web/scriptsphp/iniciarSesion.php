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
            $sql = "SELECT * FROM empresas_registradas WHERE correo_empresa = ?";
            $consulta = mysqli_prepare($conexion, $sql);
            mysqli_stmt_bind_param($consulta, "s", $emailInicioSesion);
            mysqli_stmt_execute($consulta);
            if ($consulta) {
                $resultado = mysqli_stmt_get_result($consulta);
                $contrasenyaSacada = mysqli_fetch_assoc($resultado);
                $passwordCifrada = $contrasenyaSacada['contrasenya'];
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
                mysqli_stmt_close($consulta);
                header("Location: ../index.php");
            }
        }
        header("Location: ../index.php");
        exit;
    }
    if($conexion){
        mysqli_close($conexion);
    }
}
else {
    header("Location: ../index.php");
    exit;
}
?>