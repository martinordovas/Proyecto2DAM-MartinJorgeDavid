<?php
session_start();
if(isset($_COOKIE['sesion_activa'])){
    setcookie("sesion_activa", "", time() - 3600, "/");
}
header("Location: ../index.php");
exit;
?>