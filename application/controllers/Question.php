<?php
/**
 * 
 */
class Question extends CI_Controller
{
	public function CreationQuestion(){
		$this->load->view('Questionnaire/CreationQuestion');
	}
	public function AnswerQuestion(){
		$this->load->view('Questionnaire/QuestionDept');
	}
}

?>