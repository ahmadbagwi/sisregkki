<html>
<head>
	<title>Login KKI</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
	<?php
	if (isset($logout_message)) {
		echo "<div class='message'>";
		echo $logout_message;
		echo "</div>";
		}
	
	if (isset($message_display)) {
		echo "<div class='message'>";
		echo $message_display;
		echo "</div>";
		}
	?>
<div id="main">
	<div id="login">
		<h2>Login KKI</h2>
		<hr/>
		<?php echo form_open('authentication/user'); ?>
		<?php
			echo "<div class='error_msg'>";
			if (isset($error_message)) {
			echo $error_message;
			}
			echo validation_errors();
			echo "</div>";
		?>
		<label>Email :</label>
		<input type="text" name="email" id="email" placeholder="email"/><br /><br />
		<label>Password :</label>
		<input type="password" name="password" id="password" placeholder="**********"/><br/><br />
		<input type="submit" value=" Login " name="submit"/><br />
		<a href="<?php echo base_url() ?>index.php/authentication/user_registration_show">Jika belum punya akun, klik disini untuk daftar</a>
			<?php echo form_close(); ?>
	</div>
</div>
</body>
</html>