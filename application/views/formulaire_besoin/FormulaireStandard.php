<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/indexDRH.css"); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/form.css"); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/pop-up.css"); ?>">
	<link rel="icon" href="<?php echo base_url("assets/image/3.png"); ?>">
	<title>Formulaire Standard</title>
</head>
<body>
	<div id="head">
		<img src="<?php echo base_url("assets/image/4.png"); ?>">
		<button id="PopupDRH"><div class="link">Voir les annonces reçu</div></button>
		<button id="PopupForm"><div class="link">Formulaire des besoins</div></button>
		
    	<!-- /////////////////////////////////////////////////////////////////////////DRH POP uP -->
    	<?php include("application/views/pop_up/DRH_pop_up.php");?>
    	<!-- ////////////////////////////////////////////////////////////////////////Form POP UP -->
        <?php include("application/views/pop_up/Formulaire_pop_up.php"); ?>
	</div>
	<div>
		<h1 id="entete">Formulaire des besoins de votre Departement</h1>
	</div>
	<div id="accueil">
		<a href="<?php echo base_url('welcome/index'); ?>">Retour</a>
	</div>
	<div id="intros">		
		<form action="" method="post">
			<p>
				<label class="label">Votre Departement:</label>
					<select name="dept" id="service">
						<option>DRH</option>
						<option>DLF</option>
						<option>DGP</option>
						<option>DLG</option>
					</select>
			</p>
			<p>
				<label class="label">Poste vacant:</label> 
					<select name="poste" id="post">
						<option>poste</option>
						<option>poste</option>
						<option>poste</option>
					</select>
			</p>
			<p>
				<label class="label">Justificatif:</label> 
					<input type="text" name="justificatif" id="justification" placeholder="justificatif des besoins de votre departement">
			</p>
			<p>
				<label class="label">Date debut: </label>
					<input type="date" id="date" name="dateDebut">

			</p>
			<p>
				<label class="label">Date fin: </label>
					<input type="date" id="date" name="dateFin">

			</p>
			<p>
				<label class="label">Diplôme  requise:</label> 
					<select name="diplome" id="diplom">
						<option value="1">doctorat</option>
						<option value="2">master</option>
						<option value="3">licence</option>
						<option value="4">bacc</option>
						<option value="5">bepc</option>
						<option value="6">cepe</option>
					</select>
			</p>
			<p>
				<label class="label">Expérience requise:</label> 
					<select name="experience" id="experience">
						<option value="1">1 à 5</option>
						<option value="2">5 à 10</option>
						<option value="3">15 à 20</option>
					</select>
			</p>				  
			<p>
				<label class="label">Compétence requise:</label>
					<input type="text" name="competence" id="competence" placeholder="séparer par un virgule les competences requise">
			</p>
			<input type="submit" value="Valider" id="button">				  				
		</form>
	</div>
	<script type="text/javascript" src="<?php echo base_url("assets/js/scriptDRH.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/scriptFormulaire.js"); ?>"></script>
</body>
</html>