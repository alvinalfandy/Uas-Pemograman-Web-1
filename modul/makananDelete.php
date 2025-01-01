<?php
include "includes/config.php";
// ambil id dari query string
$id = $_GET['id'];
// buat query hapus
$query = "DELETE FROM tbl_makanan WHERE id_makanan=$id";
$sql = mysqli_query($conn, $query);
// apakah query hapus berhasil?
if ($sql) {
    echo "<script>alert('Data berhasil dihapus !');
window.location='?page=makanan';</script>";
} else {
    echo "<script>alert('Data gagal dihapus !');
window.location='?page=makanan';</script>";
}
