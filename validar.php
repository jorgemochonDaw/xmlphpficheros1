    <?php
    error_reporting(0);
    include './cargarXml.php';
    $biblioteca = new SimpleXMLElement('biblioteca.xml', 0, true);
    // $datosXML = simplexml_load_file('biblioteca.xml'); comprobamos
    if (isset($_POST['alquilar'])) {
        $id = $_POST['id'];

    }

    mostrarXml($biblioteca);

$res = fopen('p.txt', 'r+w');
if ($res) {
    echo 'creado';
} else {
    echo 'error';
}
            