

<?php
    require_once("c://xampp/htdocs/COPIA/controller/productsController.php");

    $obj = new productsController();

    // Actualizamos los datos del usuario
    $obj->update($_POST['ProductID'], $_POST['ProductName'], $_POST['SupplierID'], $_POST['CategoryID'], $_POST['Unit'], $_POST['Price']);

?>

