<?php
class Device extends CI_Controller{
	public function index(){
		
		$this->load->view('template/header');
		$this->load->view('template/nav');
		$this->load->view('template/side-nav');
		$this->load->view('home');
		$this->load->view('template/footer');
	}

	public function add_device(){
		$title['title'] = 'Device';
		$data['data'] = 'Insert Device Details';
		$this->load->model('CSI_models');
		$data['groups'] = $this->CSI_models->load_evidence();
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('template/side-nav');
		$this->load->view('device_view',$data);
		$this->load->view('template/footer');
	}

	public function save(){
			$this->load->helper(array('form','url'));
			$this->load->model('CSI_models');     
			$unit = $this->input->post('load_evidence');
			$unitid = $this->CSI_models->get_evidence_id($unit);
			foreach ($unitid as $id) {
			$user = array(
				'Device_Name' => $this->input->post('device_name'),
				'Device_Model' => $this->input->post('device_model'),
				'D_Digital_Evidence_ID' => $id->Digital_Evidence_id,
			);
					$this->load->model('CSI_models');
					$this->CSI_models->add_device($user);
					redirect('device/device_list');
			}
	}


		public function device_list(){
		$title['title']="Device Details";
		$data['data'] = "Device Details";
		$this->load->model('CSI_models');
		$data['user'] = $this->CSI_models->get_device();
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('template/side_nav_list');
		$this->load->view('device_list',$data);
		$this->load->view('template/footer');

	}

	public function edit_device($ID){
		$title['title'] = 'Update Device Details';
		$data['data'] = 'Update Details';
		$this->load->model('CSI_models');
		$data['groups'] = $this->CSI_models->load_evidence();
		$data['user'] = $this->CSI_models->get_device_update($ID);
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('edit_device',$data);
		$this->load->view('template/footer');
	}

		public function update(){
			$this->load->helper(array('form','url'));
			$ID = $this->input->post('d_id');
			$this->load->model('CSI_models');     
			$unit = $this->input->post('load_evidence');
			$unitid = $this->CSI_models->get_evidence_id($unit);
			foreach ($unitid as $id) {
			$user = array(
				'Device_Name' => $this->input->post('device_name'),
				'Device_Model' => $this->input->post('device_model'),
				'D_Digital_Evidence_ID' => $id->Digital_Evidence_id,
			);
					$this->load->model('CSI_models');
					$this->CSI_models->update_device($user,$ID);
					redirect('device/device_list');
			}
	}
	

		public function delete_device($ID){
					$this->load->model('CSI_models');
					$this->CSI_models->delete_device($ID);
					redirect('device/device_list');
		}


}


?>