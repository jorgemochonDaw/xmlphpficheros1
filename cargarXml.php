<?php
function mostrarXml($datosXML)
{
    if ($datosXML === false) {
        echo 'Error al leer el fichero';
        echo "<br>";
        return;
    } else {
        echo 'Fichero leido';
        echo '<br>';
        echo 'Biblioteca';
        echo '<pre>';
        foreach ($datosXML as $biblioteca) {
            foreach ($biblioteca as $novela) {
                if ($novela->estado == "Prestado") {
?>
                    <form>
                        <input type="hidden" name="id" placeholder=<?php echo $novela->id ?> readonly>
                        <label for="isbn">Isbn:</label>
                        <input placeholder=<?php echo $novela->isbn ?> readonly>
                        <label for="titulo">Titulo:</label>
                        <input placeholder=<?php echo $novela->titulo ?> readonly>
                        <label for="autor">Autor:</label>
                        <input placeholder=<?php echo $novela->autor ?> readonly>
                        <label for="editorial">Editorial:</label>
                        <input placeholder=<?php echo $novela->editorial ?> readonly>
                        <label for="annio_edicion">Año de edicion:</label>
                        <input placeholder=<?php echo $novela->annio_edicion ?> readonly>
                        <label for="estado">Estado:</label>
                        <input placeholder=<?php echo $novela->estado ?> readonly>
                        <label for="fecha_devolucion">Fecha de devolucion:</label>
                        <input placeholder=<?php echo $novela->fecha_devolucion ?> readonly>
                    </form>
                <?php
                } else {
                ?>
                    <form action="#" method="POST">
                        <input type="hidden" name="id" value=<?php echo $novela->id ?> placeholder=<?php echo $novela->id ?> >
                        <input type="hidden" value=<?php ?>>
                        <label for="isbn">Isbn:</label>
                        <input placeholder=<?php echo $novela->isbn ?> readonly>
                        <label for="titulo">Titulo:</label>
                        <input placeholder=<?php echo $novela->titulo ?> readonly>
                        <label for="autor">Autor:</label>
                        <input placeholder=<?php echo $novela->autor ?> readonly>
                        <label for="editorial">Editorial:</label>
                        <input placeholder=<?php echo $novela->editorial ?> readonly>
                        <label for="annio_edicion">Año de edicion:</label>
                        <input placeholder=<?php echo $novela->annio_edicion ?> readonly>
                        <label for="estado">Estado:</label>
                        <input placeholder=<?php echo $novela->estado ?> readonly>
                        <label for="fecha_devolucion">Fecha de devolucion:</label>
                        <input placeholder=<?php echo $novela->fecha_devolucion ?> readonly>
                        <input type="submit" name="alquilar" value="Alquilar libros">
                    </form>
<?php
                }
            }
        }
        return;
    }
}
