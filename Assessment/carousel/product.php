<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST"){

    $product_id   = $_POST["product_id"];
    $product_name = $_POST["product_name"];
    $price        = $_POST["price"];
    $total_order  = $_POST["total_order"];
    $total_price  = $_POST["total_price"];

    // Get current stock
    $sql_stock = "SELECT stocks FROM products WHERE product_id='$product_id'";
    $result_stock = mysqli_query($conn, $sql_stock);
    $row_stock = mysqli_fetch_assoc($result_stock);
    $current_stock = $row_stock["stocks"];

    if ($total_order > $current_stock) {
        echo "<script>
                alert('Order exceeds available stock!');
                window.history.back();
              </script>";
        exit;
    }

    // Insert order
    $sql_insert = "INSERT INTO orders (product_id, product_name, price, quantity, total)
                   VALUES ('$product_id','$product_name','$price','$total_order','$total_price')";

    if (mysqli_query($conn, $sql_insert)) {

        // Update stock
        $new_stock = $current_stock - $total_order;
        $sql_update = "UPDATE products SET stocks='$new_stock' WHERE product_id='$product_id'";
        mysqli_query($conn, $sql_update);

        //SUCCESS MESSAGE + REDIRECT
        echo "<script>
                alert('Order placed successfully!');
                window.location.href = 'index.php';
              </script>";
        exit;

    } else {
        echo "<script>
                alert('Something went wrong!');
              </script>";
    }
} 
?>