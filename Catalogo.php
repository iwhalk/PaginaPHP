<!DOCTYPE html>
<html>
<head>
    <title>Catalogo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        
        h1 {
            text-align: center;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #f2f2f2;
        }
        
        tr:hover {
            background-color: #f5f5f5;
        }
        
        .submenu {
            display: none;
        }
        
        tr:last-child .add-submenu {
            display: block;
        }
        
        tr:not(:last-child) .edit-submenu {
            display: block;
        }
        
        .submenu a {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <h1>Catalogo</h1>
    
    <h2>Inventario</h2>
    <table>
        <tr>
            <th>SKU</th>
            <th>Tipo</th>
            <th>Tamaño</th>
            <th>Material</th>
            <th>Accion</th>
        </tr>
        <?php
            require_once('ObtenerCatalogo.php');
            
            $obtenerCatalogo = new ObtenerCatalogo(0);
            $catalogo =  $obtenerCatalogo->GetCatalogo();
            
            if (count($catalogo) > 0) {
                $row_count = 0;
                foreach($catalogo as $row) {
                    echo "<tr>";
                    echo "<td>" . $row["SKU"] . "</td>";
                    echo "<td>" . $row["Nombre"] . "</td>";
                    echo "<td>" . "2cm" . "</td>";
                    echo "<td>" . "Polifibrato" . "</td>";

                    if ($row_count === count($catalogo) - 1) {
                        echo "<td class='submenu add-submenu'>
                                <a href='DetalleProducto.php?IdCatalogo=" . $row["IdCatalogo"] . "'>Edit</a>
                                <a href='DetalleProducto.php?IdCatalogo=" . "0" . "'>Agregar</a>
                            </td>";
                    } else {
                        echo "<td class='submenu edit-submenu'>
                                <a href='DetalleProducto.php?IdCatalogo=" . $row["IdCatalogo"] . "'>Edit</a>
                            </td>";
                    }
                    echo "</tr>";
                    
                    $row_count++;
                }
            } else {
                echo "<tr><td colspan='3'>No hay productos.</td></tr>";
            }
        ?>
    </table>
</body>
</html>
