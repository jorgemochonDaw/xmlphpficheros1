<?php
$datosXML = simplexml_load_file('biblioteca.xml');

function comprobarFichero($datosXML)
{
    if ($datosXML === false) {
        echo 'Error al leer el fichero';
        echo "<br>";
        return;
    } else {
        echo 'Fichero leido';
        echo '<pre>';
        foreach ($datosXML as $biblioteca) {
            foreach ($biblioteca as $novela) {
                echo 'Isbn: ' . $novela->isbn . '<br>';
                echo 'Titulo: ' . $novela->titulo . '<br>';
                echo 'Autor: ' . $novela->autor . '<br>';
                echo 'Editorial: ' . $novela->editorial . '<br>';
                echo 'Año de edición: ' . $novela->annio_edicion . '<br>';
                echo 'Estado: ' . $novela->estado . '<br>';
                echo 'Fecha de devolución: ' . $novela->fecha_devolucion . '<br>';
                echo '<br>';
            }
        }
        return;
    }
}

session_start();
if (isset($_POST['librosDisponibles'])) {
    error_reporting(0);
    $n = 0;
    foreach ($datosXML as $biblioteca) {
        foreach ($biblioteca as $novela) {
            if ($novela->estado == "Libre") {
                $_SESSION['librosDisponibles'][$n] =
                    array(
                        array(
                            'estado' => $novela->estado,
                            'titulo' => $novela->titulo,
                        ),
                    );
                $n++;
                $mostrarDisponibles = true;
            }
        }
    }
}

function htmlDisponibles()
{
    for ($i = 0; $i < sizeof($_SESSION['librosDisponibles']); $i++) {
        foreach ($_SESSION['librosDisponibles'][$i] as $valor) {
            echo "<br>";
?>
            <form action="validar.php" method="POST">
                <input placeholder=<?php echo $valor['estado'] ?> readonly>
                <input type="text" placeholder=<?php echo $valor['titulo'] ?> readonly name="titulo">
                <input type="submit" value="Alquilar libro" name="alquilarLibro">
            </form>
    <?php
        }
    }
}

if (!$mostrarDisponibles) {
    comprobarFichero($datosXML);
    include './botones.php';
} else {
    ?>
    <h1>Libros disponibles</h1>
<?php
    htmlDisponibles();
}

if (isset($_POST['alquilarLibro'])) {
    $libros = new SimpleXMLElement('biblioteca.xml', 0, true);
    var_dump($libros);
    echo "Nombre: " . $libros['estado'] = '22' . "<br>";
    echo "Nombre: " . $libros->$valor['titulo'] . "<br>";
}