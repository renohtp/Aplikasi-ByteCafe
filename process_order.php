<?php
session_start();
if (empty($_SESSION['email'])) {
    echo json_encode(['status' => 'error', 'message' => 'User not logged in']);
    exit;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbcafe";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user_id from tbl_user based on email
$email = $_SESSION['email'];
$stmt = $conn->prepare("SELECT id FROM tbl_user WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo json_encode(['status' => 'error', 'message' => 'User not found']);
    exit;
}

$user = $result->fetch_assoc();
$user_id = $user['id'];

$rawData = file_get_contents('php://input');
$decodedData = json_decode($rawData, true);

if (!isset($decodedData['products']) || empty($decodedData['products'])) {
    echo json_encode(['status' => 'error', 'message' => 'No products found']);
    exit;
}

$products = $decodedData['products'];
$total_amount = $decodedData['total_amount'];

// Start transaction to ensure all orders are processed together
$conn->begin_transaction();

try {
    foreach ($products as $product) {
        $product_name = $product['name'];
        $quantity = $product['quantity'];
        $price_per_unit = $product['price'];
        $total_price = $quantity * $price_per_unit;

        // Simpan both user_id dan email
        $stmt = $conn->prepare("INSERT INTO transactions (user_id, email, product_name, quantity, total_price, status) VALUES (?, ?, ?, ?, ?, 'pending')");
        $stmt->bind_param("isssd", $user_id, $email, $product_name, $quantity, $total_price);

        if (!$stmt->execute()) {
            throw new Exception('Error processing order: ' . $stmt->error);
        }
    }

    // If we get here, commit the transaction
    $conn->commit();
    echo json_encode(['status' => 'success', 'message' => 'Order processed successfully']);
} catch (Exception $e) {
    // If there's an error, rollback the transaction
    $conn->rollback();
    echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
}

$stmt->close();
$conn->close();
