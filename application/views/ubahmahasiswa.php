<!DOCTYPE html>
<html>
<head>
	<title>Menampilkan data mahasiswa</title>
</head>
<body>
	<h3>Ubah Data Mahasiswa</h3>
		<?php echo form_open('cmahasiswa/updatedata'.$hasilmahasiswa->id); ?>
		<table border="1" cellpadding="2">
			<tr>
				<td>NIM</td>
				<td><?php echo form_input('nim', $hasilmahasiswa->nim); ?></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><?php echo form_input('nama', $hasilmahasiswa->nama); ?></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><?php echo form_radio($hasilmahasiswa->jeniskelamin, 'pria'); ?>Pria <?php echo form_radio($hasilmahasiswa->jeniskelamin, 'wanita'); ?>Wanita</td>
			</tr>	
			<tr>	
				<td>IPK</td>
				<td><?php echo form_input('ipk', $hasilmahasiswa->ipk); ?></td>
			</tr>
			<tr>	
				<td>Jurusan</td>
				<td><?php echo form_input('jurusan', $hasilmahasiswa->jurusan); ?></td>
			</tr>
			<tr>
				<td><?php echo form_submit('submit', 'simpan', 'id="submit"'); ?></td>
			</tr>
		</table>
		<?php echo form_close(); ?>
</body>
</html>