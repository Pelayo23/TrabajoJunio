<?php
require_once 'Database/Database.php';

class UsuarioDAO {
    public $db_con;

    public function __construct() {
        $this->db_con = Database::connect();
    }

    public function getUsuario($Nombre, $Contrasena) {
        $stmt = $this->db_con->prepare("SELECT * FROM usuarios WHERE Nombre=:Nombre AND Contrasena=:Contrasena");
        $stmt->bindParam(':Nombre', $Nombre);
        $stmt->bindParam(':Contrasena', $Contrasena);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}