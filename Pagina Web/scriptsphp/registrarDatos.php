<?php
$host = "localhost";
$baseDatos = "LSBMGrupo3";
$usuario = "registros";
$pass = "accesoBD2025grupo3";
$conexion = mysqli_connect($host, $usuario, $pass, $baseDatos);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($conexion) {
        if (isset($_POST["botonEnviar"])) {
            $directorio = "../fotosSubidas/";
            $ruta_foto_bd = null;
            if(isset($_FILES['fotoEmpresa'])){
                $info_archivo = $_FILES['fotoEmpresa'];
                $extension = strtolower(pathinfo($info_archivo['name'] , PATHINFO_EXTENSION));
                $extensionesPermitidas = ['jpg', 'jpeg', 'png'];
                if(in_array($extension, $extensionesPermitidas)){
                    $nombreFichero = uniqid('logo_', true) . '.' . $extension;
                    $rutaFichero = $directorio . $nombreFichero;
                    if (move_uploaded_file($info_archivo['tmp_name'], $rutaFichero)) {
                        $ruta_foto_bd = "../fotosSubidas/" . $nombreFichero; 
                    } else {
                        $_SESSION['mensaje'] = "Error al guardar el logo en el servidor.";
                        header("Location: ../index.php"); 
                        exit;
                    }
                }
                else {
                    $_SESSION['mensaje'] = "Extensión de imagen incorrecta.";
                }
            }
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
                        descripcion_empresa,
                        ruta_foto
                    ) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $consulta = mysqli_prepare($conexion, $sql);
            mysqli_stmt_bind_param(
                $consulta,
                "sssssssssss",
                $nombreEmpresa, 
                $correoEmpresa, 
                $passwordCifrada, 
                $enlaceWebVerificada, 
                $enlaceMeetVerificada, 
                $horarioEmpresaAM1, 
                $horarioEmpresaAM2, 
                $horarioEmpresaPM1, 
                $horarioEmpresaPM2, 
                $descripcionEmpresa,
                $ruta_foto_bd
            );
            $consultaFinal = mysqli_stmt_execute($consulta);
            if ($consultaFinal) {
                mysqli_stmt_close($consulta);
                mysqli_close($conexion);
                header("Location: ../index.php");
            }
            mysqli_stmt_close($consulta);
        }
    }
    if($conexion){
        mysqli_close($conexion);
    }
}
else {
    header("Location: ../index.php");
}
?>