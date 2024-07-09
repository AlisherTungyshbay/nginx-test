<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link -->

    <link rel="stylesheet" href="/styles/styles.css">
    <link rel="icon" href="/images/favicon/favicon.ico">

    <!-- Scripts -->

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://kit.fontawesome.com/c85c87a3ad.js" crossorigin="anonymous"></script>

    <title>Document</title>
</head>

<body>

    <?php include '../src/View/templates/header.php'; ?>

    <article>
        <section class="product-container">
            <div class="product-card headphones">
                <img src="path-to-headphones-image.jpg" alt="Headphones">
                <h3>Headphones</h3>
                <p>Weekend Discount</p>
                <p class="price">$299.00 <span class="original-price">$399.00</span></p>
            </div>
            <div class="product-card cell-phones">
                <img src="path-to-cell-phones-image.jpg" alt="Cell Phones">
                <h3>Cell Phones</h3>
                <p>Weekend Discount</p>
                <p class="price">$299.00 <span class="original-price">$399.00</span></p>
            </div>
            <div class="product-card accessories">
                <img src="path-to-accessories-image.jpg" alt="Accessories">
                <h3>Accessories</h3>
                <p>Weekend Discount</p>
                <p class="price">$299.00 <span class="original-price">$399.00</span></p>
            </div>
        </section>
    </article>

    <!-- aside -->

    <article class="container">
        <aside class="sidebar">
            <h2>Product Categories</h2>
            <ul class="categories">
                <li>Apple</li>
                <li>Camera & Photo</li>
                <li>Cell Phones</li>
                <li>Computers & Accessories</li>
                <li>Headphones</li>
                <li>Smartwatches</li>
                <li>Sports & Outdoors</li>
                <li>Television & Video</li>
                <li>Video Games</li>
            </ul>
            <h2>Filter by price</h2>
            <input type="range" min="0" max="5440" class="price-filter">
            <button class="filter-button">Filter</button>
            <h2>Filter by Color</h2>
            <ul class="colors">
                <li><input type="checkbox"> Black</li>
                <li><input type="checkbox"> Blue</li>
                <li><input type="checkbox"> Brown</li>
                <li><input type="checkbox"> Gray</li>
                <li><input type="checkbox"> Green</li>
                <li><input type="checkbox"> Orange</li>
                <li><input type="checkbox"> Red</li>
            </ul>
            <h2>Product Status</h2>
            <ul class="status">
                <li><input type="checkbox"> In Stock</li>
                <li><input type="checkbox"> On Sale</li>
            </ul>
            <h2>Brands</h2>
            <ul class="brands">
                <li><input type="checkbox"> Apple</li>
                <li><input type="checkbox"> Asus</li>
                <li><input type="checkbox"> Beats</li>
                <li><input type="checkbox"> Canon</li>
                <li><input type="checkbox"> Dell</li>
                <li><input type="checkbox"> Samsung</li>
            </ul>
        </aside>

        <!-- main -->
        
        <div class="products">
            <h1>Products</h1>
            <div class="product-list">
                <div class="product-item">
                    <img src="path/to/image1.jpg" alt="Apple iPad Air">
                    <p>Apple 10.9-inch iPad Air Wi-Fi Cellular 64GB</p>
                    <p>$629.99</p>
                </div>
                <div class="product-item">
                    <img src="path/to/image2.jpg" alt="Apple iPhone 11">
                    <p>Apple iPhone 11 64GB Yellow Fully Unlocked</p>
                    <p>$438.67</p>
                </div>
                <div class="product-item">
                    <img src="path/to/image3.jpg" alt="ASUS VivoBook 15">
                    <p>ASUS VivoBook 15 Thin and Light Laptop 15.6” FHD Display</p>
                    <p>$469.00</p>
                </div>
                <!-- Add more products as needed -->
            </div>
        </div>
    </article>

    <?php include '../src/View/templates/footer.php'; ?>

    <!-- scripts -->
    <script src="/styles/font-awesome/all.js"></script>
    <script src="/styles/header/accordion.js"></script>
</body>

</html>