<?php
class signup extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();
		$this->load->model('user_model');
	}
	
	function index()
	{
		
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|alpha|min_length[3]|max_length[30]');
		$this->form_validation->set_rules('Emp_address', 'Address', 'trim|required|alpha|min_length[3]|max_length[30]');
		$this->form_validation->set_rules('Emp_tel', 'Telephone', 'trim|required|numeric|min_length[3]|max_length[30]');
		$this->form_validation->set_rules('Emp_type', 'Employee Type', 'trim|required|alpha|min_length[3]|max_length[30]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[cpassword]');
		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim');
		
		
		if ($this->form_validation->run() == FALSE)
        {
		
			$this->load->view('signup_view');
        }
		else
		{
			
			$data = array(
				'fname' => $this->input->post('fname'),
				'Emp_address' => $this->input->post('Emp_address'),
				'email' => $this->input->post('email'),
				'Emp_tel' => $this->input->post('Emp_tel'),
				'Emp_type' => $this->input->post('Emp_type'),
				'Emp_password' => $this->input->post('password')
			);
			
			if ($this->user_model->insert_user($data))
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center">You are Successfully Registered! Please login to access your Profile!</div>');
				redirect('signup/index');
			}
			else
			{
				
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
				redirect('signup/index');
			}
		}
	}

	

}