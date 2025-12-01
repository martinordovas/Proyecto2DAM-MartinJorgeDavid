<?php
$host = "localhost";
$baseDatos = "LSBMGrupo3";
$usuario = "root";
$pass = "1234";
$conexion = mysqli_connect($host, $usuario, $pass, $baseDatos);
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if($conexion){
        if(isset($_POST["btn-enviar"])){
            if(isset($_POST["empresa"])){
                $empresa_seleccionada = $_POST["empresa"];
                $sql = "UPDATE empresas_registradas 
                        SET votaciones = votaciones + 1 
                        WHERE id_empresa = ?";
                $consulta = mysqli_prepare($conexion, $sql);
                mysqli_stmt_bind_param(
                    $consulta,
                    "i",
                    $empresa_seleccionada
                );
                $consultaFinal = mysqli_stmt_execute($consulta);
                if($consultaFinal){
                    mysqli_stmt_close($consulta);
                    mysqli_close($conexion);
                    header("Location: ../Empresas.php");
                }
                mysqli_stmt_close($consulta);
                header("Location: ../Empresas.php");
            }
        }
    }
    if($conexion){
        mysqli_close($conexion);
        header("Location: ../Empresas.php");
    }
}
else{
    header("Location: ../Empresas.php");
}
?>