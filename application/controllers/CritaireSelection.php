<?php

/**
 * 
 */
class CritaireSelection extends CI_Controller
{
	
	public function insertCritere(){
		$id = $this->input->post('idDeptReclame');
		$sexe = $this->input->post('sexe');
		$diplome = $this->input->post('diplome');
		$langue = $this->input->post('lang');
		$niveau = $this->input->post('niv');
		$experience = $this->input->post('experience');

		$this->load->model('Critere_model','model');
		$idBesoin['besoin'] = $this->model->besoinID($id);
		$this->model->insertCritere($idBesoin['besoin'],$sexe,$diplome,$langue,$niveau,$experience);
	}
}
?>