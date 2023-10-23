<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Annonce extends CI_Controller
	{
		
		public function generateRecrutement()
		{
			$this->load->model('GenerateAnnonce_model','model');
			$annonce['recru'] = $this->model->generation();
			$this->session->set_userdata('annonceRecru',$annonce);
			$this->load->view('Annonce/generateAnnonce');
		}
	}
?>