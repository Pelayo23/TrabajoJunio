<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        form {
            margin: 25px auto;
            width: 700px;
            height: 700px;
            background-color: #333;
            padding: 30px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
            margin-bottom: 100px;
        }
        #formulario {
            margin-top: 10%;
            display: flex;
            flex-direction: row;
            margin-left: 250px;
        }
        h2 {
            text-align: center;
            color: white;
            margin-bottom: 0px;
        }
        label {
            display: block;
            margin-bottom: 10%;
            color: white;
        }
        #invitado {
            color: blue;
        }
        #invitado:hover {
            color: blue;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid black;
        }
        input[type="submit"] {
            background-color: blue;
            color: black;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-family: Arial, sans-serif;
        }
        input[type="submit"]:hover {
            background-color: blue;
        }

        #img1 {
            width: 300px;
            height: 760px;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
            margin-top: 25px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
        }

    </style>
<body>
    <div id="formulario">
        <div id="container1">
            <img id="img1" src="Imagenes/mj.jpg">
        </div>
        <div id="container2">
            <form action="index.php?controller=ProductsController&action=insertarProducto" method="POST">
                <h2 class="h2">Añadir Producto</h2>
                <label for="Nombre_prod">Nombre del Producto:</label><br>
                <input type="text" id="Nombre_prod" name="Nombre_prod" required><br>

                <label for="Descripcion">Descripción:</label><br>
                <textarea id="Descripcion" name="Descripcion" rows="4" required></textarea><br>

                <label for="Precio">Precio:</label><br>
                <input type="number" id="Precio" name="Precio" step="0.01" min="0" required><br>

                <label for="Imagen">Imagen:</label><br>
                <input type="text" id="Imagen" name="Imagen" required><br><br>

                <input type="submit" value="Añadir Producto"><br><br>
            </form>
        </div>
    </div>
</body>
</html>

