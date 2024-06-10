<?php
session_start();
include_once ("Views/header.php");
include ("Controllers/ProductsController.php");
include ("Controllers/UsersController.php");

if (isset($_REQUEST['action']) && isset($_REQUEST['controller'])) {
    $act = $_REQUEST['action'];
    $cont = $_REQUEST['controller'];

    $controller = new $cont();
    $controller->$act();

} else {
    echo '<div class="container-fluid p-0" style="background-image: url(\'Imagenes/index.jpg\'); background-size: contain; background-repeat: no-repeat; background-position: center; height: 900px; margin-top: 40px;"></div>';
}

require_once ("Views/footer.php");
?>
