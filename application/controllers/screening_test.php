<?php
class Screening_test extends CI_Controller{
	public function index(){
		
		$this->load->view('template/header');
		$this->load->view('template/nav');
		$this->load->view('template/side-nav');
		$this->load->view('home');
		$this->load->view('template/footer');
	}

	public function add_screening(){
		$title['title'] = 'Screening Test';
		$data['data'] = 'Insert Screening Test Details';
		$this->load->model('CSI_models');
		$data['groups_st'] = $this->CSI_models->load_cs_st();
		$data['groups_emp'] = $this->CSI_models->load_emp();
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('template/side-nav');
		$this->load->view('screening_test_view',$data);
		$this->load->view('template/footer');
	}

	public function save(){
			$this->load->helper(array('form','url'));
			$this->load->model('CSI_models');     
			$unit_st = $this->input->post('load_cs_st');
			$unit_emp = $this->input->post('load_emp');
			$unitid_st = $this->CSI_models->get_cs_st_id($unit_st);
			$unitid_emp = $this->CSI_models->get_emp($unit_emp);

            foreach ($unitid_emp as $emp)  {
            
				foreach ($unitid_st as $id) {
			
				$user = array(
				'test_result' => $this->input->post('test_result'),
				'test_date' => $this->input->post('test_date'),
				'test_emp_id' => $emp->id,
				'Screening_t_cs_id'=> $id->CSU_Imprint_code,
				);
					$this->load->model('CSI_models');
					$this->CSI_models->add_screening_test($user);
					redirect('screening_test/screening_test_list');
				}
			}
	}


		public function screening_test_list(){
		$title['title']="Screening Test Details";
		$data['data'] = "Screening Test Details";
		$this->load->model('CSI_models');
		$data['user'] = $this->CSI_models->get_screening_test();
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('template/side_nav_list');
		$this->load->view('screening_test_list',$data);
		$this->load->view('template/footer');

	}

	public function edit_screening_test($ID){
		$title['title'] = 'Screening Test Details';
		$data['data'] = 'Update Screening Test Details';
		$this->load->model('CSI_models');
		$data['groups_st'] = $this->CSI_models->load_cs_st();
		$data['groups_emp'] = $this->CSI_models->load_emp();
		$data['user'] = $this->CSI_models->get_screening_test_update($ID);
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('edit_screening_test',$data);
		$this->load->view('template/footer');
	}

		public function update(){
			$this->load->helper(array('form','url'));
			$ID = $this->input->post('st_id');
			$this->load->model('CSI_models');     
			$unit_st = $this->input->post('load_cs_st');
			$unit_emp = $this->input->post('load_emp');
			$unitid_st = $this->CSI_models->get_cs_st_id($unit_st);
			$unitid_emp = $this->CSI_models->get_emp($unit_emp);
            foreach ($unitid_emp as $emp)  {
			foreach ($unitid_st as $id) {
			$user = array(
				'test_result' => $this->input->post('test_result'),
				'test_date' => $this->input->post('test_date'),
				'test_emp_id' => $emp->id,
				'Screening_t_cs_id'=> $id->CSU_Imprint_code,
			);
					$this->load->model('CSI_models');
					$this->CSI_models->update_screening_test($user,$ID);
					redirect('screening_test/screening_test_list');
			}
	}
		}

		public function delete_screening_test($ID){
					$this->load->model('CSI_models');
					$this->CSI_models->delete_screening_test($ID);
					redirect('screening_test/screening_test_list');
		}


}


?>