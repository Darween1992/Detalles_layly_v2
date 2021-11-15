<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    
    <link rel="stylesheet" href="build/css/app.css">
    
    
</head>
<body>
    
<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

<H1> Panel de administracion</H1>

<main class="main-contenedor">
    <a href="crear_producto.php" class="boton ">Nuevo Producto</a>
</main>

<?php
    incluirTemplate('footer');
?>
    
</body>
</html>