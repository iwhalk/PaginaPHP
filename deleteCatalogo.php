<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion</title>
</head>
    <?php
    require_once('test.php');

    $id = $_GET['id'];

    $query_usuario="DELETE FROM Catalogo WHERE IdCatalogo = :id";
    $parametros = array("id"=>$id);
    echo"$id";
    $queryMaker = new ConectDB();

    try{
        
        $data = $queryMaker->ExecQuery($query_usuario, $parametros);
        if ($data == -1)            
            throw new Exception("Error al modificar la tabla");

        if(isset($data) && !empty($data) && $data != 0)
            echo"Borrado con exito";            
        else            
            echo"No se afecto ninguna fila";

        echo "<script>setTimeout(function(){window.location.href='Catalogo.php';}, 2000);</script>";        
    }
    catch(Exception $ex){
        echo $ex->getMessage();
    }
    ?>
</html>