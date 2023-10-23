<?php

/**
 * 
 */
class Critere_model extends CI_Controller
{
	
	public function insertionCritere($idBesoin, $genre, $diplome, $langue, $niveau, $experience){
		$request = "INSERT INTO critere VAlUES (null, %d, %d, %d, %d, %d, %d)";
		try{
			$this->db->query($sql,array($idBesoin,$genre,$diplome,$langue,$niveau,$experience));
		} catch (Exception $e) {
 			throw new Exception($e->getMessage());
            echo $e->getMessage();
 		}
 	}

 	public function besoinID($id){
        $sql = "SELECT id FROM besoin WHERE dept = %d";
        $sql = sprintf($sql,$id);
        $query = $this->db->query($sql);
        $id = array();
        foreach ($query->result_array() as $idBesoin) {
            $id[] = $idBesoin;
        }
        return $id;
    }
}

?>