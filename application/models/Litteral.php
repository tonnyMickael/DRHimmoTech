<?php
 if (! defined('BASEPATH')) exit('No direct script access allowed');

 /**
  * 
  */
 class Litteral extends CI_model{
 	

 	public function DepartementName(){
 		$sql = "SELECT id,Nom_departement,Reference FROM departement";
 		$query = $this->db->query($sql);
 		$tab = array();
 		foreach ($query->result_array() as $value) { $tab[] = $value; }
 		return $tab;
 	}
    
    public function DemandeDept($id){
        $sql = "SELECT id,Nom_departement,Reference FROM departement WHERE id = ?";
        $query = $this->db->query($sql,array($id));
        $dept = array();
        foreach ($query->result_array() as $val) {
            $dept[] = $val;
        }
        return $dept;
    }

 	public function RefPost($deptID){
 		$sql = "SELECT id,Poste FROM posteDepartement WHERE idDept = ?";
 		$query = $this->db->query($sql, array($deptID));
 		$ref = array();
 		foreach ($query->result_array() as $key) { $ref[] = $key; }
 		return $ref;
 	}

   

 	public function literalDiplome($intDiplome){
 		$lettre = ""; 
 		switch ($intDiplome){
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
 		$lettre ="";
 		switch ($intExp){
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

 	public function insertBesoinDept($dept, $poste, $justification, $dateDebut, $dateFin, $dateEnd, $datelimit, $datecreation, $diplom, $Experience, $competence,$mission){
 		$sql = "INSERT INTO besoin VALUES(null, %d, %d, '%s', '%s', '%s','%s','%s','%s',%d, %d, '%s', '%s')";
 		$sql = sprintf($sql,$dept,$poste,$justification,$dateDebut,$dateFin,$dateEnd,$datelimit,$datecreation,$diplom,$Experience,$competence,$mission);
 		try {
 			$this->db->query($sql);
 		} catch (Exception $e) {
 			throw new Exception($e->getMessage());
            echo $e->getMessage();
 		}
 	}

    public function getBesoinData($dept){
        $request = "SELECT id,date_fin_recrutement,date_limit_recrutement FROM besoin WHERE dept = ?";
        $request = $this->bd->query($request, array($dept));
        $data = array();
        foreach ($request->result_array() as $response) {
            $data[] = $response; 
        }
        return $data;
    }

}


?>