<?php

class EmployeesController {
    private $model;

    public function __construct(){
        require_once("c://xampp/htdocs/COPIA/model/employeesModel.php");
        $this->model = new employeesModel();
    }

    public function guardar($LastName, $FirstName, $BirthDate, $Photo , $Notes) {
        // Inserta el usuario y obtiene el ID del nuevo usuario.
        $id = $this->model->insertar($LastName, $FirstName, $BirthDate, $Photo , $Notes);

        return ($id != false) ? header("Location: show.php?id=".$id) : header("Location: create.php");
    }

    /**
     * Muestra la información de un usuario.
     */
    public function show($EmployeeID ) { 
         return ($this->model->show($EmployeeID ) != false) ? $this->model->show($EmployeeID ) : header("Location: index.php");   
    }

    
    // Obtiene la lista de usuarios.
    public function index() {
        return ($this->model->index()) ? $this->model->index() : false;
    }

    /**
     * Actualiza la información de un usuario y redirige según el resultado.
     */
    public function update($EmployeeID ,$LastName, $FirstName,$BirthDate, $Photo , $Notes) {
        if ($this->model->update($EmployeeID , $LastName, $FirstName, $BirthDate, $Photo , $Notes)) {
            
            header("Location: show.php?id=".$EmployeeID );
            exit(); 
        } else {
            
            header("Location: show.php?id=".$EmployeeID );
            exit();  
        }   
    }

    /**
     *  $id El ID del usuario a eliminar.
     */
    public function delete($EmployeeID ) {
        return ($this->model->delete($EmployeeID )) ? header("Location: index.php") : header("Location: show.php?id=" . $EmployeeID );
    }

}
?>
