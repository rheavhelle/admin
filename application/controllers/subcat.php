<?php

class Subcat extends CI_Controller {

	function index()
	{
		$this->load->view('subcat');
	}

	function create()
	{
		$this->load->model('site_model', 'categories');
		$data['categories'] = $this->categories->get_categories;
 
 		$data = array (
				'name' => $this->input->post('name')
			);

		$this->subcat_model->add_record($data);
		$this->index();
	}


}