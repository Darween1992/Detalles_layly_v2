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
    require 'includes/config/database.php';
    $db = conectarDB();
    // arreglo con mensajes de errores
    $errores = [];

    $descripcion = '';
    $unidad = '';
    $costo = '';
    $imagen = '';
    $caracteristica1 =''; 
    $caracteristica2 = '';
    $caracteristica3 = '';
    $tipo = '';


    if($_SERVER['REQUEST_METHOD']==='POST'){

        // leer los valores deñ metodo post
        $descripcion = $_POST['descripcion'];
        $unidad = $_POST['unidad'];
        $costo = $_POST['costo'];
        $imagen = $_POST['imagen'];
        $caracteristica1 = $_POST['caracteristica1'];
        $caracteristica2 = $_POST['caracteristica2'];
        $caracteristica3 = $_POST['caracteristica3'];
        $tipo = $_POST['tipo'];

        //validadcion de erores
        if(strlen($descripcion)<10){
            $errores[] = "Es necesario agregar una Descripcion y debe de ser mayor a 10 caracteres";
        }
        if(!$unidad){
            $errores[] = "Debes agregar la  unidad de medidad";
        }
        if(!$costo){
            $errores[] = "El costo es obligatorio";
        }
        if(!$caracteristica1){
            $errores[] = "Es necesario agregar al menos una caracteristica o contenido";
        }


        //revisar que el arreglo de errores no este vacio
        if(empty($errores)){
            //insertar en la base de datos
            $query = " INSERT INTO productos(descripcion,unidad,costo,caracteristica1,caracteristica2,caracteristica3,tipo) VALUES ('$descripcion','$unidad','$costo','$caracteristica1','$caracteristica2','$caracteristica3','$tipo')";

            $resultado = mysqli_query($db,$query);
            if($resultado){
                echo("insertado correctamente");
            }
        }
    }

    require 'includes/funciones.php';
    incluirTemplate('header');
?>

<main class="main-contenedor ">
    <H1>Crear Productos</H1>
    <a href="admin.php" class="boton ">Volver al Admin</a>
    
    <?php foreach($errores as $error): ?>
        <div class="alerta error">
        <?php echo $error; ?>
        </div>
    <?php endforeach;?> 

    <form action="crear_producto.php" method="POST" class="formulario forma-contacto">
        <fieldset>
            <legend>Informacion General</legend>
            <label for="descripcion">Descripcion: </label>
            <input type="text" id="descripcion" placeholder="Descripcion Item" name="descripcion" value="<?php echo $descripcion;  ?>">

            <label for="unidad">inidad: </label>
            <input type="text" id="unidad" placeholder="Descripcion inidad" name="unidad" value="<?php echo $unidad;  ?>">

            <label for="costo">costo: </label>
            <input type="number" id="costo" placeholder="Descripcion $costo" name="costo" value="<?php echo $costo;  ?>"  >

            <label for="imagen">imagen: </label>
            <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

            <label for="caracteristica1">caracteristica 1: </label>
            <input type="text" id="caracteristica1" placeholder="caracteristica1" name="caracteristica1" value="<?php echo $caracteristica1;  ?>">

            <label for="caracteristica2">caracteristica 2: </label>
            <input type="text" id="caracteristica2" placeholder="caracteristica2" name="caracteristica2" value="<?php echo $caracteristica2;  ?>">

            <label for="caracteristica3">caracteristica 3: </label>
            <input type="text" id="caracteristica3" placeholder="caracteristica3" name="caracteristica3" value="<?php echo $caracteristica3;  ?>">

            <label for="tipo">tipo: </label>
            <input type="text" id="tipo" placeholder="tipo" name="tipo">

            <input type="submit" value="Crear Item" class="boton">

        </fieldset>
        
    </form>

</main>



<?php
    incluirTemplate('footer');
?>
    
</body>
</html>