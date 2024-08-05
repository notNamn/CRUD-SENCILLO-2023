<?php
    // employees
    require_once("c://xampp/htdocs/COPIA/view/head/head.php");
?>

    
    <form action="store.php" method="POST" autocomplete="off">

        <div class="mb-3"> <!-- LastName  -->
            <label for="exampleInputEmail1" class="form-label" > LastName </label>
            <input type="text" name="LastName" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">  <!-- FirstName  -->
            <label for="exampleInputEmail1" class="form-label" >FirstName</label>
            <input type="text" name="FirstName" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">  <!-- BirthDate  -->
            <label for="exampleInputEmail1" class="form-label" > BirthDate </label>
            <input type="datetime" name="BirthDate" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">  <!-- Photo  -->
            <label for="exampleInputEmail1" class="form-label" > Photo </label>
            <input type="text" name="Photo" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">  <!-- 	Notes  -->
            <label for="exampleInputEmail1" class="form-label" > Notes </label>
            <input type="text" name="Notes" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        
        <a class="btn btn-danger" href="index.php">Cancelar</a>
    </form>

<?php
    require_once("c://xampp/htdocs/COPIA/view/head/footer.php");
?>