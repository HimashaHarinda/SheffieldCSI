<?php
class Fte extends CI_Controller{
	public function index(){
		
		$this->load->view('template/header');
		$this->load->view('template/nav');
		$this->load->view('template/side-nav');
		$this->load->view('home');
		$this->load->view('template/footer');
	}

	public function add_fte(){
		$title['title'] = 'Forensic Toxicology Evidence';
		$data['data'] = 'Insert Forensic Toxicology Evidence';
		$this->load->model('CSI_models');
		$data['groups'] = $this->CSI_models->load_csu_fte();
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('template/side-nav');
		$this->load->view('fte_view',$data);
		$this->load->view('template/footer');
	}

	public function save(){
			$this->load->helper(array('form','url'));
			$this->load->model('CSI_models');     
			$unit = $this->input->post('load_csu_fte');
			$unitid = $this->CSI_models->get_fte_id($unit);
			foreach ($unitid as $id) {
			
			$user = array(
				'forensic_toxicology_evidence_name' => $this->input->post('fte_name'),
				'F_T_Unit_ID' => $id->Unit_id,
			);
					$this->load->model('CSI_models');
					$this->CSI_models->add_fte($user);
					redirect('fte/fte_list');
			}
	}


		public function fte_list(){
		$title['title']="Forensic Toxicology Evidence";
		$data['data'] = "Forensic Toxicology Evidence";
		$this->load->model('CSI_models');
		$data['user'] = $this->CSI_models->get_fte();
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('template/side_nav_list');
		$this->load->view('fte_list',$data);
		$this->load->view('template/footer');

	}

	public function edit_fte($ID){
		$title['title'] = 'Update Forensic Toxicology Evidence';
		$data['data'] = 'Update Details';
		$this->load->model('CSI_models');
		$data['groups'] = $this->CSI_models->load_csu_fte();
		$data['user'] = $this->CSI_models->get_fte_update($ID);
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('edit_fte',$data);
		$this->load->view('template/footer');
	}

		public function update(){
			$this->load->helper(array('form','url'));
			$ID = $this->input->post('fte_id');	
			$this->load->model('CSI_models');     
			$unit = $this->input->post('load_csu_fte');
			$unitid = $this->CSI_models->get_fte_id($unit);
						foreach ($unitid as $id) {
			
			$user = array(
				'forensic_toxicology_evidence_name' => $this->input->post('fte_name'),
				'F_T_Unit_ID' => $id->Unit_id,
			);
					$this->load->model('CSI_models');
					$this->CSI_models->update_fte($user,$ID);
					redirect('fte/fte_list');
			}
		
		}

		public function delete_fte($ID){
					$this->load->model('CSI_models');
					$this->CSI_models->delete_fte($ID);
					redirect('fte/fte_list');
		}



}


?>