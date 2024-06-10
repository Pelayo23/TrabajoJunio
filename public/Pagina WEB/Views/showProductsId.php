<style>
    .container1 {
    max-width: 800px;
    margin: 0 auto;
    border-radius: 20px;
    background-color: #333;
    padding: 20px;
    margin-top: 70px;
}

h1 {
    text-align: center;
    color: white;
    margin-bottom: 20px;
}

.content {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
}

.text-container1 {
    color: white;
    max-width: 60%;
}

.large-image {
    width: 300px;
    height: auto;
    margin-left: 20px;
}

.rectangle-container {
    display: flex;
    gap: 5px;
    margin-top: 5px;
}

.rectangle {
    width: 40px;
    height: 20px;
    background-color: white;
    border: 1px solid #ccc;
    border-radius: 10px;
    cursor: pointer;
    color: black; 
    text-align: center;
}

.rectangle:hover {
    background-color: #f0f0f0;
}

</style>
</head>
<body>
<div class="container1">
    <h1>Información del producto</h1>
    <div class="content">
    <?php
        foreach ($data as $article) {
            echo "<div class='text-container1'>
                    <p>".$article['Nombre_prod']."</p>
                    <br>
                    <p>".$article['Descripcion']."</p>
                    <br>
                    <p>Tallas:</p>
                    <div class='rectangle-container'>
                        <div class='rectangle'>XS</div>
                        <div class='rectangle'>S</div>
                        <div class='rectangle'>M</div>
                        <div class='rectangle'>L</div>
                        <div class='rectangle'>XL</div>
                    </div>
                    <br>
                    <p>Precio: ".$article['Precio']." $</p>
                  </div>";
            $imagen = 'Imagenes/' . $article['Imagen'];
            echo '<img src="' . $imagen . '" class="large-image">';
        }
    ?>
    </div>
</div>
</body>
</html>
