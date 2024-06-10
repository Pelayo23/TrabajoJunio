<?php
include_once ('Database/Database.php');

class ProductoDAO {

    public $db_con;

    public function __construct (){
        $this->db_con=Database::connect();
    }

    public function getAllProducts(){
        $stmt= $this->db_con->prepare("Select * from productos");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function getProductsID($id){
        $stmt= $this->db_con->prepare("Select * from productos where Id_prod= :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function getProductsIDcarrito($id){
        $stmt= $this->db_con->prepare("Select * from productos where Id_prod= :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $stmt->execute();

        return $stmt->fetch();
    }

    public function insertarProducto($Nombre_prod, $Descripcion, $Precio, $Imagen) {
        $stmt = $this->db_con->prepare("INSERT INTO productos (Nombre_prod, Descripcion, Precio, Imagen) VALUES (:Nombre_prod, :Descripcion, :Precio, :Imagen)");
        
        $stmt->bindParam(':Nombre_prod', $Nombre_prod);
        $stmt->bindParam(':Descripcion', $Descripcion);
        $stmt->bindParam(':Precio', $Precio);
        $stmt->bindParam(':Imagen', $Imagen);

        try {
            return $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function borrarProducto($id) {
        $stmt = $this->db_con->prepare("DELETE FROM productos WHERE Id_prod = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        return $stmt->fetch();
    }
}