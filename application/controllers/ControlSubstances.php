<?php
class ControlSubstances extends CI_Controller{
	public function index(){
		
		$this->load->view('template/header');
		$this->load->view('template/nav');
		$this->load->view('template/side-nav');
		$this->load->view('home');
		$this->load->view('template/footer');
	}

	public function add_ControlSubstances(){
		$title['title'] = 'Control Substances';
		$data['data'] = 'Insert Control Substances';
		$this->load->model('CSI_models');
		$data['groups'] = $this->CSI_models->load_unit();
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('template/side-nav');
		$this->load->view('ControlSubstances_view',$data);
		$this->load->view('template/footer');
	}

	public function save(){
				$this->load->helper(array('form','url'));
				$this->load->model('CSI_models');
				$unit = $this->input->post('load_unit');
				$unitid = $this->CSI_models->get_Unit_type($unit);
				foreach ($unitid as $id) {
					
				$user = array(
				'CSU_Quantity' => $this->input->post('quantity'),
				'CSU_Form' => $this->input->post('cs_form'),
				'CSU_Received_date' => $this->input->post('receivedDate'),
				'CSU_Type' => $this->input->post('cs_type'),
				'C_S_Unit_ID' =>$id->Unit_id,
				);

					$this->load->model('CSI_models');
					$this->CSI_models->add_ControlSubstances($user);
					redirect('ControlSubstances/cs_list');
				}
				
	}

	public function cs_list(){
		$title['title']="Control Substances";
		$data['data'] = "Control Substances";
		$this->load->model('CSI_models');
		$data['user'] = $this->CSI_models->get_cs();
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('template/side_nav_list');
		$this->load->view('control_substances_list',$data);
		$this->load->view('template/footer');

	}

		public function csu_list(){
		$title['title']="Control Substances Unit";
		$data['data'] = "Control Substances Unit";
		$this->load->model('CSI_models');
		$data['user'] = $this->CSI_models->get_unit();
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('template/side_nav_list');
		$this->load->view('control_substances_Unit_list',$data);
		$this->load->view('template/footer');

	}

	public function edit_cs($ID){
		$title['title'] = 'Update Control Substances';
		$data['data'] = 'Update Details';
		$this->load->model('CSI_models');
		$data['groups'] = $this->CSI_models->load_unit();
		$data['user'] = $this->CSI_models->get_cs_update($ID);
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('edit_cs',$data);
		$this->load->view('template/footer');
	}

	public function update(){

				$ID = $this->input->post('CSU_code');
				$this->load->model('CSI_models');
				$unit = $this->input->post('load_unit');
				$unitid = $this->CSI_models->get_Unit_type($unit);
				foreach ($unitid as $id) {
	
				$user = array(
				'CSU_Quantity' => $this->input->post('quantity'),
				'CSU_Form' => $this->input->post('cs_form'),
				'CSU_Received_date' => $this->input->post('receivedDate'),
				'CSU_Type' => $this->input->post('cs_type'),
				'C_S_Unit_ID' =>$id->Unit_id,
				);

					$this->load->model('CSI_models');
					$this->CSI_models->update($user,$ID);
					redirect('ControlSubstances/cs_list');

				}
			
	}

		public function delete_cs($ID){
					$this->load->model('CSI_models');
					$this->CSI_models->delete_cs($ID);
					redirect('ControlSubstances/cs_list');
	}

}


?>