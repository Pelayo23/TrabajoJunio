<style>
.shopping-cart {
    width: 70%;
    margin: 20px auto;
    border: 1px solid #ccc;
    border-radius: 8px;
    padding: 20px;
    background-color: #333;
    margin-top: 70px;
}

.shopping-cart h2 {
    text-align: center;
    margin-bottom: 20px;
    color: white;
}

.cart-items {
    margin-bottom: 20px;
}

.cart-item {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
    border-bottom: 1px solid #ccc;
    padding-bottom: 10px;
}

.product-image {
    width: 80px;
    height: 80px;
    margin-right: 20px;
    border-radius: 4px;
}

.item-details {
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}

.product-name, .product-price {
    margin: 5px 0;
    color: white;
    margin-left: 10px;
}

.remove-btn {
    background-color: #e74c3c;
    color: white;
    border: none;
    border-radius: 4px;
    padding: 5px 10px;
    cursor: pointer;
    margin-left: auto;
}

.remove-btn:hover {
    background-color: #c0392b;
}

.cart-summary {
    text-align: center;
    color: white;
}

.checkout-btn {
    background-color: #2ecc71;
    color: white;
    border: none;
    border-radius: 4px;
    padding: 10px 20px;
    cursor: pointer;
}

.checkout-btn:hover {
    background-color: #27ae60;
}


</style>
<div class="shopping-cart">
    <h2>Carrito de la compra</h2>
    <?php
        $total = 0;
        if (!empty($_SESSION['carrito'])) {
        echo "<div class='cart-items'>";
        foreach ($data as $article) {
            $imagen = 'Imagenes/' . $article['Imagen'];
    
            echo "<div class='cart-item'>";
            echo "<img src='$imagen' class='large-image' alt='Imagen del producto'>";
    
            echo "<div class='item-details'>";
            echo "<p class='product-name'>  ".$article['Nombre_prod']."</p>";
            echo "<p class='product-price'>  Precio:".$article['Precio']."</p>";
            echo "<button class='remove-btn' onclick=\"window.location.href='index.php?controller=ProductsController&action=eliminarProductoCarrito&Id_prod=" . $article['Id_prod'] . "'\">Eliminar</button>";
            echo "</div>";
            echo "</div>";
        $total += $article['Precio'];
        }

    echo "</div>";

    echo "<div class='cart-summary'>";
    echo "<p>Total:" .$total."</p>";
    echo "<button class='checkout-btn'>Pagar</button>";
    echo "</div>";
} else {
    echo "<div class='alert alert-danger'><p style='text-align: center;'>El carrito está vacío</p></div>";
}
    ?>
</div>
<?php
?>