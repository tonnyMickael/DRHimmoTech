<?php
 /**
  * 
  */
 class Cv_recru extends CI_Controller
 {
 	
 	public function cv_formulaire(){
 		$this->load->view("CV_Candidat/CV_Postulant");
 	}

    public function detailAnnonce(){
        $this->load->view("recrutement/detailAnnonce");
    }
 }
?>