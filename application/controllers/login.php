<?php
class login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url','html'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();
		$this->load->model('user_model');
	}
    public function index()
    {
		$email = $this->input->post("email");
        $password = $this->input->post("password");

		
		$this->form_validation->set_rules("email", "Email-ID", "trim|required");
		$this->form_validation->set_rules("password", "Password", "trim|required");
		
		if ($this->form_validation->run() == FALSE)
        {
		
			$this->load->view('login_view');
		}
		else
		{
			
			$uresult = $this->user_model->get_user($email, $password);
			if (count($uresult) > 0)
			{
				
				$sess_data = array('login' => TRUE, 'uname' => $uresult[0]->fname, 'uid' => $uresult[0]->id);
				$this->session->set_userdata($sess_data);
					redirect('ControlSubstances/csu_list');
				}
				/*
				if($uresult[0]->Emp_type =="forensicPathologist"){
					redirect("forensicPathologist/index");	
				}else if($uresult[0]->Emp_type =="labTechnician"){
					redirect("labTechnician/index");
				}else if($uresult[0]->Emp_type =="forensicPoliceOfficer"){
					redirect("forensicPoliceOfficer/index");
				}else if($uresult[0]->Emp_type =="forensicToxicologist"){
					redirect("forensicToxicologist/index");
				}else if($uresult[0]->Emp_type =="qualityAssuranceEngineer"){
					redirect("qualityAssuranceEngineer/index");
				}else if($uresult[0]->Emp_type =="geneticEngineer"){
					redirect("geneticEngineer/index");
				}
				*/
			else
			{
				$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Wrong Email-ID or Password!</div>');
				redirect('login/index');
			}
		}
    }
}