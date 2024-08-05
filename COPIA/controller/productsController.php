<?php

class productsController {
    private $model;

    public function __construct(){
        require_once("c://xampp/htdocs/COPIA/model/productsModel.php");
        $this->model = new productsModel();
    }

    public function guardar($ProductName, $SupplierID , $CategoryID, $Unit, $Price) {
        // Inserta el usuario y obtiene el ID del nuevo usuario.
        $id = $this->model->insertar($ProductName, $SupplierID , $CategoryID, $Unit, $Price);

        return ($id != false) ? header("Location: show.php?id=" . $id) : header("Location: create.php");
    }

    public function show($ProductID) { // id por ProductID
         return ($this->model->show($ProductID) != false) ? $this->model->show($ProductID) : header("Location: index.php");   
    }

    // Obtiene la lista de usuarios.
    public function index() {
        return ($this->model->index()) ? $this->model->index() : false;
    }

    // actualiza informacion
    public function update($ProductID,$CustomerName, $SupplierID ,$CategoryID, $Unit, $Price) {
        if ($this->model->update($ProductID, $CustomerName, $SupplierID , $CategoryID, $Unit, $Price)) {
            
            header("Location: show.php?id=". $ProductID);
            exit(); 
        } else {
            // "Location: index.php"
            header("Location: show.php?id=". $ProductID);
            exit(); 
        }   
    }

    // eliminar 
    public function delete($ProductID) {
        return ($this->model->delete($ProductID)) ? header("Location: index.php") : header("Location: show.php?id=" . $ProductID);
    }

}
?>
