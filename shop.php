<?php
// Include the header
include('header.php');
?>

<!-- Linking CSS file explicitly for this page -->
<link rel="stylesheet" href="css/style.css">

<!-- New items section starts here -->
<section class="New-items">
    <div class="container">
        <h2>New items..</h2>
        <p>Welcome to our shop! Explore our products below.</p>

        <!-- Shop items -->
        <div class="item float-container">
            <img src="images/item1.png" alt="Item 1" class="img-responsive img-curve">
            <h3 class = "float-text text-white">Product Name 1</h3>
        </div>

        <div class="item float-container">
            <img src="images/item1.png" alt="Item 2" class="img-responsive img-curve">
            <h3 class = "float-text text-white">Product Name 2</h3>
        </div>

        <div class="item float-container">
            <img src="images/item1.png" alt="Item 3" class="img-responsive img-curve">
            <h3 class = "float-text text-white">Product Name 3</h3>
        </div>
    </div>
</section>
<!-- New items section ends here -->

<!-- Products section starts here -->
<section class="All-products">
    <div class="container">
        <h2 class = "text-center">Products</h2>
        
        <div class = "product">
            <div class =  "product-img">
                <img src="images/product1.jpg" alt="product 1" class="img-curve">
            </div>
            <div class = "product-desc">
                <h4>product name</h4>
                <p class = "product-price">$2.30</p>
                <p class = "product-details">product dscription will be here</p>
                <br>

                <a href="a" class = "btn btn-primary">order</a>
            </div>
        </div>

        <div class = "product">
            <div class =  "product-img">
                <img src="images/product1.jpg" alt="product 2" class="img-curve">
            </div>
            <div class = "product-desc">
                <h4>product name</h4>
                <p class = "product-price">$2.30</p>
                <p class = "product-details">product dscription will be here</p>
                <br>

                <a href="a" class = "btn btn-primary">order</a>
            </div>
        </div>

        <div class = "product">
            <div class =  "product-img">
                <img src="images/product1.jpg" alt="product 3" class="img-curve">
            </div>
            <div class = "product-desc">
                <h4>product name</h4>
                <p class = "product-price">$2.30</p>
                <p class = "product-details">product dscription will be here</p>
                <br>

                <a href="a" class = "btn btn-primary">order</a>
            </div>
        </div>

        <div class = "product">
            <div class =  "product-img">
                <img src="images/product1.jpg" alt="product 4" class="img-curve">
            </div>
            <div class = "product-desc">
                <h4>product name</h4>
                <p class = "product-price">$2.30</p>
                <p class = "product-details">product dscription will be here</p>
                <br>

                <a href="a" class = "btn btn-primary">order</a>
            </div>
        </div>


        <div class ="clearFix"></div>
    </div>
</section>
<!-- Products section ends here -->

<?php
// Include the footer
include('footer.php');
?>
