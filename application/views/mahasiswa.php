<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
</head>
<body>
	<table width="40%" border="1">
		<tr>
			<td>NIM</td>
			<td>Nama</td>
			<td>Jurusan</td>
			<td>Alamat</td>
		</tr>
		<tr>
			<?php foreach ($data as $row): ?>
				<td><?php echo $row->nim; ?></td>
				<td><?php echo $row->nama; ?></td>
				<td><?php echo $row->jurusan; ?></td>
				<td><?php echo $row->alamat; ?></td>
		</tr>
			<?php endforeach;?>
	</table>
</body>
</html>