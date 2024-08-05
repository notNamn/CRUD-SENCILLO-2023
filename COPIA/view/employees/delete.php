<?php
require_once("c://xampp/htdocs/COPIA/controller/employeesController.php");

$obj = new EmployeesController();

if (isset($_GET['id'])) {
    
    $obj->delete($_GET['id']);
} else {
    
    echo "No se han definido todos los campos necesarios.";
}

?>