<?php

class UsernameController {
    private $model;

    public function __construct(){
        require_once("c://xampp/htdocs/COPIA/model/usernameModel.php");
        $this->model = new usernameModel();
    }

    /**
     * Guarda un nuevo usuario en la base de datos y redirige según el resultado.
     *
    */

    // cambiar el id por customer id
    public function guardar($nombre, $contactName, $address, $city, $postalCode, $country) {
        // Inserta el usuario y obtiene el ID del nuevo usuario.
        $id = $this->model->insertar($nombre, $contactName, $address, $city, $postalCode, $country);

        // Redirige según el resultado de la inserción.
        // Redirigir a la página de visualización del usuario actualizado.
        // Redirigir a la página de listado en caso de error.
        return ($id != false) ? header("Location: show.php?id=" . $id) : header("Location: create.php");
    }

    /**
     * Muestra la información de un usuario.
     *
     *  
     * 
     * La información del usuario o redirige a la página de listado.
     */
    public function show($CustomerID) { // id por CustomerID
         return ($this->model->show($CustomerID) != false) ? $this->model->show($CustomerID) : header("Location: index.php");   
    }

    
    // Obtiene la lista de usuarios.
    public function index() {
        return ($this->model->index()) ? $this->model->index() : false;
    }

    /**
     * Actualiza la información de un usuario y redirige según el resultado.
     *
     */
    public function update($CustomerID,$CustomerName, $ContactName,$Address, $City, $PostalCode, $Country) {
        if ($this->model->update($CustomerID, $CustomerName, $ContactName, $Address, $City, $PostalCode, $Country)) {
            
            header("Location: show.php?id=". $CustomerID);
            exit(); 
        } else {
            // "Location: index.php"
            header("Location: show.php?id=". $CustomerID);
            exit(); 
        }   
    }

    /**
     *  $id El ID del usuario a eliminar.
     */
    public function delete($CustomerID) {
        return ($this->model->delete($CustomerID)) ? header("Location: index.php") : header("Location: show.php?id=" . $CustomerID);
    }

}
?>
