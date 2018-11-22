<?php
class Cmahasiswa extends CI_Controller {
	function index() {
		$this->load->model('mmahasiswa');
		$data['hasilmahasiswa'] = $this->mmahasiswa->ambildata();
		$this->load->view('vmahasiswa', $data);
	}
	function tambahdata() {
		if ($this->input->post('submit')) {
			$this->load->model('mmahasiswa');
			$this->mmahasiswa->simpan();
			redirect('cmahasiswa/index');
		}
		$this->load->view('tambahmahasiswa');
	}
	function updatedate($id) {
		if ($_POST==NULL) {
			$this->load->model('mmahasiswa');
			$data['hasilmahasiswa'] = $this->mmahasiswa->select($id);
			$this->load->view('ubahmahasiswa', $data);
		}
		else {
			$this->load->model('mmahasiswa');
			$this->mmahasiswa->update($id);
			redirect('cmahasiswa/index');
		}
	}
}
?>