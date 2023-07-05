<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion</title>
</head>

<body>
    <H3>VALIDACION DE USUARIO</H3>
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
            echo "<br>BIENVENIDO ".$data[0]["Nombre"];
            echo "<form name='Login' method='post' action= 'Homepage.php'>
                <input type='submit' value='Continuar' />
                </form>";
        }
        else
            echo"Usuario o contraseña incorrectos";
    }
    catch(Exception $ex){
        echo $ex->getMessage();
    }
?>

</body>
</html>