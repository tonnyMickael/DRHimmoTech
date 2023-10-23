<?php

/**
 * 
 */
class Cv_model extends CI_model
{
	
	public function toLiteralNiveau($niveau){
		$literal = "";
		switch ($niveau) {
			case 0:
				$literal = "debutant";
				break;
			case 1:
				$literal = "moyen";
				break;
			case 2:
				$literal = "courant";
				break;	
		}
		return $literal;
	}

	public function toliteralLangue($langue){
		$letter = "";
		switch ($langue) {
			case 1:
				$letter = "malagasy";
				break;
			case 2:
				$letter = "anglais";
				break;
			case 3:
				$letter = "français";
				break;	
		}
		return $letter;
	}

	public function literalDiplome($intDiplome){
 		$lettre = "";
 		switch ($intDiplom){
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

 	public function toLiteralSport($sport){
 		$lettre = "";
 		switch ($sport) {
 			case 1:
 				$lettre = "football";
 				break;
 			case 2:
 				$lettre = "basketball";
 				break;
 			case 3:
 				$lettre = "jeu video";
 				break;
 		}
 		return $lettre;
 	}

 	public function toLiteralActivity($activity){
 		$lettre = "";
 		switch ($activity) {
 			case 0:
 				$lettre = "bénévolas";
 				break;
 			case 1:
 				$lettre = "autre";
 				break;
 		}
 		return $lettre;
 	}

 	public function insertionCV($nom,$prenom,$adresse,$telephone,$photo,$objectif,$experience,$diplome,$dateobtention,$justification,$competence,$langue,$niveau,$sport,$activity){
 		$request ="INSERT INTO cv VAlUES (null,'%s','%s','%s',%d,'%s','%s','%s',%d,'%s','%s','%s',%d,%d,%d,%d)";
 		$request = sprintf($request,$nom,$prenom,$adresse,$telephone,$photo,$objectif,$experience,$diplome,$dateobtention,$justification,$competence,$langue,$niveau,$sport,$activity);
 		try {
 			$this->db->query($request);
 		} catch (Exception $e) {
 			throw new Exception($e->getMessage());
            echo $e->getMessage();
 		} 
 	}
}
?>