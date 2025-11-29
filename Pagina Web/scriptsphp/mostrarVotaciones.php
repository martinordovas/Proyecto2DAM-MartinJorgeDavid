<?php
$host = "localhost";
$baseDatos = "LSBMGrupo3";
$usuario = "iniciarsesion";
$pass = "realizarConsulta2025";
$conexion = mysqli_connect($host, $usuario, $pass, $baseDatos);
if($conexion){
    $sql = "SELECT nombre_empresa, votaciones 
            FROM empresas_registradas
            ORDER BY votaciones DESC, nombre_empresa ASC;";
    $consulta = mysqli_query($conexion, $sql);
    if($consulta){
        $resultadosVotaciones = [];
        while($resultado = mysqli_fetch_assoc($consulta)){
            $resultadosVotaciones[] = [
                'nombreEmpresa' => $resultado['nombre_empresa'],
                'numeroVotos' => $resultado['votaciones']
            ];
        }
        $_SESSION['resultados_votaciones'] = $resultadosVotaciones;
    }
    mysqli_close($conexion);
}
?>