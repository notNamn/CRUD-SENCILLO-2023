<?php
    // CARPETA RAIZ
    require_once("c://xampp/htdocs/COPIA/view/head/head.php");
?>

    <!-- FORMULARIO  -->
    <form action="store.php" method="POST" autocomplete="off">
        <div class="mb-3"> <!-- nombre  -->
            <label for="exampleInputEmail1" class="form-label" > CustomerName </label>
            <input type="text" name="CustomerName" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">  <!-- nombre de contacto  -->
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

        <div class="mb-3">  <!-- codigo postal  -->
            <label for="exampleInputEmail1" class="form-label" > PostalCode </label>
            <input type="text" name="PostalCode" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">  <!-- pais  -->
            <label for="exampleInputEmail1" class="form-label" > Country </label>
            <input type="text" name="Country" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a class="btn btn-danger" href="index.php">Cancelar</a>
    </form>

<?php
    require_once("c://xampp/htdocs/COPIA/view/head/footer.php");
?>