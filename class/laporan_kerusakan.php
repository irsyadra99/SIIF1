<?php
include 'database.php';
class laporanK{
    function __construct(){

    }
    function laporan_kerusakan($kodebrg, $deskripsi, $foto, $tipe, $lokasi){
        $mysqli = mysqli_connect("remotemysql.com", "kZXrSwhZy7", "SLjmGMemEO", "kZXrSwhZy7");
        $hasil = $mysqli->query("INSERT INTO Laporan_Kerusakan ('idLaporanK','kode_barang', 'deskripsi', 'foto', 'tipe_barang', 'lokasi') VALUES('','$kodebrg', '$deskripsi', '$foto', '$tipe', '$lokasi')");   
        if(!$hasil){ 
            header("location:../form/form_edit.php");
        }else{
            header("location:../form/form_list.php");
        }
    }
}
?>
