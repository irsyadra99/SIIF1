<?php
 class akademisi{
     function __construct(){

     }
     function lapor($kodebrg, $deskripsi, $foto, $tipe, $lokasi){
         include "database.php";
         $mysqli = mysqli_connect("remotemysql.com", "kZXrSwhZy7", "SLjmGMemEO", "kZXrSwhZy7");
         $result = $mysqli->query("INSERT INTO Laporan_Kerusakan VALUES('$kodebrg', '$deskripsi', '$foto', '$tipe', '$lokasi')");      
     }
 }
?>
