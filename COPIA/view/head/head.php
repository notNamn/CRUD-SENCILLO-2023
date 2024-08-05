<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?php
        echo (empty($_GET['id']))
        ? ((strpos($_SERVER['REQUEST_URI'],'create')) ? "Agregando nuevo usuario" : "Index")
        : ((strpos($_SERVER['REQUEST_URI'],'show')) ? "Detalles del registro ".$_GET['id'] : "Actualizar registro ".$_GET['id'] );
    ?></title>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


  <body>

    <div class="container-fluid bg-dark p-2 mb-3">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <!-- Carpeta raiz   -->
            <a class="navbar-brand" href="/COPIA/root.php">Inicio</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Customers
                        </a>
                        <ul class="dropdown-menu">
                            <!-- Carpeta raiz   -->
                            <li><a class="dropdown-item" href="/COPIA/view/username/index.php"> Tabla de Usuarios </a></li>
                            <li><a class="dropdown-item" href="/COPIA/view/username/create.php">Agregar nuevos usuarios</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="collapse navbar-collapse" id="navbarNavDropdown" >
                <ul class="navbar-nav" >
                    <li class="nav-item dropdown" >
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            employees
                        </a>
                        <ul class="dropdown-menu">
                            <!-- Carpeta raiz   -->
                            <li><a class="dropdown-item" href="/COPIA/view/employees/index.php"> Tabla de Empleados </a></li>
                            <li><a class="dropdown-item" href="/COPIA/view/employees/create.php">Agregar nuevo empleado </a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="collapse navbar-collapse" id="navbarNavDropdown" >
                <ul class="navbar-nav" >
                    <li class="nav-item dropdown" >
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            suppliers
                        </a>
                        <ul class="dropdown-menu">
                            <!-- Carpeta raiz   -->
                            <li><a class="dropdown-item" href="/COPIA/view/suppliers/index.php"> Tabla de proveedores </a></li>
                            <li><a class="dropdown-item" href="/COPIA/view/suppliers/create.php">Agregar nuevo proveedor </a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="collapse navbar-collapse" id="navbarNavDropdown" >
                <ul class="navbar-nav" >
                    <li class="nav-item dropdown" >
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        products
                        </a>
                        <ul class="dropdown-menu">
                            <!-- Carpeta raiz   -->
                            <li><a class="dropdown-item" href="/COPIA/view/products/index.php"> Tabla de Usuarios </a></li>
                            <li><a class="dropdown-item" href="/COPIA/view/products/create.php">Agregar nuevos usuarios</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            
        </div>
    </nav>
    </div>

<div class="container-fluid">

