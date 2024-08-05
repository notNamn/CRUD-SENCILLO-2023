<?php
    require_once("c://xampp/htdocs/COPIA/controller/suppliersController.php");

    $obj = new suppliersController();

    
    // Actualizamos los datos del usuario
    $obj->update($_POST['SupplierID'], $_POST['SupplierName'], $_POST['ContactName'], $_POST['Address'], $_POST['City'], $_POST['PostalCode'], $_POST['Country'], $_POST['Phone']);

?>