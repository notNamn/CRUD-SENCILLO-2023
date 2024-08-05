<?php
    require_once("c://xampp/htdocs/COPIA/view/head/head.php");
    require_once("c://xampp/htdocs/COPIA/controller/employeesController.php");
    $obj = new employeesController();
    $user = $obj->show($_GET['id']); 
?>
  <form action="update.php" method="post" >
    <h2>Modificando Registro</h2>
         
    <div class="mb-3 row"> <!--  EmployeeID -->
        <label for="staticEmail" class="col-sm-2 col-form-label">EmployeeID </label>
        <div class="col-sm-10">
            <input type="text" name="EmployeeID" readonly class="form-control-plaintext" value="<?= $user[0] ?>">
        </div>
    </div>

    <div class="mb-3 row"> <!--  LastName -->
        <label for="inputPassword" class="col-sm-2 col-form-label">LastName</label>
        <div class="col-sm-10">
            <input type="text" name="LastName" class="form-control" id="inputPassword" value="<?= $user[1]?>">
        </div>
    </div>

    <div class="mb-3 row"> <!--  FisrtName -->
        <label for="inputPassword" class="col-sm-2 col-form-label">FirstName</label>
        <div class="col-sm-10"> 
            <input type="text" name="FirstName" class="form-control" id="inputPassword" value="<?= $user[2]?>">
        </div>
    </div>

    <div class="mb-3 row"> <!--  BirthDate -->
        <label for="inputPassword" class="col-sm-2 col-form-label">BirthDate</label>
        <div class="col-sm-10"> 
            <input type="text" name="BirthDate" class="form-control" id="inputPassword" value="<?= $user[3]?>">
        </div>
    </div>

    <div class="mb-3 row"> <!--  Photo -->
        <label for="inputPassword" class="col-sm-2 col-form-label">Photo </label>
        <div class="col-sm-10"> 
            <input type="text" name="Photo" class="form-control" id="inputPassword" value="<?= $user[4]?>">
        </div>
    </div>

    <div class="mb-3 row"> <!--  Notes -->
        <label for="inputPassword" class="col-sm-2 col-form-label">Notes</label>
        <div class="col-sm-10"> 
            <input type="text" name="Notes" class="form-control" id="inputPassword" value="<?= $user[5]?>">
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