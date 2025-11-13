<?php
$host = "172.26.10.1";
$baseDatos = "LSBMGrupo3";
$usuario = "registros";
$pass = "accesoBD2025grupo3";
$conexion = mysqli_connect($host, $usuario, $pass, $baseDatos);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($conexion) {
        if (isset($_POST["botonEnviar"])) {
            $nombreEmpresa = trim($_POST['nombreEmpresa']);
            $correoEmpresa = filter_var($_POST['correoEmpresa'], FILTER_VALIDATE_EMAIL);
            $passwordEmpresa = $_POST['passwordEmpresa'];
            $passwordCifrada = password_hash($passwordEmpresa, PASSWORD_DEFAULT);
            $enlaceWeb = $_POST['enlaceWeb'];
            $enlaceMeet = $_POST['enlaceMeet'];
            $horarioEmpresaAM1 = $_POST['horarioEmpresaAM1'];
            $horarioEmpresaAM2 = $_POST['horarioEmpresaAM2'];
            $horarioEmpresaPM1 = $_POST['horarioEmpresaPM1'];
            $horarioEmpresaPM2 = $_POST['horarioEmpresaPM2'];
            $descripcionEmpresa = $_POST['descripcionEmpresa'];

            if(filter_var($enlaceWeb, FILTER_VALIDATE_URL)){
                $enlaceWebVerificada = $enlaceWeb;
            }
            if(filter_var($enlaceMeet, FILTER_VALIDATE_URL)){
                $enlaceMeetVerificada = $enlaceMeet;
            };

            $sql = "INSERT INTO empresas_registradas (
                        nombre_empresa, 
                        correo_empresa, 
                        contrasenya, 
                        enlace_web, 
                        enlace_meet, 
                        horario_am_inicio, 
                        horario_am_fin, 
                        horario_pm_inicio, 
                        horario_pm_fin, 
                        descripcion_empresa
                    ) 
                    VALUES ('$nombreEmpresa', 
                        '$correoEmpresa', 
                        '$passwordCifrada', 
                        '$enlaceWebVerificada', 
                        '$enlaceMeetVerificada', 
                        '$horarioEmpresaAM1', 
                        '$horarioEmpresaAM2', 
                        '$horarioEmpresaPM1', 
                        '$horarioEmpresaPM2', 
                        '$descripcionEmpresa'
                    )";
            $consulta = mysqli_query($conexion, $sql);
            if ($consulta) {
                header("Location: ../index.php");
            }
        }
    }
}
else {
    header("Location: ../index.php");
}
?>