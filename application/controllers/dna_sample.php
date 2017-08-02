<?php
class Dna_sample extends CI_Controller{
	public function index(){
		
		$this->load->view('template/header');
		$this->load->view('template/nav');
		$this->load->view('template/side-nav');
		$this->load->view('home');
		$this->load->view('template/footer');
	}

	public function add_dna_sample(){
		$title['title'] = 'DNA Sample';
		$data['data'] = 'Insert DNA Sample Details';
		$this->load->model('CSI_models');
		$data['groups'] = $this->CSI_models->load_dnaA();
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('template/side-nav');
		$this->load->view('dna_sample_view',$data);
		$this->load->view('template/footer');
	}

	public function save(){
			$this->load->helper(array('form','url'));
			$this->load->model('CSI_models');     
			$unit = $this->input->post('load_dnaA');
			$unitid = $this->CSI_models->get_dnaA($unit);
			foreach ($unitid as $id) {
			
			$user = array(
				
				'sample_details' => $this->input->post('sample_details'),
				'sample_comparison_results' => $this->input->post('sample_comparison_results'),
				'DNA_Analysis_ID' => $id->analysis_id,
			);
					$this->load->model('CSI_models');
					$this->CSI_models->add_dna_sample($user);
					redirect('dna_sample/dna_sample_list');
			}
	}


		public function dna_sample_list(){
		$title['title']="DNA Sample";
		$data['data'] = "DNA Sample";
		$this->load->model('CSI_models');
		$data['user'] = $this->CSI_models->get_dna_sample();
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('template/side_nav_list');
		$this->load->view('dna_sample_list',$data);
		$this->load->view('template/footer');

	}

	public function edit_dna_sample($ID){
		$title['title'] = 'Update DNA Sample';
		$data['data'] = 'Update Details';
		$this->load->model('CSI_models');
		$data['groups'] = $this->CSI_models->load_dnaA();
		$data['user'] = $this->CSI_models->get_dna_sample_update($ID);
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('edit_dna_sample',$data);
		$this->load->view('template/footer');
	}

		public function update(){
			$this->load->helper(array('form','url'));
			$ID = $this->input->post('dna_S_id');	
			$this->load->model('CSI_models');     
			$unit = $this->input->post('load_dnaA');
			$unitid = $this->CSI_models->get_dnaA($unit);

			foreach ($unitid as $id) {
				$user = array(
				'sample_details' => $this->input->post('sample_details'),
				'sample_comparison_results' => $this->input->post('sample_comparison_results'),
				'DNA_Analysis_ID' => $id->analysis_id,
			);
					$this->load->model('CSI_models');
					$this->CSI_models->update_dna_sample($user,$ID);
					redirect('dna_sample/dna_sample_list');
			}
		}

		public function delete_dna_sample($ID){
					$this->load->model('CSI_models');
					$this->CSI_models->delete_dna_sample($ID);
					redirect('dna_sample/dna_sample_list');
		}



}


?>