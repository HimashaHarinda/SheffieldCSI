<?php
class References extends CI_Controller{
	public function index(){
		
		$this->load->view('template/header');
		$this->load->view('template/nav');
		$this->load->view('template/side-nav');
		$this->load->view('home');
		$this->load->view('template/footer');
	}

	public function add_references(){
		$title['title'] = 'References';
		$data['data'] = 'Insert References';
		$this->load->model('CSI_models');
		$data['groups'] = $this->CSI_models->load_cs();
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('template/side-nav');
		$this->load->view('references_view',$data);
		$this->load->view('template/footer');
	}

	public function save(){
			$this->load->helper(array('form','url'));
			$this->load->model('CSI_models');     
			$unit = $this->input->post('load_cs');
			$unitid = $this->CSI_models->get_cs_id($unit);
			foreach ($unitid as $id) {
			
			$user = array(
				'Reference_name' => $this->input->post('reference_name'),
				'Reference_Details' => $this->input->post('reference_details'),
				'Reference_Location' => $this->input->post('reference_location'),
				'Reference_Date' => $this->input->post('reference_date'),
				'R_Imprint_Code' => $id->CSU_Imprint_code,
			);
					$this->load->model('CSI_models');
					$this->CSI_models->add_references($user);
					redirect('references/references_list');
			}
	}


		public function references_list(){
		$title['title']="References";
		$data['data'] = "References";
		$this->load->model('CSI_models');
		$data['user'] = $this->CSI_models->get_references();
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('template/side_nav_list');
		$this->load->view('references_list',$data);
		$this->load->view('template/footer');

	}

	public function edit_ref($ID){
		$title['title'] = 'Update References';
		$data['data'] = 'Update Details';
		$this->load->model('CSI_models');
		$data['groups'] = $this->CSI_models->load_cs();
		$data['user'] = $this->CSI_models->get_reference_update($ID);
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('edit_references',$data);
		$this->load->view('template/footer');
	}

		public function update(){
			$this->load->helper(array('form','url'));
			$ID = $this->input->post('ref_id');	
			$this->load->model('CSI_models');     
			$unit = $this->input->post('load_cs');
			$unitid = $this->CSI_models->get_cs_id($unit);

			foreach ($unitid as $id) {
				$user = array(
				'Reference_name' => $this->input->post('reference_name'),
				'Reference_Details' => $this->input->post('reference_details'),
				'Reference_Location' => $this->input->post('reference_location'),
				'Reference_Date' => $this->input->post('reference_date'),
				'R_Imprint_Code' => $id->CSU_Imprint_code,
			);
					$this->load->model('CSI_models');
					$this->CSI_models->update_ref($user,$ID);
					redirect('references/references_list');
			}
		}

		public function delete_ref($ID){
					$this->load->model('CSI_models');
					$this->CSI_models->delete_ref($ID);
					redirect('references/references_list');
		}



}


?>