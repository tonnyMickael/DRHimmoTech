<?php 
 
	/**
	 * 
	 */
	class Mission_model extends CI_model
	{
		public function mission($id){
			$request = "SELECT competence,mission FROM besoin WHERE id = '%s'";
			$req = $this->db->query($request,array($id));
			$separator = ",";
			$competence = "";
			$missions = array();
			foreach ($req->result_array() as $key) {
				$competence = $key;
			}
			$mission=explode($separator, $competence);
			
		}
	}
?>