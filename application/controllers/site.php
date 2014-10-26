<?php

class Site extends CI_Controller {

	function index()
	{
		$data = array();

		if($query = $this->site_model->get_categories())
		{
			$data['records'] = $query;
		}

		$this->load->view('admin', $data);
	}

	function create()
	{
		$data = array(
			'category' => $this->input->post('category'),
			'description' => $this->input->post('description')
			);
		$this->site_model->add_record($data);
		$this->index();
	}

	function update()
	{
		$data = array (
			'category' => "Restaurants",
			'description' => "test test test"
			);

		$this->site_model->update_record($data);
	}

	function delete()
	{
		$this->site_model->delete_row();
		$this->index();
	}

}