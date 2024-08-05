<?php
    // CARPETA RAIZ
    require_once("c://xampp/htdocs/COPIA/view/head/head.php");
?>

    <!-- FORMULARIO  -->
    <form action="store.php" method="POST" autocomplete="off">
        <div class="mb-3"> <!-- ProductName  -->
            <label for="exampleInputEmail1" class="form-label" > ProductName </label>
            <input type="text" name="ProductName" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3"> <!-- SupplierID   -->
            <label for="exampleInputEmail1" class="form-label" > SupplierID  </label>
            <input type="text" name="SupplierID" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">  <!-- CategoryID  -->
            <label for="exampleInputEmail1" class="form-label" >CategoryID</label>
            <input type="text" name="CategoryID" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">  <!-- Unit  -->
            <label for="exampleInputEmail1" class="form-label" > Unit </label>
            <input type="text" name="Unit" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">  <!-- Price  -->
            <label for="exampleInputEmail1" class="form-label" > Price </label>
            <input type="text" name="Price" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a class="btn btn-danger" href="index.php">Cancelar</a>
    </form>

<?php
    require_once("c://xampp/htdocs/COPIA/view/head/footer.php");
?>