<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        
        form {
            margin: 0 auto;
            max-width: 400px;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        h2 {
            text-align: center;
            color: #333333;
        }
        
        table {
            width: 100%;
        }
        
        td {
            padding: 10px;
        }
        
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        
        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: #4caf50;
            color: #ffffff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        
        img {
            display: block;
            margin: 0 auto;
            max-width: 287px;
            height: auto;
        }
    </style>
</head>

<body>
    <form name="Login" method="post" action="validacion.php">
        <table>
            <tr>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td align="center" colspan="2">
                    <img src="Media/Login.png" alt="Logo" />
                </td>
            </tr>
            <tr>
                <td align="center" colspan="2">
                    <h2>¡BIENVENIDO!</h2>
                </td>
            </tr>
            <tr>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td align="right" width="50%">USUARIO:</td>
                <td align="left">
                    <input type="text" maxlength="8" name="usuario" />
                </td>
            </tr>
            <tr>
                <td align="right" width="50%">CONTRASEÑA:</td>
                <td align="left">
                    <input type="password" maxlength="8" name="pass" />
                </td>
            </tr>
            <tr>
                <td align="center" colspan="2">
                    <input type="submit" value="Ingresar" />
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
