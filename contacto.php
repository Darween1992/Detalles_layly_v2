<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactanos</title>
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body>
<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
<main>
        <form action="" class="formulario">
        <h2>Comunicate con nosotros</h2>
            <fieldset>

                <legend>Informacion Personal</legend>
                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Tu Nombre" id="nombre">

                <label for="email">E-mail</label>
                <input type="email" placeholder="Tu Correo" id="email">

                <label for="telefono">Telefono</label>
                <input type="tel" placeholder="Tu Telefono" id="telefono">

                <label for="mensaje">Mensaje</label>
                <textarea name="" id="mensaje"></textarea>

            </fieldset>

            <fieldset>
                <legend>Informacion Sobre El producto</legend>
                <label for="Presupuesto">Precio o Presupuesto</label>
                <input type="number" placeholder="Tu Precio o Presupuesto" id="Presupuesto">
            </fieldset>

            <fieldset>
                <legend>Contacto</legend>
                <p>Como desea ser contactado</p>
                <div class="forma-contacto">
                    <label for="contactar-telefono">Telefono</label>
                    <input name="contacto" type="radio" value="Telefono" id="contactar-telefono">

                    <label for="contactar-email">Email</label>
                    <input name="contacto" type="radio" value="Email" id="contactar-email">

                </div>
                <p>Si eligio telefo, elija la fecha y hora </p>

                <label for="fecha">Fecha:</label>
                <input type="date"  id="fecha">

                <label for="hora">Hora:</label>
                <input type="time"  id="hora" min="09:00" max="1800">
            </fieldset>

            <input type="submit" value="Enviar" class="boton">

        </form>

</main>




<?php
    incluirTemplate('footer');
?>
</body>
</html>