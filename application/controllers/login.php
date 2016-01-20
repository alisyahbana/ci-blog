<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('html');
	}

	public function index()
	{
		$data['header']="Login, Please.";
		$this->load->view('includes/header', $data);
		$this->load->view('auth/login_form');
		$this->load->view('includes/footer');
		// $this->load->view('login_view');
	}

	public function validate_credentials(){
		$this->load->model('membership_model');
		$query=$this->membership_model->validate();

		if ($query) {
			$data= array(
				'username'=>$this->input->post('username'),
				'is_logged_in'=> true
				);
			$this->session->set_userdata($data);
			redirect('site/members_area');
		}else{
			$this->index();
		}
	}

	public function register()
	{
		$data['header']='Create an account';
		$this->load->view('includes/header', $data);
		$this->load->view('signup_form');
		$this->load->view('includes/footer');

	}

	function create_member()
	{
		$this->load->library('form_validation');

		//validation rules
		$this->form_validation->set_rules('first_name', 'Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email', 'E-mail', 'required|trim|valid_email|callback_check_if_email_exists');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|max_length[15]|callback_check_if_username_exists');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('password_confirm', 'Password Confirm', 'trim|required|matches[password]');

		if ($this->form_validation->run() == FALSE) {
			$data['header']='Create an account';
			$this->load->view('includes/header', $data);
			$this->load->view('signup_form');
			$this->load->view('includes/footer');

		} else {
			$this->load->model('membership_model');

			if ($query=$this->membership_model->create_member()) {
				$data['header']='Your Account has been Created, You may no login.';

				$this->load->view('includes/header', $data);
				$this->load->view('login_form');
				$this->load->view('includes/footer');
			}else{
				$this->load->view('includes/header');
				$this->load->view('signup_form');
				$this->load->view('includes/footer');
			}
		}
	}



	function check_if_username_exists($requested_username){
		$this->load->model('membership_model');
		$username_available=$this->membership_model->check_if_username_exists($requested_username);
		if ($username_available) {
		return TRUE;
		}else{
			return FALSE;
		}
	}

	function check_if_email_exists($requested_email){
		$this->load->model('membership_model');
		$email_available=$this->membership_model->check_if_email_exists($requested_email);
		if ($email_available) {
		return TRUE;
		}else{
			return FALSE;
		}
	}


	public function v2()
	{
		$this->load->view('includes/header');
		$this->load->view('login_form2');
		$this->load->view('includes/footer');
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */