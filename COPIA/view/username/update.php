

<?php
    require_once("c://xampp/htdocs/COPIA/controller/usernameController.php");

    $obj = new usernameController();

    
    // Actualizamos los datos del usuario
    $obj->update($_POST['CustomerID'], $_POST['CustomerName'], $_POST['ContactName'], $_POST['Address'], $_POST['City'], $_POST['PostalCode'], $_POST['Country']);

?>

