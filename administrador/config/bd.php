<?php 
$host="localhost";
$bd="web";
$usuario="root";
$contrasenia="";

try {
        $conexion=new PDO  ("mysql:host=$host;dbname=$bd",$usuario,$contrasenia);
        if($conexion) {echo"conectado...";}
} catch ( EXception $ex) {
    echo $ex->getMessage();
}
?>