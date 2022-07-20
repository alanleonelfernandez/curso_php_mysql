<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="pagina_insertar_pdo.php" method="post">
        <table>
            <tr>
                <td>Nombre</td>
                <td><input type="text" name="nombre" id="nombre"></td>
            </tr>
            <tr>
                <td>Apellido</td>
                <td><input type="text" name="apellido" id="apellido"></td>
            </tr>
            <tr>
                <td>Edad</td>
                <td><input type="int" name="edad" id="edad"></td>
            </tr>
            <tr>
                <td>NIF</td>
                <td><input type="text" name="nif" id="nif"></td>
            </tr>
            <tr>
                <td><input type="submit" name="enviando" value="Insertar"></td>
            </tr>
        </table>
    </form>
</body>
</html>