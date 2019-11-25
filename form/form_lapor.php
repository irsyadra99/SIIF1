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
<?php
if(isset($_POST['lapor'])){
    $kode_barang = $_POST['kode_barang'];
    $deskripsi = $_POST['deskripsi'];
    $foto = $_FILES['bukti']['name'];;
    $tipe = $_POST['tipe'];
    $lokasi = $_POST['lokasi'];
    $ak= new akademisi();
    $ak->lapor($kode_barang, $deskripsi, $foto, $tipe, $lokasi);
    move_uploaded_file($_FILES['bukti']['tmp_name'], "gambar/".$_FILES['bukti']['name']);
    echo"<script>alert('Gambar Berhasil diupload !');history.go(-1);</script>";
}
?>