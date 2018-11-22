<html>
<?php
if (isset($this->session->userdata['logged_in'])) {
	header("location: http://localhost/kki/index.php/authentication/user");
}
?>
<head>
	<title>Registrasi Peserta KKI</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id="main">
		<div id="login">
			<h2>Registratsi Peserta KKI</h2>
			<hr/>
			<?php
				echo "<div class='error_msg'>";
						echo validation_errors();
				echo "</div>";
				echo form_open('authentication/new_user_registration');
				/*	echo form_label('Buat Akun : ');
					echo"<br/>";
					echo form_input('username');
					echo "<div class='error_msg'>";
					if (isset($message_display)) {
					echo $message_display;
					}
					echo "</div>";
				echo"<br/>";*/
				echo form_label('Email : ');
				echo"<br/>";
				$data = array(
				'type' => 'email',
				'name' => 'email'
				);
				echo form_input($data);
				if (isset($message_display)) {
					echo $message_display;
					}
				echo br(2);
				echo form_label('Password : ');
				echo br();
				echo form_password('password');
				echo br(2);
				echo form_submit('submit', 'Daftar');
				echo form_close();
				?>
		<a href="<?php echo base_url() ?>index.php/authentication/index">Jika anda sudah punya akun, klik disini untuk login</a>
	</div>
</div>
</body>
</html>