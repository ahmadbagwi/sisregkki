<?php
Class Biodata extends CI_Controller {
	public function __construct() {
		parent::__construct();

// Load database
		$this->load->model('m_biodata');
		$this->load->model('m_login');
	}

// Show login page
	public function index() {
		$this->load->view('v_user');
	}

	public function lengkapi_biodata() {
		$this->load->view('v_biodata');
	}
	public function new_biodata() {

// Check validation for user input in SignUp form
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required|xss_clean');
		$this->form_validation->set_rules('tanggallahir', 'Tanggal', 'trim|required|xss_clean');
		$this->form_validation->set_rules('jeniskelamin', 'Jenis Kelamin', 'trim|required|xss_clean');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required|xss_clean');
		$this->form_validation->set_rules('acara', 'Acara', 'trim|required|xss_clean');
		$this->form_validation->set_rules('ktp', 'KTP', 'trim|required|xss_clean');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('v_dashboard');
		} else {
			$data = array(
				'nama' => $this->input->post('email'),
				'tanggal' => $this->input->post('tanggal'),
				'jeniskelamin' => $this->input->post('jeniskelamin'),
				'alamat' => $this->input->post('alamat'),
				'acara' => $this->input->post('acara'),
				'ktp' => $this->input->post('ktp'),
			);
			$result = $this->m_biodata->biodata_insert($data);
			if ($result == TRUE) {
				$data['message_display'] = 'Biodata berhasil disimpan';
				$this->load->view('v_dashboard', $data);
				//$this->send_confirmation;
			} else {
				$data['message_display'] = 'Periksa kembali input anda';
				$this->load->view('v_biodata', $data);
			}
		}
	}

}

?>