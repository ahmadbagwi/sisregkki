<?php
if (isset($this->session->userdata['logged_in'])) {
	$email = ($this->session->userdata['logged_in']['email']);
	$level = ($this->session->userdata['logged_in']['level']);
}
if ($level != 3){
		redirect(site_url());
	}
?>
<html>
<head>
	<title>Selamat datang pengguna</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
	<h2>Selamat datang di halaman pengguna</h2>
	<div id="profile">
		<?php
		echo "Hello <b id='welcome'><i>" . $email . "</i> !</b>";
		echo "<br/>";
		echo "Hello <b id='Level'><i>" . $level . "</i> !</b>";
		echo "<br/>";
		echo "Your Email is " . $email;
		echo "<br/>";
		?>
		<b id="logout"><a href="logout">Logout</a></b>
	</div>
	<br/>
</body>
</html>