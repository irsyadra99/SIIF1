<?php
    include '../class/akademisi.php';
    $ak= new akademisi();
    $ak->lapor();
    // if ($_SERVER["REQUEST_METHOD"] == "POST")
    //     {
    //         $ak->lapor($_POST['kode_barang'], $_POST['deskripsi'], $_POST['bukti'], $_POST['tipe'], $_POST['lokasi']);
    //     }
    //if(isset($_POST['lapor'])){
        // $kode_barang = $_POST['kode_barang'];
        // $deskripsi = $_POST['deskripsi'];
        // $foto = $_POST['bukti'];
        // $tipe = $_POST['tipe'];
        // $lokasi = $_POST['lokasi'];
        // $ak->lapor($kode_barang, $deskripsi, $foto, $tipe, $lokasi);
    //}
?>
<html>
<form method="POST" name="lapor">
<tr>
        <th>Kode Barang</th>
        <td> : </td>
        <td>
            <input type="text" name="kode_barang"/> 
        </td>
    </tr><br>
    <tr>
        <th>Deskripsi</th>
        <td> : </td>
        <td>
            <input type="text" name="deskripsi"/>
        </td>
    </tr><br>
    <tr>
        <th>Bukti Foto</th>
        <td> : </td>
        <td>
            <input type="text" name="bukti"/>
        </td>
    </tr><br>
    <tr>
        <th>Tipe</th>
        <td> : </td>
        <td>
            <input type="text" name="tipe"/>
        </td>
    </tr><br>
    <tr>
        <th>Lokasi</th>
        <td> : </td>
        <td>
            <input type="text" name="lokasi"/>
        </td>
    </tr><br>
    <tr>
        <th></th>
        <td> </td>
        <td>
            <input type="submit" value="Submit"/>
        </td>
    </tr>
    <!-- Kode Barang :
        <input type="text" name="kode_barang"/><br>
    Deskripsi :
        <input type="text" name="deskripsi"/><br>
    Bukti Foto :
        <input type="text" name="bukti"/><br>
    Tipe :
        <input type="text" name="tipe"/><br>
    Lokasi :
        <input type="text" name="lokasi"/><br>
        <input type="submit" value="submit"/> -->
</form>
</html>

