<?php

/**
 * 
 */
class ControlDRH extends CI_Controller
{
	public function PasswordTrue($pass){
		$sql = "SELECT Mot_de_passe FROM departement WHERE Mot_de_passe = ?";
		$result = $this->db->query($sql, array($pass));
		$valid = false;
		if ($result->num_rows() > 0) {
		 	$valid = true;
		}
		return $valid;
	}

	public function AuthentificationDRH(){
		$auth = $this->input->post('mdpDRH');
		$ok = $this->PasswordTrue($auth);
		if ($ok == true) {
			$this->load->view('DRHControlPage/pageDRHConfig');
		}
		else {
			redirect('welcome/index');
		}
	}

	public function navigation(){
		$this->load->view('DRHControlPage/pageDRHConfig');
	}
}
?>