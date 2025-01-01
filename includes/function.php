<?php
function inputData($data)
{
    // Menghapus spasi di awal dan akhir string
    $data = trim($data);
    // untuk menghapus garis miring terbalik () dari sebuah string
    $data = stripslashes($data);
    // Filter teks untuk mencegah XSS (menyaring tag HTML dan karakter khusus)
    $data = htmlspecialchars($data);
    // untuk menghapus HTML dan tag PHP dari string tertentu
    $data = strip_tags($data);
    return $data;
}
