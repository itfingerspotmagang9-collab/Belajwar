<?php
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}