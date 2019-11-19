<?php
 class akademisi{
     function __construct(){

     }
     function lapor($kodebrg, $deskripsi, $foto, $tipe, $lokasi){
         include "database.php";
         $mysqli = mysqli_connect("remotemysql.com", "kZXrSwhZy7", "SLjmGMemEO", "kZXrSwhZy7");
         $result = $mysqli->query("INSERT INTO Laporan_Kerusakan VALUES('', '$kodebrg', '$deskripsi', '$foto', '$tipe', '$lokasi')");      
     }
 }
 if(isset($_POST['lapor'])){
    $kode_barang = $_POST['kode_barang'];
    $deskripsi = $_POST['deskripsi'];
    $foto = $_POST['bukti'];
    $tipe = $_POST['tipe'];
    $lokasi = $_POST['lokasi'];
    $ak= new akademisi();
    $ak->lapor($kode_barang, $deskripsi, $foto, $tipe, $lokasi);
 }
?>
<form method="POST" action="" name="lapor">
    Kode Barang :
        <input type="text" name="kode_barang"/><br>
    Deskripsi :
        <input type="text" name="deskripsi"/><br>
    Bukti Foto :
        <input type="file" name="bukti"/><br>
    Tipe :
        <input type="text" name="tipe"/><br>
    Lokasi :
        <input type="text" name="lokasi"/><br>
        <input type="submit" value="submit"/>
</form>