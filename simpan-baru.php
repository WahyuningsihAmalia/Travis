<?php
include "koneksi.php";

$konkesiObj = new Koneksi();
$koneksi = $konkesiObj->getKoneksi();


if($koneksi->connect_error) {
    echo "Gagal koneksi : " . $koneksi->connect_error;
}else {
    echo "Sambungan basis data berhasil";
}

//echo ' KODE : ' . $_POST["kode"];
//echo " NAMA BARANG : " . $_POST["namaBarang"];
//echo " STOK : ". $_POST["stok"];

$query = "insert into stok_barang(kode, nama_barang, stok)" .
        "values(" . $_POST["kode"] . ",'" . 
        $_POST["namaBarang"] . "'," . $_POST["stok"] . ")";
//echo "<br>".$query;

if($koneksi->query($query) == true){
    echo "<br> Data" . $_POST["namaBarang"] . "berhasil disimpin" . ' <a href="main.php">Lihat Data</a>';
}else {
    echo "<br> Data Gagal disimpan";
}

$koneksi->close();
?>