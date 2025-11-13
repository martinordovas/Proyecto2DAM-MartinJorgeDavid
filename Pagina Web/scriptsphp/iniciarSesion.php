<?php
session_start();
$host = "172.26.10.1";
$baseDatos = "LSBMGrupo3";
$usuario = "registros";
$pass = "accesoBD2025grupo3";
$conexion = mysqli_connect($host, $usuario, $pass, $baseDatos);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($conexion) {
        if (isset($_POST["botonEnviar"])) {
            $emailInicioSesion = $_POST['emailInicioSesion'];
            $passwordInicioSesion = $_POST['passwordInicioSesion'];
            $sql = "SELECT * FROM empresas_registradas WHERE correo_empresa = '$emailInicioSesion'";
            $consulta = mysqli_query($conexion, $sql);
            if ($consulta) {
                $resultado = mysqli_fetch_array($consulta);
                $passwordCifrada = $resultado['contrasenya'];
                if (password_verify($passwordInicioSesion, $passwordCifrada)) {
                    
                    header("Location: ../index.php");
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