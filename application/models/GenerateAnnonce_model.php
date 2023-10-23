<?php

/**
 * 
 */
class GenerateAnnonce_model extends CI_model
{

	public function generation(){
		$reponse = array ();
		$request = "SELECT * FROM annonce_recrutement";
		$query = $this->db->query($request);
		foreach ($query->result_array() as $value) {
			$reponse[] = $value;
		}
		return $reponse;
	}
}
?>