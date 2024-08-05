<?php

require_once("c://xampp/htdocs/COPIA/controller/suppliersController.php");

// Crea una nueva instancia de la clase `suppliersController`.
$obj = new suppliersController();

$obj->guardar($_POST['SupplierID'], $_POST['SupplierName'],$_POST['Adress'], $_POST['City'], $_POST['PostalCode'], $_POST['Country'],$_POST['Phone']);

// El método `guardar()` inserta el nombre de usuario en la base de datos.

?>
