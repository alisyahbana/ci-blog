<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {
	public function __construct()
	{		

		parent::__construct();

		$this->load->model('membership_model');
		$this->load->model('posts_model');

		$sessionUsername=$this->session->userdata('username');



		
	}

	public function index()
	{
		$this->load->helper('html');
		$data['header']="CI Simple Blog";
		$sessionUsername=$this->session->userdata('username');
		if (isset($sessionUsername)) {
			$data['data_user'] = $this->membership_model->getDataUser($sessionUsername);
		};

		// $data['data_post'] = $this->posts_model->getDataPost();
		$num_rows=$this->posts_model->getDataPost()->num_rows();

		$this->load->library('pagination');

		$config['base_url'] = base_url().'posts/index';
		$config['total_rows'] = $num_rows;
		$config['per_page'] = 3;
		
		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";




		$dari = $this->uri->segment('3');
		$data['data_post'] = $this->posts_model->lihat($config['per_page'], $dari);
		$this->pagination->initialize($config); 

		$data['message'] = $this->session->flashdata('message');

		$this->load->view('includes/header', $data);
		$this->load->view('posts/home', $data);
		$this->load->view('includes/footer');
	}

	public function create(){
		$sessionUsername=$this->session->userdata('username');
		if (!isset($sessionUsername)) {
			redirect('auth/login');
		};

		$data['header']="Create new post";
		if (isset($sessionUsername)) {
			$data['data_user'] = $this->membership_model->getDataUser($sessionUsername);
		};
		$data['id']=$this->session->userdata('username');

		$this->load->view('includes/header', $data);
		$this->load->view('posts/create');
		$this->load->view('includes/footer');
	}

	public function store()
	{
		$this->load->library('form_validation');

		//validation rules
		// $this->form_validation->set_rules('first_name', 'Name', 'trim|required');
		// $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		// $this->form_validation->set_rules('email', 'E-mail', 'required|trim|valid_email|callback_check_if_email_exists');
		// $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|max_length[15]|callback_check_if_username_exists');
		// $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		// $this->form_validation->set_rules('password_confirm', 'Password Confirm', 'trim|required|matches[password]');

		// if ($this->form_validation->run() == FALSE) {
		// 	$data['header']='Create an account';
		// 	$this->load->view('includes/header', $data);
		// 	$this->load->view('auth/signup_form');
		// 	$this->load->view('includes/footer');

		// } else {
			
		// }

		$this->load->model('posts_model');

			if ($query=$this->posts_model->create_new_post()) {
				$this->session->set_flashdata('message','Your Post has been Published.');

				redirect('/');
			}else{
				redirect('posts/create');
			}
	}

	public function show($id)
	{
		$sessionUsername=$this->session->userdata('username');

		$data['header']="Create new post";
		if (isset($sessionUsername)) {
			$data['data_user'] = $this->membership_model->getDataUser($sessionUsername);
		};


		$data['data_post']= $this->posts_model->getSinglePost($id);

		$this->load->view('includes/header', $data);
		$this->load->view('posts/show', $data);
		$this->load->view('includes/footer');
		
		
	}

	public function edit($id)
	{
		$sessionUsername=$this->session->userdata('username');
		if (!isset($sessionUsername)) {
			redirect('auth/login');
		};

		$data['header']="Edit post";
		if (isset($sessionUsername)) {
			$data['data_user'] = $this->membership_model->getDataUser($sessionUsername);
		};

		$data['data_post']= $this->posts_model->getSinglePost($id);

		$this->load->view('includes/header', $data);
		$this->load->view('posts/edit', $data);
		$this->load->view('includes/footer');
	}

	public function update($id)
	{
		$this->load->model('posts_model');

			if ($query=$this->posts_model->update_post($id)) {
				$data['header']='Your Post has been Updated.';

				redirect('/');
			}else{
				redirect('posts/show');
			}
	}

	public function delete($id)
	{
		$this->load->model('posts_model');

		$sessionUsername=$this->session->userdata('username');
		if (!isset($sessionUsername)) {
			redirect('auth/login');
		};

			if ($query=$this->posts_model->delete_post($id)) {
				$this->session->set_flashdata('message','Your Post has been Deleted.');
				redirect('/');
			}else{
				redirect('posts/show');
			}
	}

}

/* End of file posts.php */
/* Location: ./application/controllers/posts.php */