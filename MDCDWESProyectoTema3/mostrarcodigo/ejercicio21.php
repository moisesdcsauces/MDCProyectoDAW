<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 21 - Formulario</title>
    </head>
    <body>
        <!--
        -- Moisés Alberto Dominguez Cruz
        -- 08/10/2026
        -- 21. Construir un formulario para recoger un cuestionario realizado a una persona y enviarlo a una página Tratamiento.php para que muestre
        -- las preguntas y las respuestas recogidas. 
        -->
        <?php
            date_default_timezone_set('Europe/Madrid');
            $dFechaActual = new DateTime();
        ?>
        <form name="formularioProductos" action="Tratamiento.php" method="post">

            <label>Nombre: </label>
            <input type="text" name="nombre" id="nombre" value="<?php echo (isset($_REQUEST['nombre']) ? $_REQUEST['nombre'] : ''); ?>">
            <br>
            <label>Sueldo: </label>
            <input type="text" name="sueldo" id="sueldo" value="<?php echo (isset($_REQUEST['sueldo']) ? $_REQUEST['sueldo'] : ''); ?>">
            <br>
            <label>Fecha: </label>
            <input type="date" name="fecha" id="fecha" value="<?php echo (isset($_REQUEST['fecha']) ? $_REQUEST['fecha'] : ''); ?>">
            <br>
            <input type="submit" value="Enviar" />
        </form>
    </body>
</html>

