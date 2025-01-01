<?php
// Cek apakah tombol simpan sudah diklik
if (isset($_POST['submit'])) {
    // Mengambil dan membersihkan input
    $input_nama_minuman = inputData($_POST['nama_minuman']);
    $input_daerah_minuman = inputData($_POST['daerah_minuman']);
    $nama_minuman = mysqli_real_escape_string($conn, $input_nama_minuman);
    $daerah_minuman = mysqli_real_escape_string($conn, $input_daerah_minuman);

    // Validasi field nama minuman
    if (empty($nama_minuman) || strlen($nama_minuman) == 0) {
        echo "<script>window.alert('Field is required');window.location='?page=minumanAdd'</script>";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", inputData($nama_minuman))) {
        echo "<script>window.alert('Only letters and white space allowed');window.location='?page=minumanAdd'</script>";
    }
    // Validasi field daerah minuman
    elseif (empty($daerah_minuman) || strlen($daerah_minuman) == 0) {
        echo "<script>window.alert('Field is required');window.location='?page=minumanAdd'</script>";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", inputData($daerah_minuman))) {
        echo "<script>window.alert('Only letters and white space allowed');window.location='?page=minumanAdd'</script>";
    }
    // Validasi duplikasi data
    else {
        $cek = mysqli_num_rows(mysqli_query($conn, "SELECT nama_minuman FROM tbl_minuman WHERE nama_minuman='$nama_minuman'"));
        if ($cek > 0) {
            echo "<script>window.alert('Data sudah tersedia');window.location='?page=minumanAdd'</script>";
        } else {
            // Buat query untuk menambahkan data
            $query = "INSERT INTO tbl_minuman (nama_minuman, daerah_minuman) VALUE ('$nama_minuman', '$daerah_minuman')";
            $sql = mysqli_query($conn, $query);

            // Apakah proses simpan berhasil?
            if ($sql) {
                echo "<script>window.alert('Data berhasil ditambah!');window.location='?page=minuman';</script>";
            } else {
                echo "<script>window.alert('Gagal menambah data!');window.location='?page=minuman';</script>";
            }
        }
    }
}
