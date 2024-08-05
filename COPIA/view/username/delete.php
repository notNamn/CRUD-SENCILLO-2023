

<?php
require_once("c://xampp/htdocs/COPIA/controller/usernameController.php");

$obj = new usernameController();

// Comprobamos si todos los campos están definidos
if (isset($_GET['id'])) {
    // Actualizamos los datos del usuario
    $obj->delete($_GET['id']);
} else {
    // Mostramos un mensaje de error
    echo "No se han definido todos los campos necesarios.";
}

?>