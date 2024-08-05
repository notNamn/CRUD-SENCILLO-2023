<?php
    require_once("c://xampp/htdocs/COPIA/controller/employeesController.php");

    $obj = new employeesController();
 
    // Actualizamos los datos del usuario
    $obj->update($_POST['EmployeeID'], $_POST['LastName'], $_POST['FirstName'], $_POST['BirthDate'], $_POST['Photo'], $_POST['Notes']);

?>

