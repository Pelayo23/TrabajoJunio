<?php
class UsersController {
   
    public function iniciosesion() {
        View::show("login");
    }

    public function validacion() {
        require_once 'Models/ProductosDAO.php';
        $errores = array();
        if (isset($_POST['validacion'])) {
            if (!isset($_POST['Nombre']) || strlen($_POST['Nombre']) == 0) {
                $errores['Nombre'] = "El usuario no puede estar vacío";
            }

            if (!isset($_POST['Contrasena']) || strlen($_POST['Contrasena']) == 0) {
                $errores['Contrasena'] = "La contraseña no puede estar vacía";
            }

            if (empty($errores)) {
                include_once('Models/UsuariosDAO.php');
                $uDAO = new UsuarioDAO();

                $Nombre = $uDAO->getUsuario($_POST['Nombre'], $_POST['Contrasena']);

                if (empty($Nombre)) {
                    $errores['general'] = "El usuario al que intenta acceder no existe";
                    View::show("login", $errores);
                } else {
                    $pDAO = new ProductoDAO();
                    $products = $pDAO->getAllProducts();
                    $pDAO = null;
                    $_SESSION['Nombre'] = $_POST['Nombre'];
                    $_SESSION['rol'] = $Nombre->Rol;
                    $_SESSION['id'] = $Nombre->Id;
                    View::show("showProducts", $products);
                }
            } else {
                View::show("login", $errores);
            }
        }
    }

    public function cerrarsesion() {
        session_destroy();
        View::show("login");
    }
}