<?php
    include 'database.php';
    $db = new database();
?>
<h3>Data User</h3>
 
<a href="input.php">Input Data</a>
<table border="1">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>NIM</th>
		<th>Username</th>
		<th>Password</th>
        <th>Tipe</th>
        <th>Opsi</th>
	</tr>
	<?php
	$no = 1;
	foreach($db->tampil_data() as $x){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $x['nama']; ?></td>
		<td><?php echo $x['NIM']; ?></td>
		<td><?php echo $x['username']; ?></td>
        <td><?php echo $x['password']; ?></td>
        <td><?php echo $x['Tipe']; ?></td>
		<td>
			<a href="edit.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
			<a href="proses.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>			
		</td>
	</tr>
	<?php 
	}
	?>
</table>