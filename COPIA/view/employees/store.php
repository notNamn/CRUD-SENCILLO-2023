<?php



require_once("c://xampp/htdocs/COPIA/controller/employeesController.php");

// Crea una nueva instancia de la clase `employeesController`.
$obj = new employeesController();
// metodo guardar
$obj->guardar($_POST['LastName'], $_POST['FirstName'],$_POST['BirthDate'], $_POST['Photo'], $_POST['Notes']);

?>
