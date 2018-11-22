/*Script untuk memeriksa input dari form registrasi dan form login, sehingga menampilkan notifikasi sesuai yang diinginkan ketika terjadi ketidaksesuaian input*/
/*register*/
var nama, email, password, hp, alamat, nama_kosong, email_kosong, password_kosong, hp_kosong, alamat_kosong;
function validasi(){
	nama = document.getElementById("nama").value;
	email = document.getElementById("email").value;
	password = document.getElementById("password").value;
	hp = document.getElementById("hp").value;
	alamat = document.getElementById("alamat").value;
	if (nama == "" && email == "" && password == "" && hp == "" && alamat == "")	{
		alert = "<div class='alert alert-danger alert-dismissable fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Perhatian!</strong> nama, email, password, hp, alamat tidak boleh kosong";
	} else if (nama == "" && email !== null && password !== null && hp !== null && alamat !== null) {
		alert = "<div class='alert alert-danger alert-dismissable fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Perhatian!</strong> nama tidak boleh kosong";
	} else if (nama !== null && email == "" && password =="" && hp =="" && alamat =="") {
		alert = "<div class='alert alert-danger alert-dismissable fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Perhatian!</strong> email, password, hp, alamat tidak boleh kosong";
	} else if (email.indexOf('@') <= 0) {
		alert = "<div class='alert alert-danger alert-dismissable fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Perhatian!</strong> email salah tidak mengandung karakter @";
	} else if (email.indexOf('.com') <= 0) {
		alert = "<div class='alert alert-danger alert-dismissable fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Perhatian!</strong> email salah tidak mengandung ekstensi domain .com";
	} else if (nama !== null && email !== null && password == "" && hp == "" && alamat == "") {
		alert = "<div class='alert alert-danger alert-dismissable fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Perhatian!</strong> password, hp, alamat tidak boleh kosong";
	} else if (nama !==null && email !== null && password !== null && hp == "" && alamat !== null) {
		alert = "<div class='alert alert-danger alert-dismissable fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Perhatian!</strong> hp, alamat tidak boleh kosong";
	} else if (nama !== null && email !== null && password !== null && hp !== null && alamat == "") {
		alert = "<div class='alert alert-danger alert-dismissable fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Perhatian!</strong> alamat tidak boleh kosong";
	} else {
		alert = "<div class='alert alert-success alert-dismissable fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Pendaftaran Berhasil!</strong> semua data terisi dengan benar";
	}
	document.getElementById("error").innerHTML = alert;

}
/*login*/
var email_login, password_login;
function validasi_login(){
	email_login = document.getElementById("email_login").value;
	password_login = document.getElementById("password_login").value;
	if (email_login == "" && password_login == "")	{
		alert_login = "<div class='alert alert-danger alert-dismissable fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Perhatian!</strong> email, password tidak boleh kosong";
	} else if (email_login !== null && password_login == "") {
		alert_login = "<div class='alert alert-danger alert-dismissable fade in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Perhatian!</strong> password tidak boleh kosong";
	}
	document.getElementById("error_login").innerHTML = alert_login;
}

