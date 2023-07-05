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

    $sku = $_POST['sku'];
    $tipo = $_POST['tipo'];
    $id = $_GET['id'];

    $query_usuario="UPDATE Catalogo SET IdUser = 1, SKU = :sku, Nombre = :tipo WHERE IdCatalogo = :id";
    $parametros = array("sku"=>$sku, "tipo"=>$tipo, "id"=>$id);
    
    $queryMaker = new ConectDB();

    try{
        
        $data = $queryMaker->ExecQuery($query_usuario, $parametros);
        if ($data == -1)            
            throw new Exception("Error al modificar la tabla");
        if(isset($data) && !empty($data) && $data != 0){
            echo"Modificado con exito";
            echo "<script>setTimeout(function(){window.location.href='Catalogo.php';}, 2000);</script>";
        }
        else
            echo"No se afecto ninguna fila";
    }
    catch(Exception $ex){
        echo $ex->getMessage();
    }
    ?>
</html>