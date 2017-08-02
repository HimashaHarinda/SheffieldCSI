<?php
class CSI_models extends CI_Model{


	public function add_ControlSubstances($user){
		$this->db->insert('csi_sheffield.control_substance',$user);
	}

	public function get_cs(){
		$this->db->select("*");
		$this->db->from('csi_sheffield.control_substance');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return $query->result();
		}
	}

	public function get_unit(){
		$this->db->select("*");
		$this->db->from('csi_sheffield.unit');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return $query->result();
		}
	}

		public function load_unit(){
		$this->db->select("*");
		$this->db->from('csi_sheffield.unit');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return $query->result();
		}

	}	

		public function get_Unit_type($type){
		$this->db->select('*');
		$this->db->from('csi_sheffield.unit');
		$this->db->where('Unit_Type',$type);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return $query->result();
		}
	}

		public function get_cs_update($ID){
		$this->db->select('*');
		$this->db->from('csi_sheffield.control_substance');
		$this->db->where('CSU_Imprint_code',$ID);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return $query->result();
		}
	}

	public function update($user,$ID){
			$this->db->where('CSU_Imprint_code',$ID);
			$this->db->update('csi_sheffield.control_substance',$user);
	}

	public function delete_cs($ID){
		$this->db->where('CSU_Imprint_code',$ID);
		$this->db->delete('csi_sheffield.control_substance');
	}

//-----------------------------------------------

	public function add_references($user){
		$this->db->insert('csi_sheffield.reference',$user);
	}

	public function get_references(){
		$this->db->select("*");
		$this->db->from('csi_sheffield.reference');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return $query->result();
		}
	}

	public function load_cs(){
		$this->db->select("*");
		$this->db->from('csi_sheffield.control_substance');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return $query->result();
		}

	}	

		public function get_cs_id($cs_id){
		$this->db->select('*');
		$this->db->from('csi_sheffield.control_substance');
		$this->db->where('CSU_Imprint_code',$cs_id);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return $query->result();
		}
	}


	public function get_reference_update($ID){
		$this->db->select('*');
		$this->db->from('csi_sheffield.reference');
		$this->db->where('Reference_id',$ID);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return $query->result();
		}
	}

	public function update_ref($user,$ID){
			$this->db->where('Reference_id',$ID);
			$this->db->update('csi_sheffield.reference',$user);
	}

	public function delete_ref($ID){
		$this->db->where('Reference_id',$ID);
		$this->db->delete('csi_sheffield.reference');
	}

//----------------------------------------------------------------


public function add_shipping($user){
		$this->db->insert('csi_sheffield.shipping',$user);
	}

	public function get_shipping(){
		$this->db->select("*");
		$this->db->from('csi_sheffield.shipping');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return $query->result();
		}
	}


	public function load_cs_s(){
		$this->db->select("*");
		$this->db->from('csi_sheffield.control_substance');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return $query->result();
		}

	}	

		public function get_cs_s_id($cs_id){
		$this->db->select('*');
		$this->db->from('csi_sheffield.control_substance');
		$this->db->where('CSU_Imprint_code',$cs_id);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return $query->result();
		}
	}




	public function get_shipping_update($ID){
		$this->db->select('*');
		$this->db->from('csi_sheffield.shipping');
		$this->db->where('Shipping_id',$ID);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return $query->result();
		}
	}

	public function update_shipping($user,$ID){
			$this->db->where('Shipping_id',$ID);
			$this->db->update('csi_sheffield.shipping',$user);
	}

	public function delete_shipping($ID){
		$this->db->where('Shipping_id',$ID);
		$this->db->delete('csi_sheffield.shipping');
	}

//---------------------------------------------------------------------
	public function add_packaging($user){
		$this->db->insert('csi_sheffield.packaging',$user);
	}

	public function get_packaging(){
		$this->db->select("*");
		$this->db->from('csi_sheffield.packaging');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return $query->result();
		}
	}


		public function load_cs_p(){
		$this->db->select("*");
		$this->db->from('csi_sheffield.control_substance');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return $query->result();
		}

	}	

		public function get_cs_p_id($cs_id){
		$this->db->select('*');
		$this->db->from('csi_sheffield.control_substance');
		$this->db->where('CSU_Imprint_code',$cs_id);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return $query->result();
		}
	}



	public function get_packaging_update($ID){
		$this->db->select('*');
		$this->db->from('csi_sheffield.packaging');
		$this->db->where('Package_id',$ID);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return $query->result();
		}
	}

	public function update_package($user,$ID){
			$this->db->where('Package_id',$ID);
			$this->db->update('csi_sheffield.packaging',$user);
	}

	public function delete_package($ID){
		$this->db->where('Package_id',$ID);
		$this->db->delete('csi_sheffield.packaging');
	}

//--------------------------------------------------------------------

public function add_screening_test($user){
		$this->db->insert('csi_sheffield.screening_test',$user);
	}

	public function get_screening_test(){
		$this->db->select("*");
		$this->db->from('csi_sheffield.screening_test');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return $query->result();
		}
	}


		public function load_cs_st(){
		$this->db->select("*");
		$this->db->from('csi_sheffield.control_substance');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return $query->result();
		}

	}	

		public function get_cs_st_id($cs_id){
		$this->db->select('*');
		$this->db->from('csi_sheffield.control_substance');
		$this->db->where('CSU_Imprint_code',$cs_id);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return $query->result();
		}
	}


		public function load_emp(){
		$this->db->select("*");
		$this->db->from('csi_sheffield.employee');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return $query->result();
		}

	}	

		public function get_emp($emp_id){
		$this->db->select('*');
		$this->db->from('csi_sheffield.employee');
		$this->db->where('id',$emp_id);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return $query->result();
		}
	}

	  public function get_screening_test_update($ID){
    $this->db->select('*');
    $this->db->from('csi_sheffield.screening_test');
    $this->db->where('test_id',$ID);
    $query = $this->db->get();
    if($query->num_rows()>0){
      return $query->result();
    }else{
      return $query->result();
    }
  }

	public function update_screening_test($user,$ID){
			$this->db->where('test_id',$ID);
			$this->db->update('csi_sheffield.screening_test',$user);
	}

	public function delete_screening_test($ID){
		$this->db->where('test_id',$ID);
		$this->db->delete('csi_sheffield.screening_test');
	}

//--------------------------------------------------------------------
public function add_evidence($user){
    $this->db->insert('csi_sheffield.evidence',$user);
  }

  public function get_evidence(){
    $this->db->select("*");
    $this->db->from('csi_sheffield.evidence');
    $query = $this->db->get();
    if($query->num_rows()>0){
      return $query->result();
    }
    else{
      return $query->result();
    }
  }

  	public function load_unit_e(){
		$this->db->select("*");
		$this->db->from('csi_sheffield.unit');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return $query->result();
		}

	}	

		public function get_Unit_e($unit_id){
		$this->db->select('*');
		$this->db->from('csi_sheffield.unit');
		$this->db->where('Unit_id',$unit_id);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return $query->result();
		}
	}



  public function get_evidence_update($ID){
    $this->db->select('*');
    $this->db->from('csi_sheffield.evidence');
    $this->db->where('Digital_Evidence_id',$ID);
    $query = $this->db->get();
    if($query->num_rows()>0){
      return $query->result();
    }else{
      return $query->result();
    }
  }

  public function update_evidence($user,$ID){
      $this->db->where('Digital_Evidence_id',$ID);
      $this->db->update('csi_sheffield.evidence',$user);
  }

  public function delete_evidence($ID){
    $this->db->where('Digital_Evidence_id',$ID);
    $this->db->delete('csi_sheffield.evidence');
  }


//------------------------------------------------------------

	public function add_device($user){
		$this->db->insert('csi_sheffield.device',$user);
	}

	public function get_device(){
		$this->db->select("*");
		$this->db->from('csi_sheffield.device');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return $query->result();
		}
	}


		public function load_evidence(){
		$this->db->select("*");
		$this->db->from('csi_sheffield.evidence');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return $query->result();
		}

	}	

		public function get_evidence_id($evi_id){
		$this->db->select('*');
		$this->db->from('csi_sheffield.evidence');
		$this->db->where('Digital_Evidence_id',$evi_id);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return $query->result();
		}
	}



	public function get_device_update($ID){
		$this->db->select('*');
		$this->db->from('csi_sheffield.device');
		$this->db->where('Device_id',$ID);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return $query->result();
		}
	}

	public function update_device($user,$ID){
			$this->db->where('Device_id',$ID);
			$this->db->update('csi_sheffield.device',$user);
	}

	public function delete_device($ID){
		$this->db->where('Device_id',$ID);
		$this->db->delete('csi_sheffield.device');
	}

//----------------------------------------------------------

public function add_crime($user){
		$this->db->insert('csi_sheffield.crime',$user);
	}

	public function get_crime(){
		$this->db->select("*");
		$this->db->from('csi_sheffield.crime');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return $query->result();
		}
	}

		public function load_evidence_crime(){
		$this->db->select("*");
		$this->db->from('csi_sheffield.evidence');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return $query->result();
		}

	}	

		public function get_evidence_id_crime($evi_id){
		$this->db->select('*');
		$this->db->from('csi_sheffield.evidence');
		$this->db->where('Digital_Evidence_id',$evi_id);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return $query->result();
		}
	}


	public function get_crime_update($ID){
		$this->db->select('*');
		$this->db->from('csi_sheffield.crime');
		$this->db->where('Crime_id',$ID);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return $query->result();
		}
	}

	public function update_crime($user,$ID){
			$this->db->where('Crime_id',$ID);
			$this->db->update('csi_sheffield.crime',$user);
	}

	public function delete_crime($ID){
		$this->db->where('Crime_id',$ID);
		$this->db->delete('csi_sheffield.crime');
	}
//-------------------------------------------------

public function add_sm($user){
		$this->db->insert('csi_sheffield.storage_media',$user);
	}

	public function get_sm(){
		$this->db->select("*");
		$this->db->from('csi_sheffield.storage_media');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return $query->result();
		}
	}

		public function load_evidence_sm(){
		$this->db->select("*");
		$this->db->from('csi_sheffield.evidence');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return $query->result();
		}

	}	

		public function get_evidence_id_sm($evi_id){
		$this->db->select('*');
		$this->db->from('csi_sheffield.evidence');
		$this->db->where('Digital_Evidence_id',$evi_id);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return $query->result();
		}
	}


	public function get_sm_update($ID){
		$this->db->select('*');
		$this->db->from('csi_sheffield.storage_media');
		$this->db->where('storage_media_id',$ID);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return $query->result();
		}
	}

	public function update_sm($user,$ID){
			$this->db->where('storage_media_id',$ID);
			$this->db->update('csi_sheffield.storage_media',$user);
	}

	public function delete_sm($ID){
		$this->db->where('storage_media_id',$ID);
		$this->db->delete('csi_sheffield.storage_media');
	}

//-------------------------------------------------------



public function add_isolation_method($user){
		$this->db->insert('csi_sheffield.isolation_method',$user);
	}

	public function get_isolation_method(){
		$this->db->select("*");
		$this->db->from('csi_sheffield.isolation_method');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return $query->result();
		}
	}


		public function load_digital_evidence(){
		$this->db->select("*");
		$this->db->from('csi_sheffield.evidence');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return $query->result();
		}

	}	

		public function get_digital_evidence_id($de_id){
		$this->db->select('*');
		$this->db->from('csi_sheffield.evidence');
		$this->db->where('Digital_Evidence_id',$de_id);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return $query->result();
		}
	}


		public function load_emp_im(){
		$this->db->select("*");
		$this->db->from('csi_sheffield.employee');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return $query->result();
		}

	}	

		public function get_emp_im($emp_id){
		$this->db->select('*');
		$this->db->from('csi_sheffield.employee');
		$this->db->where('id',$emp_id);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return $query->result();
		}
	}

	public function update_isolation_method($user,$ID){
			$this->db->where('isolation_m_id',$ID);
			$this->db->update('csi_sheffield.isolation_method',$user);
	}

	public function delete_isolation_method($ID){
		$this->db->where('isolation_m_id',$ID);
		$this->db->delete('csi_sheffield.isolation_method');
	}

//-------------------------------------------------------

	public function add_fte($user){
		$this->db->insert('csi_sheffield.forensic_toxicology_evidence',$user);
	}

	public function get_fte(){
		$this->db->select("*");
		$this->db->from('csi_sheffield.forensic_toxicology_evidence');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return $query->result();
		}
	}

	
	public function load_csu_fte(){
		$this->db->select("*");
		$this->db->from('csi_sheffield.unit');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return $query->result();
		}

	}	

		public function get_fte_id($fte_id){
		$this->db->select('*');
		$this->db->from('csi_sheffield.unit');
		$this->db->where('Unit_id',$fte_id);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return $query->result();
		}
	}



	public function get_fte_update($ID){
		$this->db->select('*');
		$this->db->from('csi_sheffield.forensic_toxicology_evidence');
		$this->db->where('forensic_toxicology_evidence_id',$ID);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return $query->result();
		}
	}

	public function update_fte($user,$ID){
			$this->db->where('	forensic_toxicology_evidence_id',$ID);
			$this->db->update('csi_sheffield.forensic_toxicology_evidence',$user);
	}

	public function delete_fte($ID){
		$this->db->where('	forensic_toxicology_evidence_id',$ID);
		$this->db->delete('csi_sheffield.forensic_toxicology_evidence');
	}
//--------------------------------------------------------------------


public function add_analytical_technique($user){
		$this->db->insert('csi_sheffield.analytical_technique',$user);
	}

	public function get_analytical_technique(){
		$this->db->select("*");
		$this->db->from('csi_sheffield.analytical_technique');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return $query->result();
		}
	}

	


	public function get_analytical_technique_update($ID){
		$this->db->select('*');
		$this->db->from('csi_sheffield.analytical_technique');
		$this->db->where('technique_ID',$ID);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return $query->result();
		}
	}

	public function update_analytical_technique($user,$ID){
			$this->db->where('technique_ID',$ID);
			$this->db->update('csi_sheffield.analytical_technique',$user);
	}

	public function delete_analytical_technique($ID){
		$this->db->where('technique_ID',$ID);
		$this->db->delete('csi_sheffield.analytical_technique');
	}


//-------------------------------------------------------------

	public function add_laboratory($user){
		$this->db->insert('csi_sheffield.laboratory',$user);
	}

	public function get_laboratory(){
		$this->db->select("*");
		$this->db->from('csi_sheffield.laboratory');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return $query->result();
		}
	}

	public function load_employee_laboratory(){
		$this->db->select("*");
		$this->db->from('csi_sheffield.employee');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return $query->result();
		}

	}	

		public function get_employee_l_id($empl_id){
		$this->db->select('*');
		$this->db->from('csi_sheffield.employee');
		$this->db->where('id',$empl_id);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return $query->result();
		}
	}


	public function get_laboratory_update($ID){
		$this->db->select('*');
		$this->db->from('csi_sheffield.laboratory');
		$this->db->where('lab_id',$ID);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return $query->result();
		}
	}

	public function update_laboratory($user,$ID){
			$this->db->where('lab_id',$ID);
			$this->db->update('csi_sheffield.laboratory',$user);
	}

	public function delete_laboratory($ID){
		$this->db->where('lab_id',$ID);
		$this->db->delete('csi_sheffield.laboratory');
	}

//-------------------------------------------------------------------
public function add_analysis($user){
		$this->db->insert('csi_sheffield.dna_analysis',$user);
	}

	public function get_analysis(){
		$this->db->select("*");
		$this->db->from('csi_sheffield.dna_analysis');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return $query->result();
		}
	}


		public function load_unit_analysis(){
		$this->db->select("*");
		$this->db->from('csi_sheffield.unit');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return $query->result();
		}

	}	

		public function get_unit_analysis_id($cs_id){
		$this->db->select('*');
		$this->db->from('csi_sheffield.unit');
		$this->db->where('Unit_id',$cs_id);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return $query->result();
		}
	}


		public function load_emp_analysis(){
		$this->db->select("*");
		$this->db->from('csi_sheffield.employee');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return $query->result();
		}

	}	

		public function get_emp_analysis_id($emp_a_id){
		$this->db->select('*');
		$this->db->from('csi_sheffield.employee');
		$this->db->where('id',$emp_a_id);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return $query->result();
		}
	}


	public function get_analysis_update($ID){
		$this->db->select('*');
		$this->db->from('csi_sheffield.dna_analysis');
		$this->db->where('analysis_id',$ID);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return $query->result();
		}
	}


	public function update_analysis($user,$ID){
			$this->db->where('analysis_id',$ID);
			$this->db->update('csi_sheffield.dna_analysis',$user);
	}


	public function delete_analysis($ID){
		$this->db->where('analysis_id',$ID);
		$this->db->delete('csi_sheffield.dna_analysis');
	}
//-----------------------------------------------------------------


public function add_dna_results($user){
		$this->db->insert('csi_sheffield.dna_results',$user);
	}

	public function get_dna_results(){
		$this->db->select("*");
		$this->db->from('csi_sheffield.dna_results');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return $query->result();
		}
	}


		public function load_dnaA_dnaR(){
		$this->db->select("*");
		$this->db->from('csi_sheffield.dna_analysis');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return $query->result();
		}

	}	

		public function get_dnA_dnaR_id($dnaR_id){
		$this->db->select('*');
		$this->db->from('dna_analysis');
		$this->db->where('csi_sheffield.analysis_id',$dnaR_id);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return $query->result();
		}
	}


		public function load_emp_dnar(){
		$this->db->select("*");
		$this->db->from('csi_sheffield.employee');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return $query->result();
		}

	}	

		public function get_emp_dnar($emp_id){
		$this->db->select('*');
		$this->db->from('csi_sheffield.employee');
		$this->db->where('id',$emp_id);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return $query->result();
		}
	}

	  public function get_dna_results_update($ID){
    $this->db->select('*');
    $this->db->from('csi_sheffield.dna_results');
    $this->db->where('result_ID',$ID);
    $query = $this->db->get();
    if($query->num_rows()>0){
      return $query->result();
    }else{
      return $query->result();
    }
  }
  

	public function update_dna_results($user,$ID){
			$this->db->where('result_ID',$ID);
			$this->db->update('csi_sheffield.dna_results',$user);
	}

	public function delete_dna_results($ID){
		$this->db->where('result_ID',$ID);
		$this->db->delete('csi_sheffield.dna_results');
	}
//------------------------------------------------------------------------------


	public function add_dna_sample($user){
		$this->db->insert('csi_sheffield.dna_sample',$user);
	}

	public function get_dna_sample(){
		$this->db->select("*");
		$this->db->from('csi_sheffield.dna_sample');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return $query->result();
		}
	}

	public function load_dnaA(){
		$this->db->select("*");
		$this->db->from('csi_sheffield.dna_analysis');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return $query->result();
		}

	}	

		public function get_dnaA($dnA_id){
		$this->db->select('*');
		$this->db->from('csi_sheffield.dna_analysis');
		$this->db->where('analysis_id',$dnA_id);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return $query->result();
		}
	}


	public function get_dna_sample_update($ID){
		$this->db->select('*');
		$this->db->from('csi_sheffield.dna_sample');
		$this->db->where('sample_id',$ID);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return $query->result();
		}
	}

	public function update_dna_sample($user,$ID){
			$this->db->where('sample_id',$ID);
			$this->db->update('csi_sheffield.dna_sample',$user);
	}

	public function delete_dna_sample($ID){
		$this->db->where('sample_id',$ID);
		$this->db->delete('csi_sheffield.dna_sample');
	}
//-----------------------------------------------------------
	public function add_initial_test($user){
		$this->db->insert('initial_test',$user);
	}

	public function get_initial_test(){
		$this->db->select("*");
		$this->db->from('csi_sheffield.initial_test');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return $query->result();
		}
	}


		public function load_it_dnaA(){
		$this->db->select("*");
		$this->db->from('csi_sheffield.dna_analysis');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return $query->result();
		}

	}	

		public function get_it_dnaA_id($it_id){
		$this->db->select('*');
		$this->db->from('csi_sheffield.dna_analysis');
		$this->db->where('analysis_id',$it_id);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return $query->result();
		}
	}


		public function load_emp_it(){
		$this->db->select("*");
		$this->db->from('csi_sheffield.employee');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return $query->result();
		}

	}	

		public function get_emp_it($emp_id){
		$this->db->select('*');
		$this->db->from('csi_sheffield.employee');
		$this->db->where('id',$emp_id);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return $query->result();
		}
	}

	  public function get_initial_test_update($ID){
    $this->db->select('*');
    $this->db->from('csi_sheffield.initial_test');
    $this->db->where('initial_test_id',$ID);
    $query = $this->db->get();
    if($query->num_rows()>0){
      return $query->result();
    }else{
      return $query->result();
    }
  }

	public function update_initial_test($user,$ID){
			$this->db->where('initial_test_id',$ID);
			$this->db->update('csi_sheffield.initial_test',$user);
	}

	public function delete_initial_test($ID){
		$this->db->where('initial_test_id',$ID);
		$this->db->delete('csi_sheffield.initial_test');
	}


}

?>
