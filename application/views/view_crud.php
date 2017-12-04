<!DOCTYPE html>
<html>
<head>
	<title> Aplikasi CodeIgniter Pertama</title>

</head>
<body>

<?php echo form_open('mahasiswa/tambah')?>

<pre>
	<h1><b>Tambah Data Mahasiswa</b></h1>

	Nim       : <input type="text" name="nim" placeholder="nim" required autofocus ></br>

	Nama      : <input type="text" name="nama" placeholder="nama" required></br>

	Jurusan   : <input type="text" name="jurusan" placeholder="jurusan" required></br>

	Alamat    : <input type="text" name="alamat" placeholder="alamat" required></br>

	<input type="submit" value="simpan">

</pre>
	<?php form_close(); ?>
	
	<hr>
	<table width="40%" border="1">
		<tr>
			<td colspan="6"> <h1>Data Mahasiswa</h1></td>
		</tr>
		<tr>
			<td>Nim</td>
			<td>Nama</td>
			<td>Jurusan</td>
			<td>Alamat</td>
			<td colspan="2">Aksi</td>
		</tr>
		<tr>
			<?php foreach($data as $row): ?>
				<td><?php echo $row->nim;?></td>
				<td><?php echo $row->nama;?></td>
				<td><?php echo $row->jurusan;?></td>
				<td><?php echo $row->alamat;?></td>
				<td><a href='<?php base_url(); ?>crud/edit/<?php echo $row->nim;?>'>Edit</a></td>
				<td><a href='<?php base_url(); ?>crud/hapus/<?php echo $row->nim;?>'>Hapus</a></td>
		</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>