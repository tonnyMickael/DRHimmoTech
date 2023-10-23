<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class ListeRecrutement extends CI_Controller
{
	
	public function listAnnonce(){
		$this->load->model('GenerateAnnonce_model','model');
		$annonceList['recru'] = $this->model->generation();
		$this->session->set_userdata('annonceRecru',$annonceList);
		$this->load->view('recrutement/posterecrutement');
	}
}
?>