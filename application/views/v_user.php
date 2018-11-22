<html>
<?php
if (isset($this->session->userdata['logged_in'])) {
	$email = ($this->session->userdata['logged_in']['email']);
	$level = ($this->session->userdata['logged_in']['level']);
}
if ($level != 3){
	redirect(site_url());
}
?>
<head>
	<title>Lengkapi Biodata Peserta KKI</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>css/simple-sidebar.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id="wrapper">
		<!-- Sidebar -->
		<div id="sidebar-wrapper">
			<ul class="sidebar-nav">
				<li class="sidebar-brand">
					<a href="#">
						SIKKI
					</a>
				</li>
				<li>
					<a href="<?php echo base_url() ?>index.php/biodata/index">Dashboard</a>
				</li>
				<li>
					<a href="<?php echo base_url() ?>index.php/biodata/lengkapi_biodata">Biodata</a>
				</li>
				<li>
					<a href="#">Acara</a>
				</li>
				<li>
					<a href="#">Cetak</a>
				</li>
			</ul>
		</div>
		<!-- /#sidebar-wrapper -->

		<!-- Page Content -->
		<div id="page-content-wrapper">
			<div class="container-fluid">
				<h1>Simple Sidebar</h1>
				<h4>Selamat datang <?php echo date('F-Y'); ?></h4>

				<?php echo $email; echo br(2); echo $level; echo br(2);?>
				<a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Toggle Menu</a>
			</div>
		</div>
		<!-- /#page-content-wrapper -->

	</div>
	<!-- /#wrapper -->
	<script src="<?php echo base_url(); ?>jquery/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.bundle.min.js"></script>
	<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
</body>


</html>