<?php

class Login extends CI_Controller {

	function index()
	{
		$this->load->view('default/header');
		$this->load->view('login_form');
		$this->load->view('default/footer');
	}

	function validate_credentials()
	{
		$this->load->model('membership_model');
		$query = $this->membership_model->validate();

		if($query) // if the user's credentials are validated
		{
			$data = array(
				'username' => $this->input->post('username'),
				'is_logged_in' => true
				);
				$this->session->set_userdata($data);
				redirect('site/members_area');
		}
	}

	function signup()
	{
		$this->load->view('default/header');
		$this->load->view('signup_form');
		$this->load->view('default/footer');
	}

	function create_member()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'trim|required|callback_check_if_username_exists');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('password_confirm', 'Confirm Password', 'trim|required|matches[password]');

		if($this->form_validation->run() == FALSE) // didn't validate
		{
			$this->load->view('default/header');
			$this->load->view('signup_form');
			$this->load->view('default/footer');
		} 

		else 
		{
			$this->load->model('membership_model');

			if ($query = $this->membership_model->create_member())
			{
				$data['account_created'] = "Your account has been created. <br/><br/> You may now login.";

				$this->load->view('default/header');
				$this->load->view('login_form', $data);
				$this->load->view('default/footer');
			}
			else 
			{
				$this->load->view('default/header');
				$this->load->view('signup_form');
				$this->load->view('default/footer');
			}

		}
	}


	function check_if_username_exists($requested_username)
	{
		$this->load->model('membership_model');
		$username_available = $this->membership_model->check_if_username_exists($requested_username);

		if($username_available){
			return TRUE;
		} else {
			return FALSE;
		}
	}

}