<?php
    require_once("c://xampp/htdocs/COPIA/view/head/head.php");
    require_once("c://xampp/htdocs/COPIA/controller/productsController.php");
    $obj = new productsController();
    
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

<table class="table container-fluid">
    <thead> 
        <tr>
            <th scope="col">ProductID</th>
            <th scope="col">ProductName</th>
            <th scope="col">SupplierID</th>
            <th scope="col">CategoryID</th>
            <th scope="col">Unit</th>
            <th scope="col">Price</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="col"><?= $date["ProductID"]?></td>
            <td scope="col"><?= $date["ProductName"]?></td>
            <td scope="col"><?= $date["SupplierID"]?></td>
            <td scope="col"><?= $date["CategoryID"]?></td>
            <td scope="col"><?= $date["Unit"]?></td>
            <td scope="col"><?= $date["Price"]?></td>
        </tr>
    </tbody>
</table>



<?php
    require_once("c://xampp/htdocs/COPIA/view/head/footer.php");
?>