<?php


include "koneksi.php";

$konkesiObj = new Koneksi();
$koneksi = $konkesiObj->getKoneksi();
        
$kode = $_POST['kode'];
$nama = $_POST['namaBarang'];
$stok = $_POST['stok'];

if($koneksi->connect_error) {
    echo "Gagal Koneksi : " . $koneksi->connect_error;
}

$query = "update stok_barang set nama_barang='$nama', stok='$stok' where kode='$kode'";

if($koneksi->query($query)===true){
    echo "<br>Data ". $nama .' berhasil diupdate';
} else{
    echo "<br> Data gagal diupdate";
    
}
echo "<br>";
echo "<a href='main.php'>Kembali ke Halaman Utama</a>";


?>