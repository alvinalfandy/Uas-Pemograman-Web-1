<?php
// Cek apakah tombol simpan sudah diklik atau belum
if (isset($_POST['submit'])) {
    // Mengambil dan membersihkan input
    $input_nama_makanan = inputData($_POST['nama_makanan']);
    $input_daerah_makanan = inputData($_POST['daerah_makanan']);
    $nama_makanan = mysqli_real_escape_string($conn, $input_nama_makanan);
    $daerah_makanan = mysqli_real_escape_string($conn, $input_daerah_makanan);

    // Validasi field nama makanan
    if (empty($nama_makanan) || strlen($nama_makanan) == 0) {
        echo "<script>window.alert('Field is required');window.location='?page=makananAdd'</script>";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", inputData($nama_makanan))) {
        echo "<script>window.alert('Only letters and white space allowed');window.location='?page=makananAdd'</script>";
    }
    // Validasi field daerah makanan
    elseif (empty($daerah_makanan) || strlen($daerah_makanan) == 0) {
        echo "<script>window.alert('Field is required');window.location='?page=makananAdd'</script>";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", inputData($daerah_makanan))) {
        echo "<script>window.alert('Only letters and white space allowed');window.location='?page=makananAdd'</script>";
    }
    // Validasi duplikasi data
    else {
        $cek = mysqli_num_rows(mysqli_query($conn, "SELECT nama_makanan FROM tbl_makanan WHERE nama_makanan='$nama_makanan'"));
        if ($cek > 0) {
            echo "<script>window.alert('Data sudah tersedia');window.location='?page=makananAdd'</script>";
        } else {
            // Buat query untuk menambahkan data
            $query = "INSERT INTO tbl_makanan (nama_makanan, daerah_makanan) VALUE ('$nama_makanan', '$daerah_makanan')";
            $sql = mysqli_query($conn, $query);

            // Apakah proses simpan berhasil?
            if ($sql) {
                echo "<script>window.alert('Data berhasil ditambah!');window.location='?page=makanan';</script>";
            } else {
                echo "<script>window.alert('Gagal menambah data!');window.location='?page=makanan';</script>";
            }
        }
    }
}
