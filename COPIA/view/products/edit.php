<?php
    require_once("c://xampp/htdocs/COPIA/view/head/head.php");
    require_once("c://xampp/htdocs/COPIA/controller/productsController.php");
    $obj = new productsController();
    $user = $obj->show($_GET['id']); // ProductID id
?>
  <form action="update.php" method="post" >
    <h2>Modificando Registro</h2>
         
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">ProductID</label>
        <div class="col-sm-10">
            <input type="text" name="ProductID" readonly class="form-control-plaintext" value="<?= $user[0] ?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">ProductName</label>
        <div class="col-sm-10">
            <input type="text" name="ProductName" class="form-control" id="inputPassword" value="<?= $user[1]?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">SupplierID</label>
        <div class="col-sm-10"> 
            <input type="text" name="SupplierID" class="form-control" id="inputPassword" value="<?= $user[2]?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">CategoryID</label>
        <div class="col-sm-10"> 
            <input type="text" name="CategoryID" class="form-control" id="inputPassword" value="<?= $user[3]?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Unit</label>
        <div class="col-sm-10"> 
            <input type="text" name="Unit" class="form-control" id="inputPassword" value="<?= $user[4]?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Price</label>
        <div class="col-sm-10"> 
            <input type="text" name="Price" class="form-control" id="inputPassword" value="<?= $user[5]?>">
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