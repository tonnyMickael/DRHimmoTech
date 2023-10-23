<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class BesoinDept extends CI_Controller{

	public function besoin(){
		$dept = $this->input->post('dept');
		$poste = $this->input->post('poste');
		$justification = $this->input->post('justificatif');
		$debut = $this->input->post('dateDebut');
		$fin = $this->input->post('dateFin');
		$termine = $this->input->post('dateEnd');
		$limite = $this->input->post('dateLimit');
		$diplom = $this->input->post('diplome');
		$experience = $this->input->post('experience');
		$competence = $this->input->post('competence');

		$this->load->model('Litteral','model');
		$this->model->insertBesoinDept($dept,$poste,$justification,$debut,$fin,$termine,$limite,$diplom,$experience,$competence);
		$dept = $this->session->userdata('idDept');

		$this->load->view("formulaire_besoin/FormulaireStandard");
	}	
}
?>