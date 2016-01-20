<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts_model extends CI_Model {

	function getDataPost(){
		$query = $this->db->get('posts');
		return $query;
	}

	function create_new_post(){

		$new_post = array(
			'author_id' => $this->input->post('author_id') , 
			'title' => $this->input->post('title') ,
			'body' => $this->input->post('body')
			);

		$insert=$this->db->insert('posts', $new_post);
		return $insert;
	}

	function lihat($sampai,$dari){
		$this->db->order_by('created_at', 'DESC');
		return $query = $this->db->get('posts',$sampai,$dari)->result();
		
	}

	function getSinglePost($id){
		$this->db->where('id', $id);

		return $this->db->get('posts')->row();
	}

	function update_post($id){
		$new_post = array(
			'author_id' => $this->input->post('author_id') , 
			'title' => $this->input->post('title') ,
			'body' => $this->input->post('body')
			);
		$this->db->where('id', $id);
		$update=$this->db->update('posts', $new_post);
		return $update;
	}

	function delete_post($id){
		$this->db->where('id', $id);
		$delete=$this->db->delete('posts');
		return $delete;
	}

}

/* End of file posts_model.php */
/* Location: ./application/models/posts_model.php */