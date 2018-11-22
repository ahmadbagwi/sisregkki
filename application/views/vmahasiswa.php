<!DOCTYPE html>
<html>
<head>
	<title>Menampilkan data mahasiswa</title>
</head>
<body>
<h3><?php echo anchor('cmahasiswa/tambahdata', 'Tambah Data'); ?></h3>
<?php
	if (empty($hasilmahasiswa)) {
		echo "Tidak ada data";
	}
	else {
	?>
		<h3>Daftar Mahasiswa</h3>
		<table border="1" cellpadding="2">
			<tr>
				<th>No</th>
				<th>NIM</th>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>IPK</th>
				<th>Jurusan</th>
				<th>Kontrol</th>
			</tr>
			<?php
			$no = 1;
			foreach ($hasilmahasiswa as $data):
				?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $data->nim; ?></td>
				<td><?php echo $data->nama; ?></td>
				<td><?php echo $data->jeniskelamin; ?></td>
				<td><?php echo $data->ipk; ?></td>
				<td><?php echo $data->jurusan; ?></td>
				<td><a href="updatedata/<?php echo $data->id; ?>">Edit</a></td>
			</tr>
				<?php
				$no++;
				endforeach;
				?>
		</table>
	<?php
	}
	?>
</body>
</html>