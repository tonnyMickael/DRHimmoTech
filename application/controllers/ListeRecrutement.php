<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class ListeRecrutement extends CI_Controller
{
	
	public function listAnnonce(){
		$this->load->view('recrutement/posterecrutement');
	}
}
?>