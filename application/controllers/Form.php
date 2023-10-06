<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Form extends CI_Controller
{

	public function formulaireDeBesoin(){
		$this->load->view("formulaire_besoin/FormulaireStandard");
	}
}

?>