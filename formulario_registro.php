<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    h1{
        text-align: center;
        color: #00F;
        border-bottom: dotted #0000FF;
        width: 50%;
        margin: auto;
    }
    table{
        border: 1px solid #f00;
        padding: 20px 50px;
        margin-top: 50px;
    }
    body{
        background-color: #ffC;
    }
</style>
</head>
<body>
    
    <h1>Registro de Personas</h1>
    <form action="insertar_registro.php" name="form1" method="get">
        <table border="0" align="center">
            <tr>
                <td>NIF</td>
                <td><label for="nif"></label>
                <input type="text" name="nif" id="nif"></td>
            </tr>
            <tr>
                <td>Nombre</td>
                <td><label for="nombre"></label>
                <input type="text" name="nombre" id="nombre"></td>
            </tr>
            <tr>
                <td>Apellido</td>
                <td><label for="apellido"></label>
                <input type="text" name="apellido" id="apellido"></td>
            </tr>
            <tr>
                <td>Edad</td>
                <td><label for="edad"></label>
                <input type="int" name="edad" id="edad"></td>
            </tr>
            <tr>
                <td align="center"><input type="submit" name="enviar" id="enviar" value="Enviar"></td>
                <td align="center"><input type="reset" name="borrar" id="borrar" value="Borrar"></td>
            </tr>
        </table>
    </form>
</body>
</html>