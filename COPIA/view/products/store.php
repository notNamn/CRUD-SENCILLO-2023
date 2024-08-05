<?php

require_once("c://xampp/htdocs/COPIA/controller/productsController.php");

// Crea una nueva instancia de la clase `productsController`.
$obj = new productsController();
// por si acaso poner un campo mas falta el id 
// quias por eso no gruada
$obj->guardar($_POST['ProductName'], $_POST['SupplierID'],$_POST['CategoryID'], $_POST['Unit'], $_POST['Price']);


?>
