<?php
class Koneksi {
    private $server = "localhost";
    private $username = "id4905150_stok_barang";//root
    private $password = "wahyuningsih";//""
    private $db = "id4905150_stok_barang";

    function getKoneksi(){
        return new mysqli($this->server, $this->username,$this->password, $this->db);
    }
}
?>