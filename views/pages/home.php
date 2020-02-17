<?php
    foreach ($products as $product) {
        echo "<a href='index.php/?controller=products&action=detail&id=$product->id'>".$product->name."</a><br>";
    }
?>
