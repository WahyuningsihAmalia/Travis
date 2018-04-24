<?php


include "koneksi.php";

$konkesiObj = new Koneksi();
$koneksi = $konkesiObj->getKoneksi();
        
$kode = $_POST['kode'];
$nama = $_POST['namaBarang'];
$stok = $_POST['stok'];

if($koneksi->connect_error) {
    echo "Gagal Koneksi : " . $koneksi->connect_error;
} else {
	echo "sambungan basis data berhasil";
}
$qry = "delete from stok_barang where kode=" .$_GET["kode"];

if($koneksi->query($qry) === true) {
	echo "<br> Data kode " . $_GET["kode"].
		"berhasil dihapus." .
		' <a href="main.php">Lihat Data</a>';
} else {
	echo "<
