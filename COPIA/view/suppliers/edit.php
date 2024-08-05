<?php
    require_once("c://xampp/htdocs/COPIA/view/head/head.php");
    require_once("c://xampp/htdocs/COPIA/controller/suppliersController.php");
    $obj = new suppliersController();
    $user = $obj->show($_GET['id']); // CustomerID id
?>
  <form action="update.php" method="post" >
    <h2>Modificando Registro</h2>
         
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">SupplierID </label>
        <div class="col-sm-10">
            <input type="text" name="SupplierID " readonly class="form-control-plaintext" value="<?= $user[0] ?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">SupplierName</label>
        <div class="col-sm-10">
            <input type="text" name="SupplierName" class="form-control" id="inputPassword" value="<?= $user[1]?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">ContactName</label>
        <div class="col-sm-10"> 
            <input type="text" name="ContactName" class="form-control" id="inputPassword" value="<?= $user[2]?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Address</label>
        <div class="col-sm-10"> 
            <input type="text" name="Address" class="form-control" id="inputPassword" value="<?= $user[3]?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">City</label>
        <div class="col-sm-10"> 
            <input type="text" name="City" class="form-control" id="inputPassword" value="<?= $user[4]?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">PostalCode</label>
        <div class="col-sm-10"> 
            <input type="text" name="PostalCode" class="form-control" id="inputPassword" value="<?= $user[5]?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Country</label>
        <div class="col-sm-10"> 
            <input type="text" name="Country" class="form-control" id="inputPassword" value="<?= $user[6]?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Phone</label>
        <div class="col-sm-10"> 
            <input type="text" name="Phone" class="form-control" id="inputPassword" value="<?= $user[7]?>">
        </div>
    </div>
    
    <div> <!-- BOTON CANCELAR  -->
        <input type="submit" class="btn btn-success" value="Actualizar">
        <a class="btn btn-danger" href="show.php?id=<?= $user[0]?>">Cancelar</a>
    </div>

  </form>
<?php
    require_once("c://xampp/htdocs/COPIA/view/head/footer.php");
?>