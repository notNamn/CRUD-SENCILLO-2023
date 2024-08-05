<?php

class suppliersController {
    private $model;

    public function __construct(){
        require_once("c://xampp/htdocs/COPIA/model/suppliersModel.php");
        $this->model = new suppliersModel();
    }


    // cambiar el id por customer id
    public function guardar($SupplierName, $ContactName, $Address, $City, $PostalCode, $Country, $Phone) {
        // Inserta el usuario y obtiene el ID del nuevo usuario.
        $id = $this->model->insertar($SupplierName, $ContactName, $Address, $City, $PostalCode, $Country, $Phone);

        return ($id != false) ? header("Location: show.php?id=" . $id) : header("Location: create.php");
    }

    public function show($SupplierID) { // id por SupplierID
         return ($this->model->show($SupplierID) != false) ? $this->model->show($SupplierID) : header("Location: index.php");   
    }

    
    // Obtiene la lista de usuarios.
    public function index() {
        return ($this->model->index()) ? $this->model->index() : false;
    }

    // actualiza
    public function update($SupplierID, $SupplierName, $ContactName,$Address, $City, $PostalCode, $Country, $Phone) {
        if ($this->model->update($SupplierID, $SupplierName, $ContactName, $Address, $City, $PostalCode, $Country, $Phone)) {
            
            header("Location: show.php?id=". $SupplierID);
            exit(); 
        } else {
            // "Location: index.php"
            header("Location: show.php?id=". $SupplierID);
            exit(); 
        }   
    }

    public function delete($SupplierID) {
        return ($this->model->delete($SupplierID)) ? header("Location: index.php") : header("Location: show.php?id=" . $SupplierID);
    }

}
?>
