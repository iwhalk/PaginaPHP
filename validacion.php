<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }
        
        h3 {
            text-align: center;
            color: #333333;
        }
        
        form {
            text-align: center;
            margin-top: 20px;
        }
        
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4caf50;
            color: #ffffff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        
        .messageFail {
            text-align: center;
            margin-top: 20px;
            color: #ff0000;
            font-weight: bold;
        }

        .messageSucceed {
            text-align: center;
            margin-top: 20px;
            color: #00FF00;
            font-weight: bold;
        }
    </style>

</head>

<body>
    <h3>VALIDACION DE USUARIO</h3>
    <?php
    require_once('test.php');

    $usuario = $_POST['usuario'];
    $pass = $_POST['pass'];


    $query_usuario="select Nombre, Password, Ususario from Usuarios where 
    Ususario = :usr and Password = :pss ";
    $parametros = array("usr"=>$usuario, "pss"=>$pass);
    
    $queryMaker = new ConectDB();

    try{
        
        $data = $queryMaker->GetQuery($query_usuario, $parametros);
        if (is_integer($data))            
            throw new Exception("error en la consulta");
        if(isset($data) && !empty($data) && $data != 0){
            echo "<br><p class = 'messageSucceed'>BIENVENIDO ".$data[0]["Nombre"]."</p>";
            echo "<form name='Login' method='post' action='Homepage.php'>
                <input type='submit' value='Continuar' />
                </form>";
        }
        else{
            echo "<p class='messageFail'>Usuario o contraseña incorrectos</p>";
            echo "<script>setTimeout(function(){window.location.href='index.php';}, 1500);</script>";
        }
    }
    catch(Exception $ex){
        echo $ex->getMessage();
    }
    ?>
</body>
</html>

