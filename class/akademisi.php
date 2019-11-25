<?php
 class akademisi{
    function __construct(){

    }
    public function lapor($kodebrg, $deskripsi, $foto, $tipe, $lokasi){
        include 'database.php';
        $mysqli = mysqli_connect("remotemysql.com", "kZXrSwhZy7", "SLjmGMemEO", "kZXrSwhZy7");
        if (!$mysqli) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }
        echo "Koneksi berhasil";
        $result = $mysqli->query("INSERT INTO Laporan_Kerusakan VALUES('$kodebrg', '$deskripsi', '$foto', '$tipe', '$lokasi')");      
    }
 }
?>