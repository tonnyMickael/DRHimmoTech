<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/indexDRH.css"); ?>">
	<link rel="icon" href="<?php echo base_url("assets/image/3.png"); ?>">
	<title>Questionnaire</title>
</head>
<body>
	<div id="head">
		<img src="<?php echo base_url("assets/image/4.png"); ?>">	
 	</div>
 	<div id="accueil">
		<a href="<?php echo base_url('welcome/index'); ?>">Terminer</a>
	</div>
	<div id="intro">
		<h1>création du questionnaire</h1>
		<form action="#" method="post">
			<p>
				<label class="label">Question a poser:</label> 
					<input type="text" name="question" id="justification">
			</p>
			<p>
				<label class="label">selection des reponses possible:</label> 
					<input type="text" name="responsePossible" id="justification">
			</p>
			<p>
				<label class="label">réponse vrai:</label> 
					<input type="text" name="vraiREponse" id="justification">
			</p>
			<button>Valiser</button>
		</form>
	</div>	
</body>
</html>