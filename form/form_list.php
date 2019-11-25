<?php
    include '../class/database.php';
    $db = new database();
?>
<h3>Data User</h3>
 
<a href="input.php">Input Data</a>
<table border="1">
	<tr>
		<th>Nama Model</th>
		<th>Kode Barang</th>
		<th>Tanggal Masuk</th>
		<th>Asal Barang</th>
		<th>Foto</th>
        <th>Jumlah</th>
        <th>Lokasi</th>
        <th>Tipe Barang</th>
	</tr>
	<?php
	$no = 1;
	foreach($db->tampil_data() as $x){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $x['nama_model']; ?></td>
		<td><?php echo $x['kode_barang']; ?></td>
		<td><?php echo $x['tanggal_masuk']; ?></td>
        <td><?php echo $x['asal_barang']; ?></td>
        <td><?php echo $x['foto']; ?></td>
        <td><?php echo $x['jumlah']; ?></td>
        <td><?php echo $x['lokasi']; ?></td>
        <td><?php echo $x['tipe_barang']; ?></td>
		<td>
			<a href="edit.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
			<a href="proses.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>			
		</td>
	</tr>
	<?php 
	}
	?>
</table>