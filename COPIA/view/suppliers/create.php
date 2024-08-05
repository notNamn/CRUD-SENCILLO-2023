<?php
    // CARPETA RAIZ
    require_once("c://xampp/htdocs/COPIA/view/head/head.php");
?>

    <!-- FORMULARIO  -->
    <form action="store.php" method="POST" autocomplete="off">
        <div class="mb-3"> <!-- SupplierName  -->
            <label for="exampleInputEmail1" class="form-label" > SupplierName </label>
            <input type="text" name="SupplierName" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">  <!-- ContacName -->
            <label for="exampleInputEmail1" class="form-label" >ContacName</label>
            <input type="text" name="ContacName" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">  <!-- direccion  -->
            <label for="exampleInputEmail1" class="form-label" > Adress </label>
            <input type="text" name="Adress" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">  <!-- ciudad  -->
            <label for="exampleInputEmail1" class="form-label" > City </label>
            <input type="text" name="City" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">  <!-- PostalCode  -->
            <label for="exampleInputEmail1" class="form-label" > PostalCode </label>
            <input type="text" name="PostalCode" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">  <!-- pais  -->
            <label for="exampleInputEmail1" class="form-label" > Country </label>
            <input type="text" name="Country" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">  <!-- Phone  -->
            <label for="exampleInputEmail1" class="form-label" > Phone </label>
            <input type="text" name="Phone" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a class="btn btn-danger" href="index.php">Cancelar</a>
    </form>

<?php
    require_once("c://xampp/htdocs/COPIA/view/head/footer.php");
?>