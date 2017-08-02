<?php
class Evidence extends CI_Controller{
	public function index(){
		
		$this->load->view('template/header');
		$this->load->view('template/nav');
		$this->load->view('template/side-nav');
		$this->load->view('home');
		$this->load->view('template/footer');
	}

	public function add_evidence(){
		$title['title'] = 'Evidence';
		$data['data'] = 'Insert Evidence';
		$this->load->model('CSI_models');
		$data['groups'] = $this->CSI_models->load_unit_e();
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('template/side-nav');
		$this->load->view('evidence_view',$data);
		$this->load->view('template/footer');
	}

	public function save(){
			$this->load->helper(array('form','url'));
			$this->load->model('CSI_models');     
			$unit = $this->input->post('load_unit_e');
			$unitid = $this->CSI_models->get_Unit_e($unit);
			foreach ($unitid as $id) {
			$user = array(
				'Digital_Evidence_name' => $this->input->post('evidence_name'),
				'Digital_Evidence_Type	' => $this->input->post('evidence_type'),
				'Evi_Unit_id' => $id->Unit_id,
		
			);
					$this->load->model('CSI_models');
					$this->CSI_models->add_evidence($user);
					redirect('evidence/evidence_list');
			}
	}


		public function evidence_list(){
		$title['title']="Evidence Details";
		$data['data'] = "Evidence Details";
		$this->load->model('CSI_models');
		$data['user'] = $this->CSI_models->get_evidence();
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('template/side_nav_list');
		$this->load->view('evidence_list',$data);
		$this->load->view('template/footer');

	}

	public function edit_evidence($ID){
		$title['title'] = 'Update Evidence Details ';
		$data['data'] = 'Update Evidence Details';
		$this->load->model('CSI_models');
		$data['groups'] = $this->CSI_models->load_unit_e();
		$data['user'] = $this->CSI_models->get_evidence_update($ID);
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('edit_evidence',$data);
		$this->load->view('template/footer');
	}

		public function update(){
			$this->load->helper(array('form','url'));
			$ID = $this->input->post('s_id');
			$this->load->model('CSI_models');     
			$unit = $this->input->post('load_unit_e');
			$unitid = $this->CSI_models->get_Unit_e($unit);
			
			foreach ($unitid as $id) {
			$user = array(
				'Digital_Evidence_Type' => $this->input->post('evidence_name'),
				'Digital_Evidence_name' => $this->input->post('evidence_type'),
				'Evi_Unit_id' => $id->Unit_id,
			);
					$this->load->model('CSI_models');
					$this->CSI_models->update_evidence($user,$ID);
					redirect('evidence/evidence_list');
			}
	
		}

		public function delete_evidence($ID){
					$this->load->model('CSI_models');
					$this->CSI_models->delete_evidence($ID);
					redirect('evidence/evidence_list');
		}

}


?>