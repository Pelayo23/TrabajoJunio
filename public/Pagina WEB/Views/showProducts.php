<style>
        table {
            width: 100%; 
            border-collapse: collapse;
            margin-bottom: 20px; 
        }

        th, td {
            padding: 12px; 
            border: 1px solid #ddd;
            text-align: left; 
        }

        th {
            background-color: #f4f4f4;
            font-weight: bold;
        }

        tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #e0e0e0;
        }

        h1 {
            margin-top: 65px;
            text-align: center;
        }
    </style>
<body>
<div>
    <h1> Listado de productos </h1>
    <table class="table">
        <?php
            foreach ($data as $article){
                if (!empty($_SESSION['Nombre']) && $_SESSION['rol'] == 'admin') {
                echo "<tr><th>Id</th> <th>Nombre</th> <th>Descripcion</th> <th>Precio</th> <th>Borrar</th> </tr>";
                echo "<tr>
                      <td>".$article['Id_prod']."</td>
                      <td>".$article['Nombre_prod']."</td>
                      <td><a href='index.php?controller=ProductsController&action=getProductsID&Id_prod=".$article['Id_prod']." 'class='nav-link' style='color: blue;'>Ver informacion detallada</a></td>
                      <td>".$article['Precio']."</td>
                      <td><a href='index.php?controller=ProductsController&action=borrarProducto&Id_prod=".$article['Id_prod']." 'class='nav-link' style='color: blue;'>Borrar producto</a></td>
                      </tr>"; 
                } else {
                echo "<tr><th>Id</th> <th>Nombre</th> <th>Descripcion</th> <th>Precio</th> <th>Mas...</th></tr>";
                echo "<tr>
                      <td>".$article['Id_prod']."</td>
                      <td>".$article['Nombre_prod']."</td>
                      <td><a href='index.php?controller=ProductsController&action=getProductsID&Id_prod=".$article['Id_prod']." 'class='nav-link' style='color: blue;'>Ver informacion detallada</a></td>
                      <td>".$article['Precio']."</td>
                      <td><a href='index.php?controller=ProductsController&action=añadirProductoCarrito&Id_prod=".$article['Id_prod']." 'class='nav-link' style='color: blue;'>Añadir producto al carrito</a></td>
                      </tr>";  
                }
            }
        ?>
    </table>
</div>
</body>