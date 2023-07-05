<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form name='Login' method='post' action= 'validacion.php'>

      
       <table border='0' width='30%'  style='background-color: #c5c5c5' align='center'
               <tr>
                   <td colspan='2'>
                   <br />
                   <br />
                   <br />
                   </td>
               </tr>           
           <tr>
               <td align='center' colspan='2'>
               <img src='LOGOTIPO.jpg' width='287' height='287' />		</td>
           </tr>
           
           <tr>
               <td align='center' colspan='2'>
               <H2> !BIENVENIDO!</H2>
               </td>
           </tr>
               
               <tr>
               <td colspan='2'>
               <br/>
                   </tr>
               </td>
           
           <tr>
               <td align='right' width='50%'>
               
               USUARIO:
               </td>
               
               <td align='left'>
               <input type='text' maxlength='8' name='usuario'/>
               
               </td>
           </tr>

           <tr>
               <td align='right' width='50%'>
               CONTRASEÑA:
               </td>
               
               <td align='left'>
               <input type='password' maxlength='8' name='pass'/>
               </td>
           </tr>

            <tr>
               <td align='center' colspan='2'>
               <br />
               <input type='submit' value='Ingresar' />
               </td>
           </tr> 
           
       </table>
       </form>
</body>
</html>