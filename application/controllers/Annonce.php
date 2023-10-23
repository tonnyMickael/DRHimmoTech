<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Annonce extends CI_Controller
	{
		
		public function generateRecrutement()
		{
			$this->load->view('Annonce/generateAnnonce');
		}
	}
?>