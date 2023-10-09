<?php
 if (! defined('BASEPATH')) exit('No direct script access allowed');

 /**
  * 
  */
 class Litteral extends CI_model{
 	

 	public function DepartementName(){
 		$sql = "SELECT Nom_departement,Reference FROM departement";
 		$query = $this->db->query($sql);
 		$tab = array();
 		foreach ($query->result_array() as $value) {
 			$tab[] = $value; 
 		}
 		return $tab;
 	}

 	public function RefDept(){
 		$sql = "SELECT id,Reference FROM departement";
 		$query = $this->db->query($sql);
 		$ref = array();
 		foreach ($query->result_array() as $key) {
 			$ref[] = $key;
 		}
 		return $ref;
 	}

 	public function literalDiplome($intDiplome){
 		$diplom = $intDiplome;
 		$lettre;
 		switch ($diplom){
 			case 1:
 				$lettre = "doctorat";
 				break;
 			case 2:
 				$lettre = "master";
 				break;
 			case 3:
 				$lettre = "licence";
 				break;
 			case 4:
 				$lettre = "bacc";
 				break;
 			case 5:
 				$lettre = "bepc";
 				break;
 			case 6:
 				$lettre = "cepe";
 				break;
 		}
 		return $lettre;
 	}

 	public function literalExperience($intExp){
 		$experience = $intExp;
 		$lettre;
 		switch ($experience){
 			case 1:
 				$lettre = "1 à 5";
 				break;
 			case 2:
 				$lettre = "5 à 10";
 				break;
 			case 3:
 				$lettre = "10 à 15";
 				break;
 		}
 		return $lettre;
 	}

 	public function insertBesoinDept($poste, $justification, $dateDebut, $dateFin, $diplom, $Experience){
 		$sql = "INSERT INTO besoin VALUES(null, %d, %s, %d, %d, %d)";
 		$sql=sprintf($poste,$justification,$durer,$diplom,$Experience);
 		try {
 			$this->db->query($sql);
 		} catch (Exception $e) {
 			throw new Exception($e->getMessage());
            echo $e->getMessage();
 		}
 	}

}


?>