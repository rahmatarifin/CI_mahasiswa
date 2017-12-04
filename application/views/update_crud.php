<!DOCTYPE html>
<html>
<head>
	<title>Update Data</title>
</head>
<body>
<?php foreach ($data as $row): ?>
	<?php echo form_open('crud/update/'); ?>
	<h1>Edit Data</h1>
	<table>
		<tr>
			<td>Nim</td>
			<td><input type="text" name="nim" value="<?php echo $row->nim; ?>"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" value="<?php echo $row->nama; ?>"></td>
		</tr>
		<tr>
			<td>Jurusan</td>
			<td><input type="text" name="jurusan" value="<?php echo $row->jurusan; ?>"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><input type="text" name="alamat" value="<?php echo $row->alamat; ?>"></td>
		</tr>
		

	</table>
	<input type="submit" value="simpan">
<?php endforeach; ?>
<?php form_close(); ?>
</body>
</html>