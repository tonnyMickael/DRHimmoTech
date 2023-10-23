<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Optionmenu extends CI_Controller {

    public function optionsPoste() {

        $selectedOption = $this->input->post('dept');

        // Exécutez votre requête SQL pour obtenir les options du deuxième menu
        // $query = $this->db->query("SELECT id, Poste FROM posteDepartement WHERE idDept = ?", array($selectedOption));
        $sql = "SELECT id, Poste FROM posteDepartement WHERE idDept = %d";
        $sql = sprintf($sql,$selectedOption);
        try{  
            $this->db->query($sql); 
            $options = array();
            foreach ($query->result_array() as $row) {
                $options[] = "<option value=\"$row->id\">$row->Poste</option>";
            }
            echo $options;
        } cacth (Exception $e){
            throw new Exception($e->getMessage());
            echo $e->getMessage();
        }

    }
}
?>