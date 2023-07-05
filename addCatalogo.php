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
    $tamaño = $_POST['tamaño'];
    $material = $_POST['material'];

    $query_usuario="INSERT INTO Catalogo (IdUser, SKU , Nombre, Tamaño, Material)
    VALUES (1 , :sku, :tipo, :tam, :mat)";
    $parametros = array("sku"=>$sku, "tipo"=>$tipo, "tam"=>$tamaño, "mat"=>$material);
    
    $queryMaker = new ConectDB();

    try{
        
        $data = $queryMaker->ExecQuery($query_usuario, $parametros);
        if ($data == -1)            
            throw new Exception("Error al modificar la tabla");
        if(isset($data) && !empty($data) && $data != 0){
            echo"Agregado con exito";
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