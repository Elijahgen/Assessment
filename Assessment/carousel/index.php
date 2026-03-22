<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>E-Commerce</title>

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"/>
<link href="carousel.css" rel="stylesheet">

<style>
*{
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  margin: 0;
  padding:0;
}


/* NAV */
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
    color: rgb(173, 44, 44);  
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
/* PRODUCTS */
.product-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:20px;
    width:90%;
    margin:120px auto 0;
}

.product-card{
    background:#fff;
    border-radius:12px;
    box-shadow:0 0 15px rgba(0,0,0,0.4);
    padding:20px;
}

.product-img-holder{
    height:200px;   /* taller = more dress visible */
    
}

.product-img-holder img{
    width:100%;
    height:100%;
    object-fit:cover;
    background:#fff;
}

.featured .product-grid {
    justify-content: center;
}


.btn-group {
    display: flex;
    gap: 10px;
}

.btn-group button {
    flex: 1;
    padding: 10px 0;
    border-radius: 12px;
}

button.add{ background:brown;color:white; }
button.buy{ background:orange;color:white; }

/* BASIC FOOTER */
html, body {
    height: 100%;
}

body {
    margin: 0;
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

<!-- ================= NAV ================= -->
 <nav class="nav">
    <div class="nav-left">
        <a href="#"><strong style="font-size:20px;">MyShop</strong></a>
        <a href="index.php">HOME</a>
        <a href="#shop">SHOP</a>
        <a href="about.php ">ABOUT</a>
        <a href="contact.php">CONTACT</a> 
    </div>

    <input type="search" placeholder="⌕ Search products...">

    <div class="nav-right">
        <a href="admin.php"><img src="prof.webp" class="prof"></a>
        <a href="#"><img src="2swy4l4o-removebg-preview.png" class="cart"></a>
    </div>
</nav>

<main>
 <!-- CAROUSEL -->
<section>
  <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <!-- Carousel items 
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://static.vecteezy.com/system/resources/thumbnails/023/801/921/small_2x/various-women-fashion-clothes-hanging-on-rack-ai-generative-photo.jpg" class="d-block w-100" alt="Slide 1">
      </div>
      <div class="carousel-item">
        <img src="https://images.hdqwalls.com/download/blue-eye-girl-5k-ww-3440x1440.jpg" class="d-block w-100" alt="Slide 2">
      </div>
      <div class="carousel-item">
        <img src="https://i.dailymail.co.uk/1s/2024/03/17/00/82554885-0-image-a-19_1710637133741.jpg" class="d-block w-100" alt="Slide 3">
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
    
  </div>-->

  <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#myCarousel"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#myCarousel"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#myCarousel"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>

        <div class="carousel-inner">
  <div class="carousel-item active">
    <img src="https://static.vecteezy.com/system/resources/thumbnails/023/801/921/small_2x/various-women-fashion-clothes-hanging-on-rack-ai-generative-photo.jpg" 
         class="d-block" 
         width="100%" 
         alt="Slide 1">
  </div>

  <div class="carousel-item">
    <img src="https://images.hdqwalls.com/download/blue-eye-girl-5k-ww-3440x1440.jpg" 
         class="d-block" 
         width="100%" 
         alt="Slide 2">
  </div>

  <div class="carousel-item">
    <img src="https://i.dailymail.co.uk/1s/2024/03/17/00/82554885-0-image-a-19_1710637133741.jpg" 
         class="d-block" 
         width="100%" 
         alt="Slide 3">
  </div>
</div>


        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#myCarousel"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#myCarousel"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</section>

<!-- PRODUCT PREVIEW 
<section class="featured" style="width:90%; margin:30px auto; margin-top:20px;">
  <h2 style="margin-bottom:20px; color:#7a1e1e; text-align:center; text-transform:uppercase;">
    FEATURED PRODUCTS
  </h2>

  <div class="product-grid">
    <div class="product-card">
      <div class="product-img-holder">
        <img src="images/whiteDress.jpg" alt="White Dress">
      </div>
    </div>

    <div class="product-card">
      <div class="product-img-holder">
        <img src="images/yellowDress.jpg" alt="Yellow Dress">
      </div>
    </div>

    <div class="product-card">
      <div class="product-img-holder">
        <img src="images/blackDress.jpg" alt="Black Dress">
      </div>
    </div>
  </div>
</section>-->

<!-- PRODUCTS -->

<?php
include 'db.php';
$result = $conn->query("SELECT * FROM products");
?>
<div class="product-grid" id="shop">
<?php while($product = $result->fetch_assoc()) { ?>
  <div class="product-card">
    <div class="product-img-holder">
      <img src="showImage.php?id=<?php echo $product['product_id']; ?>">
    </div>
    <p><strong>ID:</strong> <?php echo $product['product_id']; ?></p>
    <p><strong>Name:</strong> <?php echo $product['product_name']; ?></p>
    <p><strong>Price:</strong> ₱<?php echo number_format($product['price'],2); ?></p>
    <p><strong>Stock:</strong> <?php echo $product['stocks']; ?></p>

    <div class="btn-group">
      <button class="add" onclick="addToCart()">Add to Cart</button>
      <button class="buy" onclick="openModal(
        '<?php echo $product['product_id']; ?>',
        '<?php echo $product['product_name']; ?>',
        '<?php echo $product['price']; ?>',
        '<?php echo $product['stocks']; ?>'
      )">Buy Now</button>
    </div>
  </div>
<?php } ?>
</div>

<!-- MODAL -->
<div class="modal fade" id="productModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <form method="POST" action="product.php">
        <div class="modal-header">
          <h5 class="modal-title">CONFIRM ORDER</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">
          <input type="hidden" name="product_id" id="modalProductId">
          <input type="hidden" name="product_name" id="modalProductNameInput">
          <input type="hidden" name="price" id="modalPrice">
          <input type="hidden" name="total_price" id="modalTotal">

          <div class="text-center mb-3">
            <img id="modalProductImage" style="max-width:200px;border-radius:10px;">
          </div>

          <table class="table table-bordered text-center">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Stock</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td id="modalProductIdText"></td>
                <td id="modalProductNameText"></td>
                <td>₱<span id="modalProductPriceText"></span></td>
                <td id="modalStockText"></td>
              </tr>
            </tbody>
          </table>

          <label><strong>Quantity</strong></label>
          <input type="number" name="total_order" id="modalQty" class="form-control" min="1" required>
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Confirm</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</div>
</main>
<br> 

<!-- FOOTER -->
<footer class="footer">
    © 2026 MyShop. All Rights Reserved.
</footer>

<!-- SCRIPT -->
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

<script>
function addToCart(){
    alert("Add to cart not implemented yet.");
}

function openModal(id, name, price, stock){
    document.getElementById("modalProductId").value = id;
    document.getElementById("modalProductNameInput").value = name;
    document.getElementById("modalPrice").value = price;

    document.getElementById("modalProductIdText").innerText = id;
    document.getElementById("modalProductNameText").innerText = name;
    document.getElementById("modalProductPriceText").innerText = price;
    document.getElementById("modalStockText").innerText = stock;

    document.getElementById("modalProductImage").src = "showImage.php?id=" + id;

    let qty = document.getElementById("modalQty");
    qty.value = 1;
    qty.max = stock;

    qty.oninput = function () {
        document.getElementById("modalTotal").value = this.value * price;
    };

    let modal = new bootstrap.Modal(document.getElementById("productModal"), {
        backdrop: 'static',
    });
    modal.show();
}
</script>

</body>
</html>
