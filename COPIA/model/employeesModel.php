<?php

class employeesModel{

    private $PDO;

    public function __construct() {
        
        require_once("c://xampp/htdocs/COPIA/config/db.php");    
        $con = new db();    
        $this->PDO = $con->conexion();
    
    }

    public function insertar($LastName,$FirstName, $BirthDate, $Photo , $Notes ){
        $stament = $this->PDO->prepare("INSERT INTO employees VALUES(null,:LastName, :FirstName, :BirthDate, :Photo , :Notes)");
        // Vincula los parámetros de la consulta con los valores recibidos.
        $stament->bindParam(":LastName", $LastName);
        $stament->bindParam(":FirstName", $FirstName);
        $stament->bindParam(":BirthDate", $BirthDate);
        $stament->bindParam(":Photo", $Photo );
        $stament->bindParam(":Notes", $Notes);

        // Ejecuta la consulta SQL.
        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }

    
    // Obtiene un usuario especifico de la base de datos.
    public function show($EmployeeID){
        $stament = $this->PDO->prepare("SELECT * FROM employees WHERE EmployeeID = :EmployeeID ");
        $stament->bindParam(":EmployeeID", $EmployeeID); 
        return ($stament->execute()) ? $stament->fetch() : false; 
    }


    // Obtiene todos los usuarios de la base de datos.
    public function index(){
        $stament = $this->PDO->prepare("SELECT * FROM employees");
        if ($stament->execute()) {
            return $stament->fetchAll(); 
        } else {
            return false;
        }
    }

    
    // Actualiza un usuario existente en la base de datos.   
    public function update($EmployeeID, $LastName, $FirstName, $BirthDate, $Photo , $Notes){
        $statement = $this->PDO->prepare("UPDATE employees SET LastName = :LastName, FirstName = :FirstName, BirthDate = :BirthDate, Photo  = :Photo , Notes = :Notes WHERE EmployeeID  = :EmployeeID");

        $statement->bindParam(":LastName", $LastName);
        $statement->bindParam(":FirstName", $FirstName);
        $statement->bindParam(":BirthDate", $BirthDate);
        $statement->bindParam(":Photo ", $Photo );
        $statement->bindParam(":Notes", $Notes);
        $statement->bindParam(":EmployeeID", $EmployeeID);

        return $statement->execute() ? $EmployeeID : false;
    }
    
    
    public function delete($EmployeeID){
        $stament = $this->PDO->prepare("DELETE FROM employees WHERE EmployeeID = :EmployeeID");
        $stament->bindParam(":EmployeeID", $EmployeeID);
        return ($stament->execute()) ? true : false;
    }
}
?>