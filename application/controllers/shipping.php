<?php
class Shipping extends CI_Controller{
	public function index(){
		
		$this->load->view('template/header');
		$this->load->view('template/nav');
		$this->load->view('template/side-nav');
		$this->load->view('home');
		$this->load->view('template/footer');
	}

	public function add_shipping(){
		$title['title'] = 'Shipping';
		$data['data'] = 'Insert Shipping';
		$this->load->model('CSI_models');
		$data['groups'] = $this->CSI_models->load_cs_s();
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('template/side-nav');
		$this->load->view('shipping_view',$data);
		$this->load->view('template/footer');
	}

	public function save(){
			$this->load->helper(array('form','url'));
			$this->load->model('CSI_models');     
			$unit = $this->input->post('load_cs_s');
			$unitid = $this->CSI_models->get_cs_s_id($unit);
			foreach ($unitid as $id) {
			$user = array(
				'Shipping_Date' => $this->input->post('shipping_date'),
				'Shipping_Destination' => $this->input->post('shipping_destination'),
				'S_Imprint_Code' => $id->CSU_Imprint_code,
		
			);
					$this->load->model('CSI_models');
					$this->CSI_models->add_shipping($user);
					redirect('shipping/shipping_list');
			}
	}


		public function shipping_list(){
		$title['title']="Shipping Details";
		$data['data'] = "Shipping Details";
		$this->load->model('CSI_models');
		$data['user'] = $this->CSI_models->get_shipping();
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('template/side_nav_list');
		$this->load->view('shipping_list',$data);
		$this->load->view('template/footer');

	}

	public function edit_shipping($ID){
		$title['title'] = 'Update Shipping';
		$data['data'] = 'Update Details';
		$this->load->model('CSI_models');
		$data['groups'] = $this->CSI_models->load_cs_s();
		$data['user'] = $this->CSI_models->get_shipping_update($ID);
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('edit_shipping',$data);
		$this->load->view('template/footer');
	}

		public function update(){
			$this->load->helper(array('form','url'));
			$ID = $this->input->post('s_id');
			$this->load->model('CSI_models');     
			$unit = $this->input->post('load_cs_s');
			$unitid = $this->CSI_models->get_cs_s_id($unit);
			foreach ($unitid as $id) {
			
			$user = array(
				'Shipping_Date' => $this->input->post('shipping_date'),
				'Shipping_Destination' => $this->input->post('shipping_destination'),
				'S_Imprint_Code' => $id->CSU_Imprint_code,
			);
					$this->load->model('CSI_models');
					$this->CSI_models->update_shipping($user,$ID);
					redirect('shipping/shipping_list');
			}
	}
		

		public function delete_shipping($ID){
					$this->load->model('CSI_models');
					$this->CSI_models->delete_shipping($ID);
					redirect('shipping/shipping_list');
		}


}


?>