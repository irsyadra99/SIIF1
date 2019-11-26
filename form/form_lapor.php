<?php
    include '../class/akademisi.php';
    $ak= new akademisi();
?>
<html>
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
</html>
<?php
if(isset($_POST['lapor'])){
    // $kode_barang = $_POST['kode_barang'];
    // $deskripsi = $_POST['deskripsi'];
    // $foto = $_POST['bukti'];
    // $tipe = $_POST['tipe'];
    // $lokasi = $_POST['lokasi'];
    $ak->lapor($_POST['kode_barang'], $_POST['deskripsi'], $_POST['bukti'], $_POST['tipe'], $_POST['lokasi']);
    
}
?>