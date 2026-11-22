<?php
session_start();
if (empty($_SESSION['email'])) {
    echo "<script type='text/javascript'>
            alert('Maaf Anda Harus Login!');
            window.location.assign('login.php');
          </script>";
    exit();
}

// Database connection
$conn = mysqli_connect("localhost", "root", "", "dbcafe");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch user's transactions
$user_id = $_SESSION['id']; // Ensure this is set correctly during login
if (empty($user_id)) {
    echo "<script type='text/javascript'>
            alert('User  ID tidak ditemukan. Silakan login kembali.');
            window.location.assign('login.php');
          </script>";
    exit();
}

$query = "SELECT t.*, u.email 
          FROM transactions t 
          LEFT JOIN tbl_user u ON t.user_id = u.id
          WHERE t.user_id = ? 
          ORDER BY t.created_at DESC";

$stmt = $conn->prepare($query);
if ($stmt === false) {
    die("MySQL prepare error: " . $conn->error);
}

$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Byte Cafe - Riwayat Pesanan</title>
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
    
    <style>
        .order-history-container {
            padding: 30px 0;
            min-height: 100vh;
            background-color: #f8f9fa;
        }
        
        .order-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            padding: 20px;
            transition: transform 0.2s;
        }
        
        .order-card:hover {
            transform: translateY(-5px);
        }
        
        .order-header {
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
            margin-bottom: 15px;
        }
        
        .status-badge {
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 0.9em;
            font-weight: bold;
        }
        
        .status-pending {
            background-color: #ffeeba;
            color: #856404;
        }
        
        .status-confirmed {
            background-color: #d4edda;
            color: #155724;
        }
        
        .status-cancelled {
            background-color: #f8d7da;
            color: #721c24;
        }
        
        .order-details {
            display: flex;
            align-items: center;
        }
        
        .menu-image {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 8px;
            margin-right: 20px;
        }
        
        .price-info {
            color: #28a745;
            font-weight: bold;
            font-size: 1.1em;
        }
        
        .date-info {
            color: #6c757d;
            font-size: 0.9em;
        }
        
        .no-orders {
            text-align: center;
            padding: 50px;
            color: #6c757d;
        }
    </style>
</head>

<body data-spy="scroll" data-target="#navbar" class="static-layout">
    <!-- Navigation Bar -->
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

    <!-- Order History Section -->
    <div class="order-history-container">
        <div class="container">
            <h2 class="text-center mb-4">Riwayat Pesanan</h2>
            
            <?php if (mysqli_num_rows($result) > 0) : ?>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                    <div class="order-card">
                        <div class="order-header">
                            <div>
                                <strong>Order #<?php echo $row['id']; ?></strong>
                            </div>
                            <span class="status-badge status-<?php echo strtolower($row['status']); ?>">
                                <?php echo ucfirst($row['status']); ?>
                            </span>
                        </div>
                        <div class="order-details">
                            <div>
                                <h5><?php echo htmlspecialchars($row['product_name']); ?></h5>
                                <p>Quantity: <?php echo $row['quantity']; ?></p>
                                <p class="price-info">Total: Rp <?php echo number_format($row['total_price'], 2); ?></p>
                                <p class="date-info">Ordered on: <?php echo date('d M Y H:i', strtotime($row['created_at'])); ?></p>
                                <p class="date-info">Email: <?php echo htmlspecialchars($row['email']); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <div class="no-orders">
                    <h4>You haven't placed any orders yet.</h4>
                    <p>Check our menu and place your first order!</p>
                    <a href="index.php" class="btn btn-primary mt-3">View Menu</a>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- External JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs ```html
    .cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
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