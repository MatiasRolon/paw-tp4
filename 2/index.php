<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
   <?php
    
    include("Conexion.php");
    include("Config.php");
    
   $configuracion = new Config();
    $conf = $configuracion -> getConf();
    $conexion = new Conexion($conf);
    
    if ($conexion){
        echo 'Se realizo la conexión correctamente'
    }
    ?>
    
</body>
</html>