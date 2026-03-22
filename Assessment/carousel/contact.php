<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact</title>
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"/>
<style>
/* ===== NAVIGATION ===== */
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

/* ===== BODY ===== */
body {
    font-family: Verdana, sans-serif;
    background: #f7f7f7;
    margin: 0;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

main {
    flex: 1 0 auto;
    margin-top: 120px;
    padding: 20px;
}

/*FLEX LAYOUT*/
.contact-wrapper {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: space-between;
}

.form {
    flex: 1 1 350px;
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
}

.info {
    flex: 2 1 500px;
    background-color: rgb(242, 213, 213);
    padding: 40px;
    color: rgb(120, 67, 67);
    font-family: georgia;
    border-radius: 10px;
}

h3, h1, h3 {
    margin-bottom: 15px;
}

.form-control, .btn {
    margin-bottom: 10px;
}

button {
    background-color: #f3acc1;
    border: none;
    border-radius: 5px;
    padding: 8px;
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
    <div class="contact-wrapper">
        <!-- Contact Form -->
        <div class="form">
            <h3>CONTACT FORM</h3>
            <form method="POST" enctype="multipart/form-data">
                First name: <input type="text" name="fname" class="form-control" required>
                Last name: <input type="text" name="lname" class="form-control" required>
                Email: <input type="text" name="email" class="form-control" required>
                Message: <textarea name="message" class="form-control" required></textarea>
                <center><button type="submit" name="submit" class="btn btn-danger w-50">SEND</button></center>
            </form>
        </div>

        <!-- Info Box -->
        <div class="info">
            <h1>Get in touch</h1>
            <h3>I'd like to hear from you!</h3>
            <p>If you have any inquiries or concerns, please use the contact form.</p>
            <p>Thank you!</p>
            <p>Email: <a href="mailto:MyShop@gmail.com">MyShop@gmail.com</a></p>
        </div>
    </div>
</main>

<footer class="footer">
    © 2026 MyShop. All Rights Reserved.
</footer>
</body>
</html>
