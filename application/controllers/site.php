<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('membership_model');

		$sessionUsername=$this->session->userdata('username');


		if (isset($sessionUsername)) {
			return true;
		} else{
			redirect('login');
		}
	}

	public function index()
	{
		
	}

	public function members_area()
	{
		$this->load->helper('html');
		$data['username']=$this->session->userdata('username');
		$sessionUsername=$this->session->userdata('username');
		$data['header']='Hello '.$sessionUsername;
		$data['data_user'] = $this->membership_model->getDataUser($sessionUsername);
		
		$this->load->view('includes/header', $data);
		$this->load->view('member_page', $data);
		$this->load->view('includes/footer');

	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

	function do_upload()
	{
		$sessionUsername=$this->session->userdata('username');
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '2048';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$config['file_name']  = $sessionUsername;
		$config['overwrite']=TRUE;

		
		

		$this->load->library('upload', $config);

		if ( !$this->upload->do_upload())
		{
			$data['error'] = array('error' => $this->upload->display_errors());
			 $error=$this->upload->display_errors();
			 echo '
			  	<div class="alert alert-danger fade in">
    			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    			<strong>Warning!</strong> '. $error.
  				'</div>
			';
			 // echo $error;
			 $this->members_area();

			//  // $this->load->view('member_page', $data);

			// echo ("<SCRIPT LANGUAGE='JavaScript'>
   // 			window.alert('$error');
   //  		</SCRIPT>");

   //  		redirect('site/members_area','refresh');

			

			
		}
		else
		{
			$data['error'] = "Upload Success";
			$filename=$this->upload->data('file_name');
			// echo $data['error'];
			echo '
			  	<div class="alert alert-info fade in">
    			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    			<strong>Info!</strong> Upload Success
  				</div>
			';
			$this->membership_model->upLoadFoto($sessionUsername, $filename);
			$this->members_area();

			
		}
	}

}

/* End of file site.php */
/* Location: ./application/controllers/site.php */