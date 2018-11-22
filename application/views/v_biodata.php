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
				<h4>Selamat datang <?php echo date('F-Y'); ?></h4>
                    
                    <div id="form-biodata">
							<h3>Lengkapi Biodata Peserta KKI</h3>
							<hr/>
							<?php
							echo "<div class='error_msg'>";
							echo validation_errors();
							echo "</div>";
							echo "No id anda ";
							echo form_open('biodata/new_biodata');
							echo form_label('Nama Lengkap : ');
							echo br();
							$nama = array(
								'type'  => 'text',
								'name'  => 'nama',
								'id'    => 'nama',
								'placeholder' => 'Nama Lengkap',
								'class' => 'form-control'
							);
							echo form_input($nama);
							echo br(2);
							echo form_label('Tanggal lahir : ');
							echo br();
							$dob = array(
								'type'  => 'date',
								'name'  => 'tanggallahir',
								'id'    => 'tanggallahir',
								'value' => '',
								'class' => 'form-control'
							);
							echo form_input($dob);
							echo br(2);
							echo form_label('Jenis Kelamin : ');
							echo br();
							echo form_radio('jeniskelamin', 'pria')."Pria";
							echo form_radio('jeniskelamin', 'wanita')."Wanita";
							echo br(2);
							echo form_label('Alamat : ');
							echo br();
							$alamat = array(
								'name'  => 'alamat',
								'id'    => 'alamat',
								'class' => 'form-control'
							);
							echo form_textarea($alamat);
							echo br(2);
							echo form_label('Acara : ');
							echo br();
							$acara = array(
								'name' => 'acara',
								'class' => 'form-control', 
							);
							$pilihanacara = array('diskusi a' => 'diskusi A', 'diskusi b' => 'diskusi B');
							$aktif = 'diskusi A';
							echo form_dropdown($acara, $pilihanacara, $aktif);
							echo br(2);
							echo form_label('Scan KTP : ');
							echo br();
							$ktp = array(
								'type'  => 'file',
								'name'  => 'ktp',
								'id'    => 'ktp',
								'value' => '',
								'class' => 'form-control'
							);
							echo br();
							echo form_input($ktp);
							echo br(2);
							$submit = array(
								'type'  => 'submit',
								'name'  => 'submit',
								'id'    => 'submit',
								'value' => 'Simpan',
								'class' => 'btn btn-primary'
							);
							echo form_input($submit);
							echo form_close();
							?>
						</div>
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