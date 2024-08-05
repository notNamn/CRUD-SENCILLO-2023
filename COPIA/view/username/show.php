<?php
    require_once("c://xampp/htdocs/COPIA/view/head/head.php");
    require_once("c://xampp/htdocs/COPIA/controller/usernameController.php");
    $obj = new usernameController();
    
    $date = $obj->show($_GET['id']); // CustomerID
?>
<h2 class="text-center">Detalles del registro</h2>
<div class="pb-3">
    <a href="index.php" class="btn btn-primary">Regresar</a>
    <a href="edit.php?id=<?= $date[0]?>" class="btn btn-success">Actualizar</a>
    
    <!-- Button trigger modal -->
    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el registro?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">    

        
            Una vez eliminado no se podra recuperar el registro
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
            <a href="delete.php?id=<?= $date[0]?>" class="btn btn-danger">Eliminar</a>
            <!-- <button type="button" >Eliminar</button> -->
        </div>
        </div>
    </div>
    </div>
</div>
<!--  CustomerName ,  ContactName, Address, City, PostalCode, Country -->
<table class="table container-fluid">
    <thead> 
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">ContactName</th>
            <th scope="col">Address</th>
            <th scope="col">City</th>
            <th scope="col">PostalCode</th>
            <th scope="col">Country</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="col"><?= $date["CustomerID"]?></td>
            <td scope="col"><?= $date["CustomerName"]?></td>
            <td scope="col"><?= $date["ContactName"]?></td>
            <td scope="col"><?= $date["Address"]?></td>
            <td scope="col"><?= $date["City"]?></td>
            <td scope="col"><?= $date["PostalCode"]?></td>
            <td scope="col"><?= $date["Country"]?></td>
        </tr>
    </tbody>
</table>



<?php
    require_once("c://xampp/htdocs/COPIA/view/head/footer.php");
?>