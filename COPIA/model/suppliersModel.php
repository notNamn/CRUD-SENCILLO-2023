<?php

// supliers
class suppliersModel{

    private $PDO;

    public function __construct() {
        
        require_once("c://xampp/htdocs/COPIA/config/db.php");    
        $con = new db();    
        $this->PDO = $con->conexion();   
    }

    public function insertar($SupplierName, $ContactName, $Address, $City, $PostalCode, $Country, $Phone ){
        $stament = $this->PDO->prepare("INSERT INTO suppliers VALUES(null,:SupplierName, :ContactName, :Address, :City, :PostalCode, :Country, :Phone)");

        $stament->bindParam(":SupplierName", $SupplierName);
        $stament->bindParam(":ContactName", $ContactName);
        $stament->bindParam(":Address", $Address);
        $stament->bindParam(":City", $City);
        $stament->bindParam(":PostalCode", $PostalCode);
        $stament->bindParam(":Country", $Country);
        $stament->bindParam(":Phone", $Phone);

        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }

    // Suppliers especifico
    public function show($SupplierID){
        
        $stament = $this->PDO->prepare("SELECT * FROM suppliers WHERE SupplierID = :SupplierID ");
         // Vincula el valor del parámetro ":id" con el valor de la variable $id
        // SupplierID
         $stament->bindParam(":SupplierID", $SupplierID); // posible error

        return ($stament->execute()) ? $stament->fetch() : false; 
    }

    // obtenrer todos los datos
    public function index(){
        $stament = $this->PDO->prepare("SELECT * FROM suppliers");
        if ($stament->execute()) {
            return $stament->fetchAll(); 
        } else {
            return false;
        }
    }

    // actualizar la base de datos
    public function update($SupplierID, $SupplierName, $ContactName, $Address, $City, $PostalCode, $Country, $Phone){
        $statement = $this->PDO->prepare("UPDATE suppliers SET SupplierName = :SupplierName, ContactName = :ContactName, Address = :Address, City = :City, PostalCode = :PostalCode, Country = :Country, Phone = :Phone WHERE SupplierID  = :SupplierID ");

        $statement->bindParam(":SupplierName", $SupplierName);
        $statement->bindParam(":ContactName", $ContactName);
        $statement->bindParam(":Address", $Address);
        $statement->bindParam(":City", $City);
        $statement->bindParam(":PostalCode", $PostalCode);
        $statement->bindParam(":Country", $Country);
        $statement->bindParam(":Phone", $Phone); 
        $statement->bindParam(":SupplierID", $SupplierID);
        
        return $statement->execute() ? $SupplierID : false;
    }
    
    
    public function delete($SupplierID){
        $stament = $this->PDO->prepare("DELETE FROM suppliers WHERE SupplierID = :SupplierID");
        $stament->bindParam(":SupplierID", $SupplierID);
        return ($stament->execute()) ? true : false;
    }
}
?>