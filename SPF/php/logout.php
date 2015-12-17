<?php
session_start();

$_SESSION['nombre']=null;
setcookie("count", ""); 
setcookie("hoy","");
session_destroy();

header("location:index.php");

?>