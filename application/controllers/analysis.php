<?php
class Analysis extends CI_Controller{
	public function index(){
		
		$this->load->view('template/header');
		$this->load->view('template/nav');
		$this->load->view('template/side-nav');
		$this->load->view('home');
		$this->load->view('template/footer');
	}

	public function add_analysis(){
		$title['title'] = 'DNA Analysis';
		$data['data'] = 'Insert DNA Analysis Details';
		$this->load->model('CSI_models');
		$data['groups_st'] = $this->CSI_models->load_unit_analysis();
		$data['groups_emp'] = $this->CSI_models->load_emp_analysis();
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('template/side-nav');
		$this->load->view('analysis_view',$data);
		$this->load->view('template/footer');
	}

	public function save(){
			$this->load->helper(array('form','url'));
			$this->load->model('CSI_models');     
			$unit_st = $this->input->post('load_unit_analysis');
			$unit_emp = $this->input->post('load_emp_analysis');
			$unitid_st = $this->CSI_models->get_unit_analysis_id($unit_st);
			$unitid_emp = $this->CSI_models->get_emp_analysis_id($unit_emp);

            foreach ($unitid_emp as $emp)  {
            
				foreach ($unitid_st as $id) {
			
				$user = array(
				'analysis_details' => $this->input->post('analysisDetails'),
				'Analyst_Emp_ID' => $emp->id,
				'DNA_Unit_ID'=> $id->Unit_id,
				);
					$this->load->model('CSI_models');
					$this->CSI_models->add_analysis($user);
					redirect('analysis/analysis_list');
				}
			}
	}


		public function analysis_list(){
		$title['title']="DNA Analysis Details";
		$data['data'] = "DNA Analysis Details";
		$this->load->model('CSI_models');
		$data['user'] = $this->CSI_models->get_analysis();
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('template/side_nav_list');
		$this->load->view('analysis_list',$data);
		$this->load->view('template/footer');

	}

	public function edit_analysis($ID){
		$title['title'] = 'DNA Analysis';
		$data['data'] = 'Update DNA Analysis Details';
		$this->load->model('CSI_models');
		$data['groups_st'] = $this->CSI_models->load_unit_analysis();
		$data['groups_emp'] = $this->CSI_models->load_emp_analysis();
		$data['user'] = $this->CSI_models->get_analysis_update($ID);
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('template/side-nav');
		$this->load->view('analysis_view',$data);
		$this->load->view('template/footer');
	}

		public function update(){
			$this->load->helper(array('form','url'));
			$ID = $this->input->post('analysiss_id');
			$this->load->model('CSI_models');     
			$unit_st = $this->input->post('load_unit_analysis');
			$unit_emp = $this->input->post('load_emp_analysis');
			$unitid_st = $this->CSI_models->get_unit_analysis_id($unit_st);
			$unitid_emp = $this->CSI_models->get_emp_analysis_id($unit_emp);

			foreach ($unitid_emp as $emp)  {
            
				foreach ($unitid_st as $id) {
			
				$user = array(
				'analysis_details' => $this->input->post('analysisDetails'),
				'Analyst_Emp_ID' => $emp->id,
				'DNA_Unit_ID'=> $id->Unit_id,
				);
					$this->load->model('CSI_models');
					$this->CSI_models->update_analysis($user,$ID);
					redirect('analysis/analysis_list');
				}
			}	
       }

		public function delete_analysis($ID){
					$this->load->model('CSI_models');
					$this->CSI_models->delete_analysis($ID);
					redirect('analysis/analysis_list');
		}


}


?>