<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion</title>
</head>
<body>
<?php

   ini_set('display_errors',0);
   ini_set('display_startup_errors', 0);
    error_reporting(0);

    function Conectarse()
    {
        $dsn = "Driver={SQLServer};
        Server=DESKTOP-4JP92V9;Database=PhpDB;";
        try{
            if(!($link = odbc_connect($dsn,'PHPUser','simple')))
            {
                echo"Error conectando a la base de datos. ";
                exit();
            }
            else{
                //echo"Conectó a la base de datos";
            }
            return $link;
        }
        catch(Exception $Ex){
            echo "$Ex";
        }
        
    }


    $link2 = Conectarse();
?>
</body>
</html>