<?php
class Initial_test extends CI_Controller{
	public function index(){
		
		$this->load->view('template/header');
		$this->load->view('template/nav');
		$this->load->view('template/side-nav');
		$this->load->view('home');
		$this->load->view('template/footer');
	}

	public function add_initial_test(){
		$title['title'] = 'Initial Test';
		$data['data'] = 'Initial Test Details';
		$this->load->model('CSI_models');
		$data['groups_st'] = $this->CSI_models->load_it_dnaA();
		$data['groups_emp'] = $this->CSI_models->load_emp_it();
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('template/side-nav');
		$this->load->view('initial_test_view',$data);
		$this->load->view('template/footer');
	}

	public function save(){
			$this->load->helper(array('form','url'));
			$this->load->model('CSI_models');     
			$unit_st = $this->input->post('load_it_dnaA');
			$unit_emp = $this->input->post('load_emp_it');
			$unitid_st = $this->CSI_models->get_it_dnaA_id($unit_st);
			$unitid_emp = $this->CSI_models->get_emp_it($unit_emp);

            foreach ($unitid_emp as $emp)  {
            
				foreach ($unitid_st as $id) {
			
				$user = array(
				'initial_test_details' => $this->input->post('initialTestDetails'),
				'Analyst_Emp_ID' => $emp->id,
				'I_Analysis_ID'=> $id->analysis_id,
				);
					$this->load->model('CSI_models');
					$this->CSI_models->add_initial_test($user);
					redirect('initial_test/initial_test_list');
				}
			}
	}


		public function initial_test_list(){
		$title['title']="Initial Test Details";
		$data['data'] = "initial Test Details";
		$this->load->model('CSI_models');
		$data['user'] = $this->CSI_models->get_initial_test();
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('template/side_nav_list');
		$this->load->view('initial_test_list',$data);
		$this->load->view('template/footer');

	}

	public function edit_initial_test($ID){
		$title['title'] = 'Initial Test Details';
		$data['data'] = 'Update Initial Test Details';
		$this->load->model('CSI_models');
		$data['groups_st'] = $this->CSI_models->load_it_dnaA();
		$data['groups_emp'] = $this->CSI_models->load_emp_it();
		$data['user'] = $this->CSI_models->get_initial_test_update($ID);
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('edit_initial_test',$data);
		$this->load->view('template/footer');
	}

		public function update(){
			$this->load->helper(array('form','url'));
			$ID = $this->input->post('it_id');
			$this->load->model('CSI_models');     
			$unit_st = $this->input->post('load_it_dnaA');
			$unit_emp = $this->input->post('load_emp_it');
			$unitid_st = $this->CSI_models->get_it_dnaA_id($unit_st);
			$unitid_emp = $this->CSI_models->get_emp_it($unit_emp);
            foreach ($unitid_emp as $emp)  {
			foreach ($unitid_st as $id) {
			$user = array(
				'initial_test_details' => $this->input->post('initialTestDetails'),
				'Analyst_Emp_ID' => $emp->id,
				'I_Analysis_ID'=> $id->analysis_id,
			);
					$this->load->model('CSI_models');
					$this->CSI_models->update_initial_test($user,$ID);
					redirect('initial_test/initial_test_list');
			}
	}
		}

		public function delete_initial_test($ID){
					$this->load->model('CSI_models');
					$this->CSI_models->delete_initial_test($ID);
					redirect('initial_test/initial_test_list');
		}


}


?>