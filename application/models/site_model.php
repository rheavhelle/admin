<?php

class Site_model extends CI_Model {

	function get_categories($id = NULL, $limit = null, $offset = null)
	{
		$this->db->select('*');
		$this->db->from('categories');
		if($id){
			$this->db->where('cat_id', $id);
		}
		$this->db->where('isactive', 1);
		if($id){
			return $this->db->get()->row();
		}
		else{
			if($limit != null){
				$this->db->limit($limit,$offset);
			}
			return $this->db->get()->result();
		}
	}

	function add_record($data)
	{
		$this->db->insert('categories', $data);
		return;
	}

	function update_record($data)
	{
		$this->db->where('cat_id',1);
		$this->db->update('categories', $data);
	}

	function delete_row()
	{
		$this->db->where('cat_id', $this->uri->segment(3));
		$this->db->delete('categories');
	}

}