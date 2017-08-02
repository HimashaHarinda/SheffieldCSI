<?php
class Storage_media extends CI_Controller{
	public function index(){
		
		$this->load->view('template/header');
		$this->load->view('template/nav');
		$this->load->view('template/side-nav');
		$this->load->view('home');
		$this->load->view('template/footer');
	}

	public function add_sm(){
		$title['title'] = 'Insert Storage Media Device';
		$data['data'] = 'Insert Storage Media Details';
		$this->load->model('CSI_models');
		$data['groups'] = $this->CSI_models->load_evidence_sm();
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('template/side-nav');
		$this->load->view('storage_media_view',$data);
		$this->load->view('template/footer');
	}

		public function save(){
			$this->load->helper(array('form','url'));
			$this->load->model('CSI_models');     
			$unit = $this->input->post('load_evidence_sm');
			$unitid = $this->CSI_models->get_evidence_id_sm($unit);
			foreach ($unitid as $id) {
			$user = array(
				'storage_media_capacity' => $this->input->post('sm_capacity'),
				'storage_media_quantity' => $this->input->post('sm_quantity'),
				'storage_media_make' => $this->input->post('sm_make'),
				'storage_media_model' => $this->input->post('sm_model'),
				'SM_blocking_software_status' => $this->input->post('sm_status'),
				'S_ Digital_Evidence_ID' => $id->Digital_Evidence_id,
		
			);
					$this->load->model('CSI_models');
					$this->CSI_models->add_sm($user);
					redirect('storage_media/sm_list');
			}
	}



/*
	public function save(){
			$this->load->helper(array('form','url'));
			$this->load->model('CSI_models');     
			$unit = $this->input->post('load_evidence_sm');
			$unitid = $this->CSI_models->get_evidence_id_sm($unit);
			foreach ($unitid as $id) {
			$user = array(
				'storage_media_capacity' => $this->input->post('storage_media_capacity'),
				'storage_media_quantity' => $this->input->post('storage_media_quantity'),
				'storage_media_make' => $this->input->post('storage_media_make'),
				'storage_media_model' => $this->input->post('storage_media_model'),
				'SM_blocking_software_status' => $this->input->post('SM_blocking_software_status'),
				'S_Digital_Evidence_ID' => $id->Digital_Evidence_id,
		
			);
					$this->load->model('CSI_models');
					$this->CSI_models->add_storageM($user);
					redirect('storage_media/sm_list');
			}
	}

*/
		public function sm_list(){
		$title['title']="Storage Media Details";
		$data['data'] = "Storage Media Details";
		$this->load->model('CSI_models');
		$data['user'] = $this->CSI_models->get_storageM();
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('template/side_nav_list');
		$this->load->view('storage_media_list',$data);
		$this->load->view('template/footer');

	}

/*
	public function edit_crime($ID){
		$title['title'] = 'Update Crime Details';
		$data['data'] = 'Update Crime Details';
		$this->load->model('CSI_models');
		$data['groups'] = $this->CSI_models->load_evidence_crime();
		$data['user'] = $this->CSI_models->get_crime_update($ID);
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('edit_crime',$data);
		$this->load->view('template/footer');
	}

		public function update(){
			$this->load->helper(array('form','url'));
			$ID = $this->input->post('c_id');
			$this->load->model('CSI_models');     
			$unit = $this->input->post('load_evidence_crime');
			$unitid = $this->CSI_models->get_evidence_id_crime($unit);
			foreach ($unitid as $id) {
			$user = array(
				'Crime_Type' => $this->input->post('crime_type'),
				'Crime_Date' => $this->input->post('crime_date'),
				'Crime_Location' => $this->input->post('crime_location'),
				'C_Digital_Evidence_ID' => $id->Digital_Evidence_id,
			);
					$this->load->model('CSI_models');
					$this->CSI_models->update_crime($user,$ID);
					redirect('crime/crime_list');
			}
	}
	

		public function delete_crime($ID){
					$this->load->model('CSI_models');
					$this->CSI_models->delete_crime($ID);
					redirect('crime/crime_list');
		}
*/

}


?>