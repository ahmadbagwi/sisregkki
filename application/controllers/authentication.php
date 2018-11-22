<?php
//session_start(); //we need to start session in order to access it through CI

Class Authentication extends CI_Controller {

	public function __construct() {
		parent::__construct();

// Load database
		$this->load->model('m_login');
	}

// Show login page
	public function index() {
		$this->load->view('v_login_form');
	}

// Show registration page
	public function user_registration_show() {
		$this->load->view('v_registration_form');
	}

// Validate and store registration data in database
	public function new_user_registration() {

// Check validation for user input in SignUp form
		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('v_registration_form');
		} else {
			$data = array(
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password')),
				'hash' => md5(rand(0, 1000)),
			);
			$result = $this->m_login->registration_insert($data);
			if ($result == TRUE) {
				$data['message_display'] = 'Pendaftaran berhasil';
				$this->load->view('v_login_form', $data);
				//$this->send_confirmation;
			} else {
				$data['message_display'] = 'Email telah digunakan';
				$this->load->view('v_registration_form', $data);
			}
		}
		$email = $data['email'];
	}
	
// Check for user login process
	public function user() {
		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
// If user alredy login, force logout
		if ($this->form_validation->run() == FALSE) {
			if(!isset($this->session->userdata['logged_in'])){
				/*$sess_array = array(
					'email' => '',
					'level' => '',
				);*/
				//$this->session->unset_userdata('logged_in', $sess_array);
				$this->load->view('v_login_form');
			}
		} else {
			$data = array(
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password')),
			);
			$mail = $this->input->post('email');
			$result = $this->m_login->login($data);
			if ($result == TRUE) {
				$email = $this->input->post('email');
				$result = $this->m_login->read_user_information($email);
// Check level user account and set where to dashboard
				$level = $this->db->query("SELECT * FROM user WHERE email = '$mail'")->row()->level;
				if ($result != false) {
					$session_data = array(
						'email' => $result[0]->email,
						'level' => $level,
					);
// Add user data in session
					$this->session->set_userdata('logged_in', $session_data);
					if ($level == 1) {
						$this->load->view('v_super_admin');
					}
					if ($level == 2) {
						$this->load->view('v_admin');
					}
					if ($level == 3) {
						$this->load->view('v_dashboard');
					}	
				}
			} else {
				$data = array(
					'error_message' => 'Input anda salah atau email belum di verifikasi, cek email verifikasi di inbox atau spam'
				);
				$this->load->view('v_login_form', $data);
			}
		}
	}

// Logout from admin page
	public function logout() {

// Removing session data
		$sess_array = array(
			'email' => '',
			'level' => '',
		);
		$this->session->unset_userdata('logged_in', $sess_array);
		$data['message_display'] = 'Anda telah keluar';
		redirect(site_url());
	}

}

?>