<?php

class Subcat_model extends CI_Model {

	function get_subcats()
	{
		$query = $this->db->get('data');
		return $query->result();
	}

	function getCategories($id = NULL) 
	{
		$this->db->select('*');
		$this->db->from('categories');
		$this->db->where('cat_id', $id);

		return $this->db->get()->result();
	}

	function add_record($data = NULL)
	{
		if($data){
			return $this->db->insert('sub_categories', $data);
		}
		else {
			return false;
		}
	}

	function update_records($data)
	{
		$this->db->where('id',1);
		$this->db->update('data', $data);
	}

	function delete_row()
	{
		$this->db->where('id', $this->uri->segment(3));
		$this->db->delete('data');
	}

}