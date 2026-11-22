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
                <a class="navbar-brand navbar-brand-center d-flex align-items-center p-0 only-mobile" href="index.php">
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
                                    <a class="dropdown-item" href="#chai-dream">Chai Dream Fusion Infusion Fusion Infusion Fusion Infusion</a>
                                    <a class="dropdown-item" href="#cloud-nine-croissant">Cloud Nine Croissant</a>
                                    <a class="dropdown-item" href="#butterscotch-sea-salt-latte">Butterscotch Sea Salt Latte</a>
                                    <a class="dropdown-item" href="#sunrise-berry-muffin">Sunrise Berry Muffin</a>
                                    <a class="dropdown-item" href="#serene-matcha-blend">Serene Matcha Blend</a>
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

        <!-- Special Dishes Section -->
        <section id="gtco-special-dishes" class="bg-grey section-padding">
            <div class="container">
                <div class="section-content">
                    <div class="heading-section text-center">
                        <span class="subheading">
                            -Café-
                        </span>
                        <h2>
                            Most Popular
                        </h2>
                    </div>
                    <div class="row mt-5" id="chai-dream">
                        <div class="col-lg-5 col-md-6 align-self-center py-5">
                            <h2 class="special-number">01.</h2>
                            <div class="dishes-text">
                                <h3><span>Chai Dream Fusion Infusion</span><br> Fusion Infusion</h3>
                                <p class="pt-3">A warm blend of spiced black tea with cinnamon, cardamom, and ginger. Creamy and sweet, it’s the perfect cozy treat for any time of day!</p>
                                <h3 class="special-dishes-price">39K</h3>
                                <a href="#" class="btn-primary mt-3">Order</a>
                            </div>
                        </div>
                        <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
                            <img src="img/chaidream.jpg" alt="" class="img-fluid shadow w-100">
                        </div>
                    </div>
                    <div class="row mt-5" id="cloud-nine-croissant">
                        <div class="col-lg-5 col-md-6 align-self-center order-2 order-md-1 mt-4 mt-md-0">
                            <img src="img/cloudninecroissant.jpg" alt="" class="img-fluid shadow w-100">
                        </div>
                        <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center order-1 order-md-2 py-5">
                            <h2 class="special-number">02.</h2>
                            <div class="dishes-text">
                                <h3><span>Cloud</span><br> Nine Croissant</h3>
                                <p class="pt-3">Flaky and buttery croissant that melts in your mouth</p>
                                <h3 class="special-dishes-price">25K</h3>
                                <a href="#" class="btn-primary mt-3">Order <span><i class="fa fa-long-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5" id="butterscotch-sea-salt-latte">
                        <div class="col-lg-5 col-md-6 align-self-center py-5">
                            <h2 class="special-number">03.</h2>
                            <div class="dishes-text">
                                <h3><span>Butterscotch</span><br> Sea Salt Latte</h3>
                                <p class="pt-3">Butterscotch Sea Salt Latte is a creamy coffee with sweet butterscotch and a touch of sea salt for a perfect sweet-salty balance.</p>
                                <h3 class="special-dishes-price">30K</h3>
                                <a href="#" class="btn-primary mt-3">Order</a>
                            </div>
                        </div>
                        <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
                            <img src="img/butterscotchseasaltlatte.jpg" alt="" class="img-fluid shadow w-100">
                        </div>
                    </div>
                    <div class="row mt-5" id="sunrise-berry-muffin">
                        <div class="col-lg-5 col-md-6 align-self-center order-2 order-md-1 mt-4 mt-md-0">
                            <img src="img/sunriseberrymuffin.jpg" alt="" class="img-fluid shadow w-100">
                        </div>
                        <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center order-1 order-md-2 py-5">
                            <h2 class="special-number">04.</h2>
                            <div class="dishes-text">
                                <h3><span>Sunrise</span><br> Berry Muffin</h3>
                                <p class="pt-3">Light and fluffy muffin filled with a blend of fresh berries and a hint of citrus zest. A perfect pairing with your morning coffee.</p>
                                <h3 class="special-dishes-price">25K</h3>
                                <a href="#" class="btn-primary mt-3">Order <span><i class="fa fa-long-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5" id="serene-matcha-blend">
                        <div class="col-lg-5 col-md-6 align-self-center py-5">
                            <h2 class="special-number">05.</h2>
                            <div class="dishes-text">
                                <h3><span>Serene</span><br> Matcha Blend</h3>
                                <p class="pt-3">A soothing mix of premium Japanese matcha and creamy coconut milk. Sweetened with a hint of honey and topped with a dash of cinnamon, this drink is perfect for a moment of relaxation!</p>
                                <h3 class="special-dishes-price">39K</h3>
                                <a href="#" class="btn-primary mt-3">Order</a>
                            </div>
                        </div>
                        <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
                            <img src="img/serenematchablend.jpg" alt="" class="img-fluid shadow w-100">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/bootstrap.bundle.min.js"></script>

        <!-- Smooth Scroll JS -->
        <script>
            $(document).ready(function() {
                // Smooth scroll for menu items
                $('.dropdown-item').on('click', function(e) {
                    e.preventDefault(); // Prevent the default anchor behavior
                    var targetId = $(this).attr('href'); // Get the target section's ID
                    var targetOffset = $(targetId).offset().top; // Get the offset of the target section
                    $('html, body').animate({
                        scrollTop: targetOffset
                    }, 1000); // 1000ms for the scroll animation
                });
            });
        </script>
    </div>
</body>

</html>
