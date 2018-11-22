<!DOCTYPE html>
<html>
<head>
	<title>Input Data Mahasiswa</title>
</head>
<body>
	<h2>Input Data Mahasiswa</h2>
	<?php echo form_open('cmahasiswa/tambahdata'); ?>
	<ul>
		<li>NIM: <?php echo form_input('nim'); ?></li>
		<li>Nama: <?php echo form_input('nama'); ?></li>
		<li>Jenis Kelamin: <?php echo form_radio('jeniskelamin', 'pria'); ?>Pria <?php echo form_radio('jeniskelamin', 'wanita'); ?>Wanita</li>
		<li>IPK: <?php echo form_input('ipk'); ?></li>
		<li>Jurusan: <?php echo form_input('jurusan'); ?></li>
		<li><?php echo form_submit('submit', 'simpan', 'id="submit"'); ?></li>
	</ul>
</body>
</html>