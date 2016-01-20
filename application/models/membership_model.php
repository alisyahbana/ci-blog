<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Membership_model extends CI_Model {

	function validate(){
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$query=$this->db->get('users');

		if ($query->num_rows()==1) {
			return true;
		}
	}

	function create_member(){
		$username=$this->input->post('username');

		$new_member_insert_data = array(
			'first_name' => $this->input->post('first_name') , 
			'last_name' => $this->input->post('last_name') ,
			'email' => $this->input->post('email') ,
			'username' => $this->input->post('username') ,
			'password' => md5($this->input->post('password'))
			);

		$insert=$this->db->insert('users', $new_member_insert_data);
		return $insert;
	}

	function check_if_username_exists($username){
		$this->db->where('username', $username);
		$result=$this->db->get('users');

		if ($result->num_rows()>0) {
			return FALSE; //username taken
		}else {
			return TRUe; //username available
		}
	}

	function check_if_email_exists($email){
		$this->db->where('email', $email);
		$result=$this->db->get('users');

		if ($result->num_rows()>0) {
			return FALSE; //email taken
		}else {
			return TRUe; //email available
		}
	}

	function getDataUser($username){
		$this->db->where('username', $username);
		$result=$this->db->get('users');
		return $result->result();
	}

	function uploadFoto($username, $filename){
		$this->db->where('username', $username);
		$this->db->set('profpict', $filename);
		$this->db->update('users');
	}

	

}

/* End of file membership_model.php */
/* Location: ./application/models/membership_model.php */