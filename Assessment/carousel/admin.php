<?php
include 'db.php';
$message = '';

if(isset($_POST['submit'])){
    $id = $_POST['product_id'];
    $name = $_POST['product_name'];
    $price = $_POST['price'];
    $stock = $_POST['stocks'];

    if(isset($_FILES['image'])){
        $imgData = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $sql = "INSERT INTO products (product_id, product_name, price, stocks, product_image) 
                VALUES ('$id', '$name', '$price', '$stock', '$imgData')";
        if($conn->query($sql)){
            header("Location: index.php");
            exit();
        } else {
            $message = "Error: " . $conn->error;
        }
    } else {
        $message = "Please input product info.";
    }
}
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin</title>
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"/>
<style>
body{ 
    font-family: Verdana, sans-serif; 
    background: #f7f7f7; 
    margin: 0;
}

.nav {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    background-color: rgba(213, 154, 154, 1);
    padding: 10px 20px;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
    box-sizing: border-box;
}

.nav-left {
    display: flex;
    align-items: center;
    gap: 15px;
}

.nav-right {
    display: flex;
    align-items: center;
    gap: 10px;
}

.nav a {
    color: white;  
    font-weight: lighter;
    text-decoration: none;
    font-size: 15px;
    margin-right: 20px;
}

.nav a:hover{
    color: rgba(149, 26, 26, 1);  
    transition: 0.3s;
}

.nav input[type="search"] {
    flex: 1;
    max-width: 500px;
    margin: 0 20px;
    padding: 8px 12px;
    border: none;
    border-radius: 15px;
    background-color: rgba(255, 197, 197, 1);
    color: white;
}

.prof{
    width: 40px;
    border-radius: 50px;
}

.cart {
    height: 40px;
    filter: invert();
}

/* Flex layout for form + table */
.admin-wrapper {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: space-between;
    margin: 120px 20px 20px 20px; /* add top margin for fixed nav */
}

.container {
    flex: 1 1 300px;
    background: #fff; 
    padding: 20px; 
    border-radius: 10px; 
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
}

.table-wrapper {
    flex: 2 1 500px;
    overflow-x: auto;
}

h2{
    text-align:center; 
    margin-bottom:20px;
}

.form-control, .btn{
    margin-bottom:15px;
}

button{
    background-color: #f3acc1;
    border:none;
    border-radius:5px;
    padding:5px;
    width: 100px;
}

.message{ 
    text-align:center; 
    color:hotpink;
    margin-bottom:15px; 
}

table{
    width: 100%;
    border-collapse: collapse;
    font-size: 14px;
    background-color: #fff;
}

table th, table td {
  border: 1px solid #000;
  padding: 10px;
  text-align: left;
}

table th{
    background-color:pink;
}

html, body {
    height: 100%;
    display: flex;
    flex-direction: column;
}

main {
    flex: 1 0 auto;
}

.footer {
    flex-shrink: 0;
    background-color: rgba(213, 154, 154, 1);
    color: white;
    text-align: center;
    padding: 15px 0;
}
</style>
</head>
<body>

<nav class="nav">
    <div class="nav-left">
        <a href="#"><strong style="font-size:20px;">MyShop</strong></a>
        <a href="index.php">HOME</a>
        <a href="index.php#shop">SHOP</a>
        <a href="about.php">ABOUT</a>
        <a href="contact.php">CONTACT</a> 
    </div>

    <input type="search" placeholder="⌕ Search products...">

    <div class="nav-right">
        <a href="admin.php"><img src="prof.webp" class="prof"></a>
        <a href="#"><img src="2swy4l4o-removebg-preview.png" class="cart"></a>
    </div>
</nav> 

<main>
<div class="admin-wrapper">

    <!-- Add Product Form -->
    <div class="container">
        <h2>Add Product</h2>

        <form method="POST" enctype="multipart/form-data">
            <input type="number" name="product_id" class="form-control" placeholder="Product ID" readonly>
            <input type="text" name="product_name" class="form-control" placeholder="Product Name" required>
            <input type="number" step="0.01" name="price" class="form-control" placeholder="Price" required>
            <input type="number" name="stocks" class="form-control" placeholder="Stock" required>
            <input type="file" name="image" class="form-control" accept="image/.jpg" required>
            <center><button type="submit" name="submit" class="btn btn-danger w-50">Add Product</button></center>
        </form>
        <?php if($message != '') echo "<p class='message'>{$message}</p>"; ?>
    </div>

    <!-- Products Table -->
    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Stocks</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM products";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>{$row['product_id']}</td>";
                        echo "<td><img src='showImage.php?id={$row['product_id']}' 
                                   style='width:80px; height:80px; object-fit:cover; border-radius:6px;'></td>";
                        echo "<td>{$row['product_name']}</td>";
                        echo "<td>{$row['price']}</td>";
                        echo "<td>{$row['stocks']}</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

</div>
</main>

<footer class="footer">
    © 2026 MyShop. All Rights Reserved.
</footer>

</body>
</html>
