
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tienda de camisetas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: auto;
            background-color: #333
        }

        header {
            background-color: #333;
            padding: 20px 0;
            border-bottom: 1px solid #ddd;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        header a.logo {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            margin-right: auto;
            margin-left: 20px;
            text-decoration: none;
            color: #212529;
        }

        header a.logo img {
            height: 50px;
            width: 40px;
            margin-right: 10px;
            border-radius: 10px;
        }

        header nav {
            display: flex;
            align-items: center;
            margin-left: auto;
            margin-right: 20px;
        }

        header nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            align-items: center;
        }

        header nav ul li {
            margin-right: 20px;
        }

        header nav ul li:last-child {
            margin-right: 0;
        }

        header nav ul li a {
            text-decoration: none;
            color: black;
            padding: 5px 10px;
            border-radius: 5px;
            display: inline-block;
        }

        header nav ul li a:hover {
            background-color: #cce5ff;
            color: white; 
        }

        header nav ul li.active a {
            background-color: blue;
            color: #fff;
        }

        .carrito {
            width: 40px;
            height: 40px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <header>
        <a href="index.php" class="logo">
            <span><img src="Imagenes/logo.png" alt="Icono"></span>
        </a>
        <nav>
            <ul class="nav nav-pills">
            <?php
                if (!empty($_SESSION['Nombre']) && $_SESSION['rol'] == 'admin') {
                    echo '<li class="nav-item"><a href="index.php?controller=ProductsController&action=getAllProducts" class="nav-link" style="background-color: blue">Listar Productos</a></li>
                          <li class="nav-item"><a href="index.php?controller=Productscontroller&action=addProduct" class="nav-link" style="background-color: blue";">Añadir Producto</a></li>
                          <li class="nav-item"><a href="index.php?controller=UsersController&action=cerrarsesion" class="nav-link active" aria-current="page" style="background-color: blue">Cerrar Sesion</a></li>';
                } elseif (!empty($_SESSION['Nombre']) && $_SESSION['rol'] == 'usuario') {
                    echo '<li class="nav-item"><a href="index.php?controller=ProductsController&action=getAllProducts" class="nav-link" style="background-color: blue">Listar Productos</a></li>
                          <li class="nav-item"><a href="index.php?controller=UsersController&action=cerrarsesion" class="nav-link active" aria-current="page" style="background-color: blue">Cerrar Sesion</a></li>
                          <li class="nav-item"><a href="index.php?controller=ProductsController&action=verCarrito" target="_blank">
                              <img src="Imagenes/carrito.png" class="carrito">
                          </a></li>';
                } else {
                    echo '<li class="nav-item"><a href="index.php?controller=ProductsController&action=getAllProducts" class="nav-link" style="background-color: blue">Listar Productos</a></li>
                          <li class="nav-item"><a href="index.php?controller=UsersController&action=iniciosesion" class="nav-link" style="background-color: blue;">Iniciar Sesión</a></li>
                          <li class="nav-item"><a href="index.php?controller=ProductsController&action=verCarrito" target="_blank">
                              <img src="Imagenes/carrito.png" class="carrito">
                          </a></li>';
                }
            ?>
            </ul>
        </nav>
    </header>
</div>
</body>
</html>
