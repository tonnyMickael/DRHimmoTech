<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Form extends CI_Controller
{
	public function formulaireDeBesoin(){
		$id = $this->session->userdata('idDept');
		$this->load->model('Litteral','model');		
		$Dept['Service'] = $this->model->DemandeDept($id);
		$this->session->set_userdata('DeptDemande',$Dept);
		$poste['poste'] = $this->model->RefPost($id);
		$this->session->set_userdata('refPosteDept',$poste);
		$this->load->view("formulaire_besoin/FormulaireStandard");
	}
}

?>