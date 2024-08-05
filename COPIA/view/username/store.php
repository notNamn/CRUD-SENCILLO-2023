<?php

/**
 * Este código muestra cómo insertar un nuevo nombre de usuario en la base de datos.
 */

require_once("c://xampp/htdocs/COPIA/controller/usernameController.php");

// Crea una nueva instancia de la clase `usernameController`.
$obj = new usernameController();

$obj->guardar($_POST['CustomerName'], $_POST['ContacName'],$_POST['Adress'], $_POST['City'], $_POST['PostalCode'], $_POST['Country']);

// El método `guardar()` inserta el nombre de usuario en la base de datos.

?>
