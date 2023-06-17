<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link  href="style.css"rel="stylesheet">
</head>
<body>
    <form  action="index.php" method="POST">
        <input type="text" name="codigo" placeholder="ingrese el codigo" class="b" >
     
        <br>
        <input type="text" name="nombre" placeholder="ingrese el nombre" class="b">
        <br>
        <input type="text" name="precio" placeholder="ingrese el precio" class="b">
        <br>
        <input type="text" name="existencia" placeholder=" existencia  " class="b">
        <br>
        <input type="hidden" name="accion"  value="crear" class="b">
        <br>
        <button type="submit" class="b"> Guardar  </button>
    </form>

</body>
</html>