<?php

 class akademisi{
    function __construct(){

    }
    function lapor(){
        session_start();
        include 'laporan_kerusakan.php';
        $db = new laporanK();
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $db->laporan_kerusakan($_POST['kode_barang'], $_POST['deskripsi'], $_POST['bukti'], $_POST['tipe'], $_POST['lokasi']);
        }
        //session_start();
        // $mysqli = mysqli_connect("remotemysql.com", "kZXrSwhZy7", "SLjmGMemEO", "kZXrSwhZy7");
        // if (!$mysqli) {
        //     die("Koneksi gagal: ".mysqli_connect_error());
        // }
        // $hasil = $mysqli->query("INSERT INTO Laporan_Kerusakan VALUES('','$kodebrg', '$deskripsi', '$foto', '$tipe', '$lokasi')");   
        // if(!$hasil){ 
        //     header("location:../form/form_edit.php");
        // }else{
        //     header("location:../form/form_list.php");
        // }
    }
 }
?>