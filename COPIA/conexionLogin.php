<?php
if (isset($_POST)) {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    if (empty($usuario)) {
        
        echo '<script>alert("El campo usuario no puede estar vacío.");</script>';
        
    } elseif (empty($contraseña)) {
        
        echo '<script>alert("El campo contraseña no puede estar vacío.");</script>';
        

    } else {
        $conn = mysqli_connect("localhost", "root", "", "w3schools");
        
        $usuario = $_POST["usuario"];
        $contraseña = $_POST["contraseña"];

        $query = "SELECT * FROM administrador WHERE UsuarioAdmi = '$usuario' AND ContraAdmi = '$contraseña'";
        $resultado = mysqli_query($conn, $query);

        if (mysqli_num_rows($resultado) > 0) {
            session_start();
            $_SESSION["loggedin"] = true;
            $_SESSION["usuario"] = $usuario;

            header("Location: root.php");
        } else {
            echo "El usuario o la contraseña no son correctos.";
        }
        mysqli_close($conn);
    }
}
?>



