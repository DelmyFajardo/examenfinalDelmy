<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link  href="style.css"rel="stylesheet">
</head>
<body>
    <?php
    $pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
    $conexion = new PDO('mysql:host=localhost;dbname=final_0907_23_11346', 'root', '', $pdo_options);

    if(isset($_POST['accion']) &&
    $_POST['accion'] == "crear"){
    $insert = $conexion->prepare("INSERT INTO producto (codigo,nombre,precio,existencia) values ( :codigo, :nombre, :precio, :existencia)");
    $insert->bindValue('codigo', $_POST ['codigo']);
    $insert->bindValue('nombre', $_POST ['nombre']);
    $insert->bindValue('precio', $_POST ['precio']);
    $insert->bindValue('existencia', $_POST ['existencia']);
    $insert->execute();
}

    $select = $conexion->query("SELECT codigo, nombre, precio, existencia from producto");
    ?>
<a href="crear.php" class="l" > crear nuevo producto </a>


<table border= 1 class="c">
            <thead>     
                <tr>

             <th class="c"> codigo  </th>
             <th class="c"> nombre</th>
             <th class="c"> precio </th>
             <th class="c"> existencia </th>
             </tr>
             </thead> 
             
             <tbody>
             <?php foreach($select->fetchAll() as $producto) {?>
             <tr>
                <td class="p"> <?php echo $producto ["codigo"] ?>  </td>
                <td class="p"> <?php echo $producto ["nombre"] ?>  </td>
                <td class="p"> <?php echo $producto ["precio"] ?>  </td>
                <td class="p"> <?php echo $producto ["existencia"] ?>  </td>
            
            </tr>
            
             <?php  } ?> 
                
    

</body>
</html>