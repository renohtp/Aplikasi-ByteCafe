<?php
include 'koneksi.php';
$nama = $_POST["nama"];
$email = $_POST["email"];
$password = $_POST["password"];
$role = 'user'; 

// Query untuk menyimpan data ke dalam tabel
$query_sql = "INSERT INTO tbl_user (nama, email, password, role) VALUES ('$nama', '$email', '$password', '$role')";
$signup = mysqli_query($koneksi, $query_sql);

if ($signup) { 
    header("location: login.php");
} else {
    echo "Sign Up Gagal : " . mysqli_error($koneksi);
}
?>
