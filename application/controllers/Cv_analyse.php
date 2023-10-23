<?php

/**
 * 
 */
class Cv_analyse extends CI_Controller
{
	
	public function cv()
	{
		if ($this->input->post('upload') != null) 
		{
			$fileIdentity = array();
			$fileDiplom = array();

			if (!empty($_FILES['fileDiplom']['name'])) {
				$config['upload_path'] = "Diplome_Authentification/";
				$config['allowed_types'] = "jpg|png|jpeg|pdf|gif";
				$config['size'] = "100";
				$config['file_name'] = $_FILES['fileDiplom']['name'];

				$this->load->library('upload',$config);

				if ($this->upload->do_upload('fileDiplom')) {
					$photoDiplom = $this->upload->data();
					$filename = $photoDiplom['file_name'];
					$fileDiplom['juste'] = $filename;
				} else {
					$fileDiplom['juste'] = 'failed';
				}
				if ($this->upload->do_upload('photo')) {
					$photoidentity = $this->upload->data();
					$filename = $photoidentity['file_name'];
					$fileIdentity['photoID'] = $filename;
				} else {
					$fileDiplom['juste'] = 'faileder';
				}
			} else {
				$fileDiplom['juste'] = 'faileds';
			}		
			$this->load->model('Cv_model','model');

			$nom = $this->input->post('name');
			$prenom = $this->input->post('firstName');
			$adresse = $this->input->post('address');
			$telephone = $this->input->post('tel');
			$objectif = $this->input->post('but');
			$experience = $this->input->post('exp_pro');
			$diplome = $this->input->post('diplome');
			$dateObtenu = $this->input->post('recuDiplome');
			$competence = $this->input->post('competence');
			$niveau = $this->input->post('niv');
			$langue = $this->input->post('lang');
			$sport = $this->input->post('sport');
			$activity = $this->input->post('activite');

			$this->model->insertionCV($nom,$prenom,$adresse,$telephone,$fileIdentity['photoID'],$objectif,$experience,$diplome,$dateObtenu,$fileDiplom['juste'],$competence,$langue,$niveau,$sport,$activity);
			redirect('Question/AnswerQuestion');
		}	
	}
}

?>

