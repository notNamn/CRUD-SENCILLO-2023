<?php

class productsModel{

    /**
     * La conexión a la base de datos a través de PDO.
     */
    private $PDO;

    public function __construct() {
        
        require_once("c://xampp/htdocs/COPIA/config/db.php");    
        $con = new db();    
        $this->PDO = $con->conexion();
    
    }

    public function insertar($ProductName, $SupplierID , $CategoryID , $Unit, $Price){
        $stament = $this->PDO->prepare("INSERT INTO products VALUES(null,:ProductName, :SupplierID , :CategoryID , :Unit, :Price)");

        $stament->bindParam(":ProductName", $ProductName); 
        $stament->bindParam(":SupplierID ", $SupplierID );
        $stament->bindParam(":CategoryID ", $CategoryID );
        $stament->bindParam(":Unit", $Unit);
        $stament->bindParam(":Price", $Price);

        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }

    // mosyrando unitario
    public function show($ProductID ){
        
        $stament = $this->PDO->prepare("SELECT * FROM products WHERE ProductID  = :ProductID  ");
        $stament->bindParam(":ProductID ", $ProductID ); // posible error
        return ($stament->execute()) ? $stament->fetch() : false; 
    }


    public function index(){
        $stament = $this->PDO->prepare("SELECT * FROM products");
        if ($stament->execute()) {
            return $stament->fetchAll(); 
        } else {
            return false;
        }
    }

    public function update($ProductID , $ProductName, $SupplierID , $CategoryID , $Unit, $Price){
        $statement = $this->PDO->prepare("UPDATE products SET ProductName = :ProductName, SupplierID  = :SupplierID , CategoryID  = :CategoryID , Unit = :Unit, Price = :Price WHERE ProductID   = :ProductID  ");
       
        $statement->bindParam(":ProductName", $ProductName);
        $statement->bindParam(":SupplierID ", $SupplierID );
        $statement->bindParam(":CategoryID ", $CategoryID );
        $statement->bindParam(":Unit", $Unit);
        $statement->bindParam(":Price", $Price);
        $statement->bindParam(":ProductID ", $ProductID );

        return $statement->execute() ? $ProductID  : false;
    }
    
    
    public function delete($ProductID ){
        $stament = $this->PDO->prepare("DELETE FROM products WHERE ProductID  = :ProductID ");
        $stament->bindParam(":ProductID ", $ProductID );
        return ($stament->execute()) ? true : false;
    }
}
?>