<?php
 class akademisi{
    include 'database.php';
    function __construct(){

    }
    function lapor($kodebrg, $deskripsi, $foto, $tipe, $lokasi){
        $mysqli = mysqli_connect("remotemysql.com", "kZXrSwhZy7", "SLjmGMemEO", "kZXrSwhZy7");
        if (!$mysqli) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }
        $hasil=$mysqli->query("INSERT INTO Laporan_Kerusakan VALUES('', '$kodebrg', '$deskripsi', '$foto', '$tipe', '$lokasi')");   
        if($hasil){
            header("location:../form/form_list.php");
        }
    }
 }
?>