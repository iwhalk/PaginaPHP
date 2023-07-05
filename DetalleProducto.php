<!DOCTYPE html>
<html>
<head>
    <title>Product Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        
        h1 {
            text-align: center;
        }
        
        form {
            max-width: 400px;
            margin: 0 auto;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        
        .btn-container {
            display: flex;
            justify-content: space-between;
        }
        
        input[type="submit"],
        .delete-btn {
            display: block;
            width: 48%;
            padding: 10px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }
        
        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
        }
        
        .delete-btn {
            background-color: #f44336;
            color: #fff;
            border: none;
        }
    </style>
</head>
<body>
    <h1>Detalle</h1>
    
    <?php
        if (isset($_GET["IdCatalogo"])) {
            $id = $_GET["IdCatalogo"];
            
            require_once('ObtenerCatalogo.php');
            
            $obtenerCatalogo = new ObtenerCatalogo($id);
            $catalogo =  $obtenerCatalogo->GetCatalogo();
            
            if (count($catalogo) > 0 && $id != 0) {

                $SKU = $catalogo[0]["SKU"];
                $tipo = $catalogo[0]["Nombre"];
                
                echo "<form action='updateCatalogo.php?id=$id' method='POST'>";
                echo "<div class='form-group'>";
                echo "<label for='sku'>SKU:</label>";
                echo "<input type='text' name='sku' value='$SKU' required>";
                echo "</div>";
                echo "<div class='form-group'>";
                echo "<label for='tipo'>Tipo:</label>";
                echo "<input type='text' name='tipo' value='$tipo' required>";
                echo "</div>";
                echo "<div class='btn-container'>";
                echo "<input type='submit' value='Actualizar'>";
                echo "<button class='delete-btn' onclick=\"if(confirm('Estas seguro que quieres borrar esto?')) {window.location.href='deleteCatalogo.php?id=$id';}\">Borrar</button>";
                echo "</div>";
                echo "</form>";
            } else {
                echo "<form action='addCatalogo.php' method='POST'>";
                echo "<div class='form-group'>";
                echo "<label for='sku'>SKU:</label>";
                echo "<input type='text' name='sku' required>";
                echo "</div>";
                echo "<div class='form-group'>";
                echo "<label for='tipo'>Tipo:</label>";
                echo "<input type='text' name='tipo' required>";
                echo "</div>";
                echo "<input type='submit' value='Agregar'>";
                echo "</form>";
            }
        } else {
            echo "Id Invalido";
        }
    ?>
</body>
</html>
