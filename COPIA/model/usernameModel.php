<?php

/**
 * Esta clase modela los CustomerNames de usuario en la base de datos.
 */
class usernameModel{

    /**
     * La conexión a la base de datos a través de PDO.
     *
     */
    private $PDO;

    /**
     * Constructor de la clase. Se establece la conexión a la base de datos.
     */
    public function __construct() {
        
        // Importa el archivo con la configuración de la base de datos.
        require_once("c://xampp/htdocs/COPIA/config/db.php");    
        // Crea una instancia de la clase `db` que maneja la conexión a la base de datos.
        $con = new db();    
        // Obtiene la conexión a la base de datos creada por la instancia de `db`.
        $this->PDO = $con->conexion();
    
    }

    
    /**
     * Inserta un nuevo CustomerName de usuario en la base de datos.
     */
        // CustomerName
     // CustomerName ,  ContacName, Adress, City, PostalCode, Country
    public function insertar($CustomerName, $ContactName, $Address, $City, $PostalCode, $Country ){
        // Prepara la consulta SQL para insertar un nuevo cliente.
        $stament = $this->PDO->prepare("INSERT INTO customers VALUES(null,:CustomerName, :ContactName, :Address, :City, :PostalCode, :Country)");
        // Vincula los parámetros de la consulta con los valores recibidos.
        $stament->bindParam(":CustomerName", $CustomerName);
        $stament->bindParam(":ContactName", $ContactName);
        $stament->bindParam(":Address", $Address);
        $stament->bindParam(":City", $City);
        $stament->bindParam(":PostalCode", $PostalCode);
        $stament->bindParam(":Country", $Country);

        // Ejecuta la consulta SQL.
        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }

    /**
     * Obtiene un usuario especifico de la base de datos.
     *
     */
    public function show($CustomerID){
        // Prepara la consulta SQL para seleccionar todos los datos del cliente con el ID indicado
        
        $stament = $this->PDO->prepare("SELECT * FROM customers WHERE CustomerID = :CustomerID ");
         // Vincula el valor del parámetro ":id" con el valor de la variable $id
        $stament->bindParam(":CustomerID", $CustomerID); // posible error
        // Si la ejecución es exitosa, obtiene la fila de resultados (el cliente)
        return ($stament->execute()) ? $stament->fetch() : false; // fechAll
    }

    /**
     * Obtiene todos los usuarios de la base de datos.
     *
    */

    public function index(){
        $stament = $this->PDO->prepare("SELECT * FROM customers");
        if ($stament->execute()) {
            // Si la consulta se ejecuta correctamente, devuelve el ID del nuevo cliente insertado.
            return $stament->fetchAll(); 
        } else {
            // Si la consulta falla, devuelve false.
            return false;
        }
    }

    /**
     * Actualiza un usuario existente en la base de datos.
     *
     */
    // customID es para que se guarden los cambios
    public function update($CustomerID, $CustomerName, $ContactName, $Address, $City, $PostalCode, $Country){
        $statement = $this->PDO->prepare("UPDATE customers SET CustomerName = :CustomerName, ContactName = :ContactName, Address = :Address, City = :City, PostalCode = :PostalCode, Country = :Country WHERE CustomerID  = :CustomerID ");
        
        // De aca copiar para lo demas
        $statement->bindParam(":CustomerName", $CustomerName);
        $statement->bindParam(":ContactName", $ContactName);
        $statement->bindParam(":Address", $Address);
        $statement->bindParam(":City", $City);
        $statement->bindParam(":PostalCode", $PostalCode);
        $statement->bindParam(":Country", $Country);
        $statement->bindParam(":CustomerID", $CustomerID);

        return $statement->execute() ? $CustomerID : false;
    }
    
    
    public function delete($CustomerID){
        $stament = $this->PDO->prepare("DELETE FROM customers WHERE CustomerID = :CustomerID");
        $stament->bindParam(":CustomerID", $CustomerID);
        return ($stament->execute()) ? true : false;
    }
}
?>