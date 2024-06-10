<?php
include ("Views/View.php");

class ProductsController {

    public function getAllProducts (){
        require_once ("Models/ProductosDAO.php");
        $pDAO=new ProductoDAO();
        $products=$pDAO->getAllProducts();
        $pDAO=null;
        View::show("showProducts", $products);
    }
    
    public function getProductsID (){
        include_once 'Models/ProductosDAO.php';
        if (isset($_GET['Id_prod'])){
            $pDAO=new ProductoDAO();
            $productsId=$pDAO-> getProductsID($_GET['Id_prod']);
            View::show("showProductsId",$productsId);
        }
    }

    public function añadirProductoCarrito (){
        include_once 'Models/ProductosDAO.php';
        if(!isset($_SESSION['carrito'])){
            $_SESSION['carrito'] = array();
        }
        if (isset($_GET['Id_prod'])){
            $productoid = $_GET['Id_prod'];
            if (!in_array($productoid, $_SESSION['carrito'])) {
                array_push($_SESSION['carrito'], $productoid);   
            }  
            $pDAO = new ProductoDAO();
            $products = $pDAO->getAllProducts();
            $pDAO = null;
            View::show("showProducts", $products);
        }
    }

    public function verCarrito() {
        include_once 'Models/ProductosDAO.php';
        $pDAO = new ProductoDAO(); 
        $arrayCarrito = array();
        foreach ($_SESSION['carrito'] as $posicion => $id) {
            $products = $pDAO->getProductsIDcarrito($id); 
            array_push($arrayCarrito, $products);
        }
        View::show("carrito",$arrayCarrito);

    }

    public function addProduct() {
        View::show("addProduct");

    }

    public function insertarProducto() {
        include_once 'Models/ProductosDAO.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $errores = array();
    
            if (empty($_POST['Nombre_prod'])) {
                $errores[] = "El nombre del producto no puede estar vacío";
            }
            if (empty($_POST['Descripcion'])) {
                $errores[] = "La descripción del producto no puede estar vacía";
            }
            if (empty($_POST['Precio'])) {
                $errores[] = "El precio del producto no puede estar vacío";
            }
            if (empty($_POST['Imagen'])) {
                $errores[] = "La imagen del producto no puede estar vacía";
            }
    
            if (!empty($errores)) {
                echo "Error: " . implode(", ", $errores);
                return;
            } else {
                $Nombre = $_POST['Nombre_prod'];
                $Descripcion = $_POST['Descripcion'];
                $Precio = $_POST['Precio'];
                $Imagen = $_POST['Imagen'];
    
                $pDAO = new ProductoDAO();
                $pDAO->insertarProducto($Nombre, $Descripcion, $Precio, $Imagen);
    
                $this->getAllProducts();
                exit();
            }
        }
    } 
    
    public function borrarProducto(){
        include_once 'Models/ProductosDAO.php';
        if (isset($_GET['Id_prod'])){
            $pDAO = new ProductoDAO();
            $products = $pDAO->borrarProducto($_GET['Id_prod']);
            $products = $pDAO->getAllProducts();
            $pDAO = null;
            View::show("showProducts", $products);
        }
    }

    public function eliminarProductoCarrito(){
        if (isset($_GET['Id_prod'])) {
            $idComic = $_GET['Id_prod'];
            $posicion = array_search($idComic, $_SESSION['carrito']);
            if ($posicion !== false) {
                unset($_SESSION['carrito'][$posicion]);
                $_SESSION['carrito'] = array_values($_SESSION['carrito']);
            }
        }
        $this->verCarrito();
    }
}