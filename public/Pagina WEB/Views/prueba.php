<!DOCTYPE html>
<html>
<head>
    <style>
        /* Estilos para el contenedor */
        .container {
            border: 2px solid black; /* Borde negro para el contenedor */
            padding: 20px;
            display: flex; /* Usa flexbox para el diseño */
            justify-content: space-between; /* Distribuye el espacio entre las dos columnas */
            max-width: 800px; /* Ajusta el tamaño máximo según tus necesidades */
            margin: 0 auto; /* Centra el contenedor */
            border-radius: 20px;
            background-color: #333; /* Fondo blanco */
        }

        /* Estilos para la imagen grande */
        .large-image {
            width: 300px; /* Ajusta el ancho de la imagen según tus necesidades */
            height: auto;
        }

        /* Estilos para el contenedor de texto */
        .text-container {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            flex-grow: 1; /* Hace que el contenedor de texto ocupe el espacio restante */
            padding-right: 20px;
            color: white; /* Letras en negro */
        }

        /* Estilos para los rectángulos */
        .rectangle-container {
            display: flex; /* Flexbox para organizar los rectángulos */
            gap: 5px; /* Espacio entre rectángulos */
            margin-top: 5px; /* Margen superior para separar los rectángulos del texto */
        }

        .rectangle {
            width: 40px; /* Ancho de cada rectángulo */
            height: 20px; /* Altura de cada rectángulo */
            background-color: white; /* Fondo blanco de los rectángulos */
            border: 1px solid #ccc; /* Borde de los rectángulos */
            border-radius: 10px; /* Redondea los bordes de los rectángulos */
            cursor: pointer; /* Cursor cambia a una mano al pasar sobre los rectángulos */
            color: black; /* Color de texto en negro */
            text-align: center;
        }

        .rectangle:hover {
            background-color: #f0f0f0; /* Color de fondo al pasar sobre los rectángulos */
        }
    </style>
</head>
<body>

    <!-- Contenedor principal -->
    <div class="container">
        <!-- Contenedor de texto a la izquierda -->
        <div class="text-container">
            <!-- Textos normales -->
            <p>Texto 1</p>
            <p>Texto 2</p>
            
            <!-- Texto 3 con rectángulos para seleccionar -->
            <p>Texto 3</p>
            <div class="rectangle-container">
                <!-- Rectángulos para seleccionar -->
                <div class="rectangle">XS</div>
                <div class="rectangle">S</div>
                <div class="rectangle">M</div>
                <div class="rectangle">L</div>
                <div class="rectangle">XL</div>
            </div>
            
            <p>Texto 4</p>
        </div>

        <!-- Imagen grande a la derecha -->
        <img src="../Imagenes/camiseta1.jpg" class="large-image">
    </div>

</body>
</html>
