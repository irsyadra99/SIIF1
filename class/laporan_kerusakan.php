<?php
include 'database.php';
class laporanK{
    function __construct(){

    }
    function laporan_kerusakan($kodebrg, $deskripsi, $foto, $tipe, $lokasi){
        session_start();
        $mysqli = mysqli_connect("remotemysql.com", "kZXrSwhZy7", "SLjmGMemEO", "kZXrSwhZy7");
        if (!$mysqli) {
            die("Koneksi gagal: ".mysqli_connect_error());
        }
        $hasil = $mysqli->query("INSERT INTO Laporan_Kerusakan VALUES('','$kodebrg', '$deskripsi', '$foto', '$tipe', '$lokasi')");   
        if(!$hasil){ 
            header("location:../form/form_edit.php");
        }else{
            header("location:../form/form_list.php");
        }
    }
}
?>
