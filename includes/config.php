<?php
// Atur zona waktu
date_default_timezone_set('Asia/Jakarta');

// Konfigurasi database
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_kuliner";

// URL dasar (opsional, sesuaikan dengan aplikasi Anda)
$base_url = 'http://localhost/KULINER/'; // Ganti dengan folder utama aplikasi Anda

// Koneksi ke database
$conn = mysqli_connect($servername, $username, $password, $database);

// Cek koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
