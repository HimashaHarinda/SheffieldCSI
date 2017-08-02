<?php
class laboratory extends CI_Controller{
	public function index(){
		
		$this->load->view('template/header');
		$this->load->view('template/nav');
		$this->load->view('template/side-nav');
		$this->load->view('home');
		$this->load->view('template/footer');
	}

	public function add_laboratory(){
		$title['title'] = 'Laboratory';
		$data['data'] = 'Insert Laboratory';
		$this->load->model('CSI_models');
		$data['groups'] = $this->CSI_models->load_employee_laboratory();
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('template/side-nav');
		$this->load->view('laboratory_view',$data);
		$this->load->view('template/footer');
	}

	public function save(){
			$this->load->helper(array('form','url'));
			$this->load->model('CSI_models');     
			$unit = $this->input->post('load_employee_laboratory');
			$unitid = $this->CSI_models->get_employee_l_id($unit);
			foreach ($unitid as $id) {
			
			$user = array(
				'lab_type' => $this->input->post('lab_type'),
				'lab_capacity' => $this->input->post('lab_capacity'),
				'lab_info' => $this->input->post('lab_info'),

				'lab_emp_id' => $id->id,
			);
					$this->load->model('CSI_models');
					$this->CSI_models->add_laboratory($user);
					redirect('laboratory/laboratory_list');
			}
	}


		public function laboratory_list(){
		$title['title']="Laboratory";
		$data['data'] = "Laboratory";
		$this->load->model('CSI_models');
		$data['user'] = $this->CSI_models->get_laboratory();
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('template/side_nav_list');
		$this->load->view('laboratory_list',$data);
		$this->load->view('template/footer');

	}

	public function edit_laboratory($ID){
		$title['title'] = 'Update Laboratory';
		$data['data'] = 'Update Details';
		$this->load->model('CSI_models');
		$data['groups'] = $this->CSI_models->load_employee_laboratory();
		$data['user'] = $this->CSI_models->get_laboratory_update($ID);
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('edit_laboratory',$data);
		$this->load->view('template/footer');
	}

		public function update(){
			$this->load->helper(array('form','url'));
			$ID = $this->input->post('l_e_id');	
			$this->load->model('CSI_models');     
			$unit = $this->input->post('load_employee_laboratory');
			$unitid = $this->CSI_models->get_employee_l_id($unit);
			foreach ($unitid as $id) {
			$user = array(
				'lab_type' => $this->input->post('lab_type'),
				'lab_capacity' => $this->input->post('lab_capacity'),
				'lab_info' => $this->input->post('lab_info'),

				'lab_emp_id' => $id->id,
			);
					$this->load->model('CSI_models');
					$this->CSI_models->add_laboratory($user,$ID);
					redirect('laboratory/laboratory_list');
			}
		
		}

		public function delete_laboratory($ID){
					$this->load->model('CSI_models');
					$this->CSI_models->delete_laboratory($ID);
					redirect('laboratory/laboratory_list');
		}



}


?>