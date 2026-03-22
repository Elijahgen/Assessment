<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <style>
.nav {
    display: flex;
    align-items: center;
    justify-content: space-between; /* space between left, search, and right */
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
    gap: 15px; /* spacing between links */ 
}

.nav-right {
    display: flex;
    align-items: center;
    gap: 10px; /* spacing between profile and cart */
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


/* make search box flexible */
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

.one{
    background-color: rgb(242, 213, 213);
    width:100%;
    height:auto;
    padding:80px;
    color:rgb(120, 67, 67);
    font-family:georgia;
    float:left;
}

html, body {
    height: 100%;
}

body {
    margin: 0;
    display: flex;
    flex-direction: column;
    font-family: Verdana, sans-serif; 
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
        <a href=" index.php #shop">SHOP</a>
        <a href="about.php">ABOUT</a>
        <a href="contact.php">CONTACT</a> 
    </div>

    <input type="search" placeholder="⌕ Search products...">

    <div class="nav-right">
        <a href="admin.php"><img src="prof.webp" class="prof"></a>
        <a href="#"><img src="2swy4l4o-removebg-preview.png" class="cart"></a>
    </div>
</nav>
<br><br><br><br>
<main>
    <div style="width:90%; margin:30px auto;">

        <!-- Greeting -->
        <div style="background:#fce4e4; padding:30px; border-radius:10px; margin-bottom:20px; color:#7a1e1e;">
            <h1>ABOUT US</h1>
            <h2>Greetings!</h2>
            <p>
                MyShop is a website where fashion meets budget — a collection of affordable and pre-loved women's clothes, ranging from summer dresses to elegant floor-length gowns. We believe that style should be accessible to everyone, without compromising on quality or comfort.
            </p>
        </div>

        <!-- Mission -->
        <div style="background:#f9d6d6; padding:30px; border-radius:10px; margin-bottom:20px; color:#7a1e1e;">
            <h2>Our Mission</h2>
            <p>
                At MyShop, our mission is to empower women to express themselves through fashion. We curate trendy, timeless, and versatile pieces that make every occasion special, from casual day-outs to evening parties. Every item is carefully selected to ensure our customers feel confident and stylish.
            </p>
        </div>

        <!-- Why Choose Us -->
        <div style="background:#fce4e4; padding:30px; border-radius:10px; margin-bottom:20px; color:#7a1e1e;">
            <h2>Why Choose Us?</h2>
            <ul style="line-height:1.8;">
                <li>Affordable pricing without sacrificing quality.</li>
                <li>A curated collection of stylish and pre-loved clothes.</li>
                <li>Eco-friendly approach — giving pre-loved clothing a second life.</li>
                <li>Excellent customer service and fast delivery.</li>
                <li>Sizes and styles for every woman and every occasion.</li>
            </ul>
        </div>

        <!-- Community -->
        <div style="background:#f9d6d6; padding:30px; border-radius:10px; margin-bottom:20px; color:#7a1e1e;">
            <h2>Join Our Community</h2>
            <p>
                MyShop is more than a store — it's a community of fashion lovers who value style, sustainability, and self-expression. Follow us on social media to stay updated on our latest collections, special offers, and styling tips.
            </p>
            <p style="margin-top:20px;">
                Thank you for choosing MyShop — where every piece tells a story, and every customer is part of our journey.
            </p>
        </div>

    </div>
</main>

<footer class="footer">
    © 2026 MyShop. All Rights Reserved.
</footer>

</body>
</html>