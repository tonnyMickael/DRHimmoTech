<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class ControlDept extends CI_Controller
{
	public function trueMDP($dept,$mdp){
		$sql = "SELECT id,Mot_de_passe FROM departement WHERE id = ? AND Mot_de_passe = ?";
		$result = $this->db->query($sql, array($dept, $mdp));
		$test = false;
		if($result->num_rows() > 0){ $test = true; } 
		return $test;
	}

	public function AuthentificationDept(){
		$dept = $this->input->post('refDept');
		$password = $this->input->post('mdpService');
		$test = $this->trueMDP($dept,$password);
		if ($test == true) {
			$this->session->set_userdata('idDept',$dept);
			redirect('Form/formulaireDeBesoin','refresh');
		} else { redirect('welcome/index'); }
	}	
}
?>