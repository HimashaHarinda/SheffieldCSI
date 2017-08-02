<?php
class Packaging extends CI_Controller{
	public function index(){
		
		$this->load->view('template/header');
		$this->load->view('template/nav');
		$this->load->view('template/side-nav');
		$this->load->view('home');
		$this->load->view('template/footer');
	}

	public function add_packaging(){
		$title['title'] = 'Packaging';
		$data['data'] = 'Insert Packaging';
		$this->load->model('CSI_models');
		$data['groups'] = $this->CSI_models->load_cs_p();
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('template/side-nav');
		$this->load->view('packaging_view',$data);
		$this->load->view('template/footer');
	}

	public function save(){
			$this->load->helper(array('form','url'));
			$this->load->model('CSI_models');     
			$unit = $this->input->post('load_cs_p');
			$unitid = $this->CSI_models->get_cs_p_id($unit);
			foreach ($unitid as $id) {
			
			$user = array(
				'Package_Type' => $this->input->post('package_type'),
				'Package_Quantity' => $this->input->post('package_quantity'),
				'P_Imprint_Code' => $id->CSU_Imprint_code,
			);
					$this->load->model('CSI_models');
					$this->CSI_models->add_packaging($user);
					redirect('packaging/packaging_list');
			}
	}


		public function packaging_list(){
		$title['title']="Packaging Details";
		$data['data'] = "Packaging Details";
		$this->load->model('CSI_models');
		$data['user'] = $this->CSI_models->get_packaging();
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('template/side_nav_list');
		$this->load->view('packaging_list',$data);
		$this->load->view('template/footer');

	}


	public function edit_packaging($ID){
		$title['title'] = 'Update Packaging';
		$data['data'] = 'Update Details';
		$this->load->model('CSI_models');
		$data['groups'] = $this->CSI_models->load_cs_p();
		$data['user'] = $this->CSI_models->get_packaging_update($ID);
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('edit_packaging',$data);
		$this->load->view('template/footer');
	}

		public function update(){
			$this->load->helper(array('form','url'));
			$ID = $this->input->post('p_id');
			$this->load->model('CSI_models'); 
			$unit = $this->input->post('load_cs_p');
			$unitid = $this->CSI_models->get_cs_p_id($unit);
			foreach ($unitid as $id) {	

			$user = array(
				'Package_Type' => $this->input->post('package_type'),
				'Package_Quantity' => $this->input->post('package_quantity'),
				'P_Imprint_Code' => $id->CSU_Imprint_code,
		
			);
					$this->load->model('CSI_models');
					$this->CSI_models->update_package($user,$ID);
					redirect('packaging/packaging_list');
			}
	}
		

		public function delete_packaging($ID){
					$this->load->model('CSI_models');
					$this->CSI_models->delete_package($ID);
					redirect('packaging/packaging_list');
		}


}


?>