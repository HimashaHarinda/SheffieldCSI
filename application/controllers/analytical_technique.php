<?php
class Analytical_Technique extends CI_Controller{
	public function index(){
		
		$this->load->view('template/header');
		$this->load->view('template/nav');
		$this->load->view('template/side-nav');
		$this->load->view('home');
		$this->load->view('template/footer');
	}

	public function add_analytical_technique(){
		$title['title'] = 'Analytical Technique';
		$data['data'] = 'Insert Analytical Technique';
		$this->load->model('CSI_models');
	//	$data['groups'] = $this->CSI_models->load_csu_fte();
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('template/side-nav');
		$this->load->view('analytical_technique_view',$data);
		$this->load->view('template/footer');
	}

	public function save(){
			$this->load->helper(array('form','url'));
			$this->load->model('CSI_models');     
			$user = array(
				'technique' => $this->input->post('technique'),
				'tech_type' => $this->input->post('tech_type'),
			);
					$this->load->model('CSI_models');
					$this->CSI_models->add_analytical_technique($user);
					redirect('analytical_technique/analytical_technique_list');
		
	}


		public function analytical_technique_list(){
		$title['title']="Analytical Technique";
		$data['data'] = "Analytical Technique";
		$this->load->model('CSI_models');
		$data['user'] = $this->CSI_models->get_analytical_technique();
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('template/side_nav_list');
		$this->load->view('analytical_technique_list',$data);
		$this->load->view('template/footer');

	}

	public function edit_analytical_technique($ID){
		$title['title'] = 'Update Analytical Technique';
		$data['data'] = 'Update Details';
		$this->load->model('CSI_models');
		$data['user'] = $this->CSI_models->get_analytical_technique_update($ID);
	//	$data['groups'] = $this->CSI_models->load_csu_fte();
	//	$data['user'] = $this->CSI_models->get_fte_update($ID);
		$this->load->view('template/header',$title);
		$this->load->view('template/nav');
		$this->load->view('edit_analytical_technique',$data);

		$this->load->view('template/footer');
	}

	public function update(){
			$this->load->helper(array('form','url'));
			$ID = $this->input->post('at_id');	
			$this->load->model('CSI_models');     
			
		$user = array(
				'technique' => $this->input->post('technique'),
				'tech_type' => $this->input->post('tech_type'),
			);
					$this->load->model('CSI_models');
					$this->CSI_models->update_analytical_technique($user,$ID);
					redirect('analytical_technique/analytical_technique_list');
		
			
		
		}

		public function delete_analytical_technique($ID){
					$this->load->model('CSI_models');
					$this->CSI_models->delete_analytical_technique($ID);
					redirect('analytical_technique/analytical_technique_list');
		}



}


?>