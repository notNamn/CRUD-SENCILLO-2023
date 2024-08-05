
<?php
require_once("c://xampp/htdocs/COPIA/controller/productsController.php");

$obj = new productsController();

if (isset($_GET['id'])) {
    // Actualizamos los datos del usuario
    $obj->delete($_GET['id']);
} else {

    echo "No se han definido todos los campos necesarios.";
}

?>