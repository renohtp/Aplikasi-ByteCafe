<?php 
session_start();
if (empty($_SESSION['email'])) { ?>
    <script type="text/javascript">
        alert("Maaf Anda Harus Login!")
        window.location.assign('login.php');
    </script>
<?php }?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Byte Cafe</title>
    <meta name="description" content="Resto">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- External CSS -->
    <link rel="stylesheet" href="styleorder.css">
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" href="vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/brands.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Josefin+Sans:300,400,700">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.min.css">

    <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
</head>
<body data-spy="scroll" data-target="#navbar">
    <div id="side-nav" class="sidenav">
        <a href="javascript:void(0)" id="side-nav-close">&times;</a>
    </div>
    <div id="side-search" class="sidenav">
        <a href="javascript:void(0)" id="side-search-close">&times;</a>
        <div class="sidenav-content">
            <form action="">
                <div class="input-group md-form form-sm form-2 pl-0">
                    <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="input-group-text red lighten-3" id="basic-text1">
                            <i class="fas fa-search text-grey" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div id="canvas-overlay"></div>
    <div class="boxed-page">
    <nav id="navbar-header" class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand navbar-brand-center d-flex align-items-center p-0 only-mobile" href="/">
            <img src="img/logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-menu"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex justify-content-between">
                <li class="nav-item only-desktop">
                    <a class="nav-link" id="side-nav-open" href="#">
                        <span class="lnr lnr-menu"></span>
                    </a>
                </li>
                <div class="d-flex flex-lg-row flex-column">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Most Popular
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="special-dishes.php">Chai Dream Fusion Infusion</a>
                          <a class="dropdown-item" href="special-dishes.php">Cloud Nine Croissant</a>
                          <a class="dropdown-item" href="special-dishes.php">Butterscotch Sea Salt Latte</a>
                          <a class="dropdown-item" href="special-dishes.php">Sunrise Berry Muffin</a>
                          <a class="dropdown-item" href="special-dishes.php">Serene Matcha Blend</a>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="menu.php">Menu</a>
                    </li>
                </div>
            </ul>
            
            <a class="navbar-brand navbar-brand-center d-flex align-items-center only-desktop" href="#">
                <img src="img/logo.png" alt="">
            </a>
            <ul class="navbar-nav d-flex justify-content-between">
                <div class="d-flex flex-lg-row flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="team.php">Team</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="order.php">Order</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="profile.php">Profile</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </div>
            </ul>
        </div>
    </div>
</nav>		
        <!-- Offers -->
        <div class="container">
            <div class="offer-card">
                <img class="img-fluid" src="img/discound10.png" alt="Offer">
                <h2>Special Offer Discount 10%</h2>
                <p>All Beverages<br><span>*No minimum purchase</span></p>
            </div>
            <div class="offer-card">
                <img class="img-fluid" src="img/discound15.png" alt="Offer">
                <h2>Special Offer Discount 15%</h2>
                <p>Start from 5-8 April</p>
            </div>
            <div class="offer-card">
                <img class="img-fluid" src="img/discound35.png" alt="Offer">
                <h2>Special Offer Discount 35%</h2>
                <p>All Beverages</p>
            </div>
        </div>

        <!-- Products -->
        <div class="container">
            <div class="products">
                <!-- Product baris ke 1 -->
                <div class="product-card" id="product-1">
                    <img class="img-fluid" src="img/savorybreakfasttacos.jpg" alt="SavoryBreakfastTaco">
                    <div class="product-details">
                        <h5 id="product-name"><b>Savory Breakfast Taco</b></h5>
                        <p id="product-info"> </p>
                        <div class="price">Rp. <span id="product-price">0</span></div>
                    </div>
                    <div class="quantity-control">
                        <button onclick="decreaseQuantity(this)">-</button>
                        <span>0</span>
                        <button onclick="increaseQuantity(this)">+</button>
                    </div>
                    <button class="edit-btn" onclick="openFoodEditPopup('product-1')" aria-label="Edit">
                        <i class="fas fa-edit"></i>
                    </button>
                </div>

                <div class="product-card" id="product-2">
                    <img class="img-fluid" src="img/veggie&fetaomelette.jpg" alt="Omlette">
                    <div class="product-details">
                        <h5 id="product-name"><b>Veggie & Feta Omelette</b></h5>
                        <p id="product-info"> </p>
                        <div class="price">Rp. <span id="product-price">0</span></div>
                    </div>
                    <div class="quantity-control">
                        <button onclick="decreaseQuantity(this)">-</button>
                        <span>0</span>
                        <button onclick="increaseQuantity(this)">+</button>
                    </div>
                    <button class="edit-btn" onclick="openFoodEditPopup('product-2')" aria-label="Edit">
                        <i class="fas fa-edit"></i>
                    </button>
                </div>

                <div class="product-card" id="product-3">
                    <img class="img-fluid" src="img/lemonlavendershortbreadcookie.jpg" alt="Shortbread">
                    <div class="product-details">
                        <h5 id="product-name"><b>Lemon Lavender Shortbread</b></h5>
                        <p id="product-info"> </p>
                        <div class="price">Rp. <span id="product-price">0</span></div>
                    </div>
                    <div class="quantity-control">
                        <button onclick="decreaseQuantity(this)">-</button>
                        <span>0</span>
                        <button onclick="increaseQuantity(this)">+</button>
                    </div>
                    <button class="edit-btn" onclick="openFoodEditPopup('product-3')" aria-label="Edit">
                        <i class="fas fa-edit"></i>
                    </button>
                </div>

                <div class="product-card" id="product-4">
                    <img class="img-fluid" src="img/cloudninecroissant.jpg" alt="Croissant">
                    <div class="product-details">
                        <h5 id="product-name"><b>Cloud Nine Croissant Delights</b></h5>
                        <p id="product-info"> </p>
                        <div class="price">Rp. <span id="product-price">0</span></div>
                    </div>
                    <div class="quantity-control">
                        <button onclick="decreaseQuantity(this)">-</button>
                        <span>0</span>
                        <button onclick="increaseQuantity(this)">+</button>
                    </div>
                    <button class="edit-btn" onclick="openFoodEditPopup('product-4')" aria-label="Edit">
                        <i class="fas fa-edit"></i>
                    </button>
                </div>
            </div>
            <div class="products">

                <div class="product-card" id="product-5">
                    <img class="img-fluid" src="img/honeyalmondcroissant.jpg" alt="Croissant">
                    <div class="product-details">
                        <h5 id="product-name"><b>Honey Almond Croissant</b></h5>
                        <p id="product-info"> </p>
                        <div class="price">Rp. <span id="product-price">0</span></div>
                    </div>
                    <div class="quantity-control">
                        <button onclick="decreaseQuantity(this)">-</button>
                        <span>0</span>
                        <button onclick="increaseQuantity(this)">+</button>
                    </div>
                    <button class="edit-btn" onclick="openFoodEditPopup('product-5')" aria-label="Edit">
                        <i class="fas fa-edit"></i>
                    </button>
                </div>

                <div class="product-card" id="product-6">
                    <img class="img-fluid" src="img/chaidream.jpg" alt="Tea">
                    <div class="product-details">
                        <h5 id="product-name"><b>Chai Dream Fusion</b></h5>
                        <p id="product-info"> </p>
                        <div class="price">Rp. <span id="product-price">0</span></div>
                    </div>
                    <div class="quantity-control">
                        <button onclick="decreaseQuantity(this)">-</button>
                        <span>0</span>
                        <button onclick="increaseQuantity(this)">+</button>
                    </div>
                    <button class="edit-btn" onclick="openEditPopup('product-6')" aria-label="Edit">
                        <i class="fas fa-edit"></i>
                    </button>
                </div>

                <div class="product-card" id="product-7">
                    <img class="img-fluid" src="img/butterscotchseasaltlatte.jpg" alt="Coffee">
                    <div class="product-details">
                        <h5 id="product-name"><b>Butterscotch Sea Salt Latte</b></h5>
                        <p id="product-info"> </p>
                        <div class="price">Rp. <span id="product-price">0</span></div>
                    </div>
                    <div class="quantity-control">
                        <button onclick="decreaseQuantity(this)">-</button>
                        <span>0</span>
                        <button onclick="increaseQuantity(this)">+</button>
                    </div>
                    <button class="edit-btn" onclick="openEditPopup('product-7')" aria-label="Edit">
                        <i class="fas fa-edit"></i>
                    </button>
                </div>

                <div class="product-card" id="product-8">
                    <img class="img-fluid" src="img/tropicalblisslatte.jpg" alt="Coffee">
                    <div class="product-details">
                        <h5 id="product-name"><b>Tropical Bliss Latte Serenade</b></h5>
                        <p id="product-info"> </p>
                        <div class="price">Rp. <span id="product-price">0</span></div>
                    </div>
                    <div class="quantity-control">
                        <button onclick="decreaseQuantity(this)">-</button>
                        <span>0</span>
                        <button onclick="increaseQuantity(this)">+</button>
                    </div>
                    <button class="edit-btn" onclick="openFoodEditPopup('product-8')" aria-label="Edit">
                        <i class="fas fa-edit"></i>
                    </button>
                </div>
            </div>
            <div class="products">

                <div class="product-card" id="product-9">
                    <img class="img-fluid" src="img/moonlitmysticmocha.jpg" alt="Coffee">
                    <div class="product-details">
                        <h5 id="product-name"><b>Moonlit Mystic Mocha</b></h5>
                        <p id="product-info"> </p>
                        <div class="price">Rp. <span id="product-price">0</span></div>
                    </div>
                    <div class="quantity-control">
                        <button onclick="decreaseQuantity(this)">-</button>
                        <span>0</span>
                        <button onclick="increaseQuantity(this)">+</button>
                    </div>
                    <button class="edit-btn" onclick="openEditPopup('product-9')" aria-label="Edit">
                        <i class="fas fa-edit"></i>
                    </button>
                </div>

                <div class="product-card" id="product-10">
                    <img class="img-fluid" src="img/spicedchaifusion.jpg" alt="Tea">
                    <div class="product-details">
                        <h5 id="product-name"><b>Spiced Chai Fusion</b></h5>
                        <p id="product-info"> </p>
                        <div class="price">Rp. <span id="product-price">0</span></div>
                    </div>
                    <div class="quantity-control">
                        <button onclick="decreaseQuantity(this)">-</button>
                        <span>0</span>
                        <button onclick="increaseQuantity(this)">+</button>
                    </div>
                    <button class="edit-btn" onclick="openEditPopup('product-10')" aria-label="Edit">
                        <i class="fas fa-edit"></i>
                    </button>
                </div>

                <div class="product-card" id="product-11">
                    <img class="img-fluid" src="img/sunriseberrymuffin.jpg" alt="muffin">
                    <div class="product-details">
                        <h5 id="product-name"><b>Sunrise Berry Muffin</b></h5>
                        <p id="product-info"> </p>
                        <div class="price">Rp. <span id="product-price">0</span></div>
                    </div>
                    <div class="quantity-control">
                        <button onclick="decreaseQuantity(this)">-</button>
                        <span>0</span>
                        <button onclick="increaseQuantity(this)">+</button>
                    </div>
                    <button class="edit-btn" onclick="openFoodEditPopup('product-11')" aria-label="Edit">
                        <i class="fas fa-edit"></i>
                    </button>
                </div>

                <div class="product-card" id="product-12">
                    <img class="img-fluid" src="img/serenematchablend.jpg" alt="Latte">
                    <div class="product-details">
                        <h5 id="product-name"><b>Serene Matcha Blend</b></h5>
                        <p id="product-info"></p> 
                        <div class="price">Rp. <span id="product-price">0</span></div>
                    </div>
                    <div class="quantity-control">
                        <button onclick="decreaseQuantity(this)">-</button>
                        <span>0</span>
                        <button onclick="increaseQuantity(this)">+</button>
                    </div>
                    <button class="edit-btn" onclick="openEditPopup('product-12')" aria-label="Edit">
                        <i class="fas fa-edit"></i>
                    </button>
                </div>

            </div>
            
        </div>
           <!-- Order Button -->
           <div style="text-align: center;">
    <button class="order-btn" style="background-color: #6f4f37; border-color: #6f4f37; color: white;" onclick="openPaymentPopup()">Order Now</button>
    <button class="order-btn" style="background-color: #6f4f37; border-color: #6f4f37; color: white;" onclick="window.location.href='riwayatorder.php'">History Order</button>
</div>

<!-- Edit Popup for Drinks -->
<div class="edit-popup" id="edit-popup">
    <h4>Edit Your Order</h4>
    <label for="temperature">Temperature:</label>
    <select id="temperature">
        <option value="ice">Ice</option>
        <option value="hot">Hot</option>
    </select>
    <label for="sugar">Sugar Level:</label>
    <select id="sugar">
        <option value="normal">Normal</option>
        <option value="less">Less</option>
        <option value="none">None</option>
    </select>
    <label for="size">Size:</label>
    <select id="size">
        <option value="regular">Regular</option>
        <option value="large">Large</option>
    </select>
    <button class="save-button button" onclick="saveEdit()">Save</button>
    <button class="close-button button" onclick="closePopup('edit-popup')">Close</button>
</div>

<!-- Edit Popup for Food -->
<div class="edit-popup" id="food-edit-popup">
    <h4>Edit Your Order</h4>
    <label for="topping">Temperature:</label>
    <select id="topping">
        <option value="none">Room Temperature</option>
        <option value="Hot">Hot</option>
    </select>
    <label for="food-size">Size:</label>
    <select id="food-size">
        <option value="small">Small</option>
        <option value="medium">Medium</option>
        <option value="large">Large</option>
    </select>
    <button class="save-button button" onclick="saveFoodEdit()">Save</button>
    <button class="close-button button" onclick="closePopup('food-edit-popup')">Close</button>
</div>

<!-- Payment Popup -->
<div id="payment-popup" class="popup">
    <div class="popup-content">
        <span class="close-btn" onclick="closePopup('payment-popup')">&times;</span>
        <h2>Payment</h2>
        <p>Your total amount is: <strong>Rp. <span id="total-amount">0</span></strong></p>
        <button onclick="confirmPayment()">Confirm Payment</button>
    </div>
</div>

<script>
    let currentProduct = null; // Stores the product being edited

    function increaseQuantity(button) {
        const span = button.previousElementSibling;
        let quantity = parseInt(span.textContent);
        span.textContent = quantity + 1;
        updatePriceDisplay();
    }

    function decreaseQuantity(button) {
        const span = button.nextElementSibling;
        let quantity = parseInt(span.textContent);
        if (quantity > 0) {
            span.textContent = quantity - 1;
        }
        updatePriceDisplay();
    }

    function openEditPopup(productId) {
        currentProduct = document.getElementById(productId);
        document.getElementById('edit-popup').style.display = 'block';
    }

    function openFoodEditPopup(productId) {
        currentProduct = document.getElementById(productId);
        document.getElementById('food-edit-popup').style.display = 'block';

        // Set value dari popup berdasarkan informasi produk yang sedang diedit
        const currentFoodInfo = currentProduct.querySelector('#product-info').textContent.split(', ');
        const topping = currentFoodInfo[0] || 'none'; // Default to No Topping
        const foodSize = currentFoodInfo[1] || 'small'; // Default to Small

        document.getElementById('topping').value = topping;
        document.getElementById('food-size').value = foodSize;
    }

    function openPaymentPopup() {
        updatePriceDisplay();
        document.getElementById('payment-popup').style.display = 'flex';
    }

    function closePopup(id) {
        document.getElementById(id).style.display = 'none';
    }

    function saveEdit() {
        const temperature = document.getElementById('temperature').value;
        const sugar = document.getElementById('sugar').value;
        const size = document.getElementById('size').value;

        const productInfo = `${temperature.charAt(0).toUpperCase() + temperature.slice(1)}, ${size.charAt(0).toUpperCase() + size.slice(1)}, ${sugar.charAt(0).toUpperCase() + sugar.slice(1)} Sugar`;
        currentProduct.querySelector('#product-info').textContent = productInfo;

        alert('Order updated successfully!');
        closePopup('edit-popup');
        updatePriceDisplay();
    }

    function saveFoodEdit() {
        const topping = document.getElementById('topping').value;
        const size = document.getElementById('food-size').value;

        const foodInfo = `${topping.charAt(0).toUpperCase() + topping.slice(1)}, ${size.charAt(0).toUpperCase() + size.slice(1)}`;

        currentProduct.querySelector('#product-info').textContent = foodInfo;

        alert('Food order updated successfully!');
        closePopup('food-edit-popup');
        updatePriceDisplay();
    }

    function updatePriceDisplay() {
        const productCards = document.querySelectorAll('.product-card');
        let totalPayment = 0;

        productCards.forEach(productCard => {
            const productName = productCard.querySelector('#product-name b').textContent;
            const quantity = parseInt(productCard.querySelector('.quantity-control span').textContent);
            let pricePerUnit = 0;

            // Harga default berdasarkan nama produk
            if (productName === 'Serene Matcha Blend') {
                pricePerUnit = 39000;
            } else if (productName === 'Honey Almond Croissant') {
                pricePerUnit = 35000;
            } else if (productName === 'Savory Breakfast Taco') {
                pricePerUnit = 40000;
            } else if (productName === 'Veggie & Feta Omelette') {
                pricePerUnit = 35000;
            } else if (productName === 'Lemon Lavender Shortbread') {
                pricePerUnit = 35000;
            } else if (productName === 'Cloud Nine Croissant Delights') {
                pricePerUnit = 35000;
            } else if (productName === 'Chai Dream Fusion') {
                pricePerUnit = 39000;
            } else if (productName === 'Butterscotch Sea Salt Latte') {
                pricePerUnit = 30000 
            } else if (productName === 'Tropical Bliss Latte Serenade') {
                pricePerUnit = 38000;
            } else if (productName === 'Moonlit Mystic Mocha') {
                pricePerUnit = 38000;
            } else if (productName === 'Spiced Chai Fusion') {
                pricePerUnit = 38000;
            } else if (productName === 'Sunrise Berry Muffin') {
                pricePerUnit = 25000;
            } 

            const sizeElement = productCard.querySelector('#product-info').textContent.toLowerCase();
            if (sizeElement.includes('medium')) {
                pricePerUnit += 5000;
            } else if (sizeElement.includes('large')) {
                pricePerUnit += 10000;
            }

            const productTotal = quantity * pricePerUnit;
            productCard.querySelector('#product-price').textContent = productTotal.toLocaleString('id-ID');

            totalPayment += productTotal;
        });

        document.getElementById('total-amount').textContent = totalPayment.toLocaleString('id-ID');
    }

    function confirmPayment() {
    const productCards = document.querySelectorAll('.product-card');
    const products = [];
    const totalAmount = document.getElementById('total-amount').textContent.replace(/\./g, '');

    productCards.forEach(productCard => {
        const quantity = parseInt(productCard.querySelector('.quantity-control span').textContent);
        if (quantity > 0) {  // Only include products with quantity > 0
            const productName = productCard.querySelector('#product-name b').textContent;
            const price = parseInt(productCard.querySelector('#product-price').textContent.replace(/\./g, ''));
            
            products.push({
                name: productName,
                quantity: quantity,
                price: price
            });
        }
    });

    // Check if there are any products selected
    if (products.length === 0) {
        alert('Please select at least one product');
        return;
    }

    fetch('process_order.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',  // Changed to JSON
        },
        body: JSON.stringify({
            total_amount: totalAmount,
            products: products
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            alert(data.message);
            closePopup('payment-popup');
            window.location.href = 'riwayatorder.php';
        } else {
            alert(data.message);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Error processing payment.');
    });
}
</script>
        <!-- External JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
        <script src="vendor/bootstrap/popper.min.js"></script>
        <script src="vendor/bootstrap/bootstrap.min.js"></script>
        <script src="vendor/select2/select2.min.js"></script>
        <script src="vendor/owlcarousel/owl.carousel.min.js"></script>
        <script src="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js"></script>
        <script src="vendor/stellar/jquery.stellar.js" type="text/javascript" charset="utf-8"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>

        <!-- Main JS -->
        <script src="js/app.min.js"></script>
    </body>
</html>