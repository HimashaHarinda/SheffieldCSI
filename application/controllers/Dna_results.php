<?php
class Dna_results extends CI_Controller{
	public function index(){
		
		$this->load->view('template/header');
		$this->load->view('template/nav');
		$this->load->view('template/side-nav');
		$this->load->view('home');
		$this->load->view('template/footer');
	}

	public function add_dna_results(){
		$title['title'] = 'DNA Results';
		$data['data'] = 'Insert DNA Results Details';
		$this->load->model('CSI_models');
		$data['groups_st'] = $this->CSI_models->load_dnaA_dnaR();
		$data['groups_emp'] = $this->CSI_models->load_emp_dnar();
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('template/side-nav');
		$this->load->view('dna_results_view',$data);
		$this->load->view('template/footer');
	}

	public function save(){
			$this->load->helper(array('form','url'));
			$this->load->model('CSI_models');     
			$unit_st = $this->input->post('load_dnaA_dnaR');
			$unit_emp = $this->input->post('load_emp_dnar');
			$unitid_st = $this->CSI_models->get_dnA_dnaR_id($unit_st);
			$unitid_emp = $this->CSI_models->get_emp_dnar($unit_emp);

            foreach ($unitid_emp as $emp)  {
            
				foreach ($unitid_st as $id) {
			
				$user = array(
				'biological_material' => $this->input->post('biologicalMaterial'),
				'R_Analysis_ID'=> $id->analysis_id,
				'DNA_Emp_ID' => $emp->id,
				
				);
					$this->load->model('CSI_models');
					$this->CSI_models->add_dna_results($user);
					redirect('Dna_results/Dna_results_list');
				}
			}
	}


		public function dna_results_list(){
		$title['title']="DNA Results Details";
		$data['data'] = "DNA Results Details";
		$this->load->model('CSI_models');
		$data['user'] = $this->CSI_models->get_dna_results();
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('template/side_nav_list');
		$this->load->view('dna_results_list',$data);
		$this->load->view('template/footer');

	}

	public function edit_dna_results($ID){
		$title['title'] = 'DNA Results Details';
		$data['data'] = 'Update DNA Results Details';
		$this->load->model('CSI_models');
		$data['groups_st'] = $this->CSI_models->load_dnaA_dnaR();
		$data['groups_emp'] = $this->CSI_models->load_emp_dnar();
		$data['user'] = $this->CSI_models->get_dna_results_update($ID);
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('edit_dna_results',$data);
		$this->load->view('template/footer');
	}

		public function update(){
			$this->load->helper(array('form','url'));
			$ID = $this->input->post('dna_results_id');
			$this->load->model('CSI_models');     
			$unit_st = $this->input->post('load_dnaA_dnaR');
			$unit_emp = $this->input->post('load_emp_dnar');
			$unitid_st = $this->CSI_models->get_dnA_dnaR_id($unit_st);
			$unitid_emp = $this->CSI_models->get_emp_dnar($unit_emp);
            foreach ($unitid_emp as $emp)  {
			foreach ($unitid_st as $id) {
			$user = array(
				'biological_material' => $this->input->post('biologicalMaterial'),
				'R_Analysis_ID'=> $id->analysis_id,
				'DNA_Emp_ID' => $emp->id,
			);
					$this->load->model('CSI_models');
					$this->CSI_models->update_dna_results($user,$ID);
					redirect('Dna_results/Dna_results_list');
			}
	}
		}

		public function delete_dna_results($ID){
					$this->load->model('CSI_models');
					$this->CSI_models->delete_dna_results($ID);
					redirect('Dna_results/Dna_results_list');
		}


}


?>