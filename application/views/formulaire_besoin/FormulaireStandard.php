<?php
	$deptNom = $this->session->userdata('DeptDemande');
	$posteDept = $this->session->userdata('refPosteDept');
?>
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
		<button id="Critepop"><div class="link">ajouter critère de sélection</div></button>
		<a href="<?php echo base_url('Question/CreationQuestion'); ?>" class="links">Créer les questionnaires</a>
    	<!-- /////////////////////////////////////////////////////////////////////////DRH POP uP -->
    	<?php include("application/views/pop_up/PopUP_critere.php");?>

	</div>
	<div>
		<h1 id="entete">Formulaire des besoins de votre Departement</h1>
	</div>
	<div id="accueil">
		<a href="<?php echo base_url('welcome/index'); ?>">Retour</a>
	</div>
	<div id="intros">		
		<form action="<?php echo base_url('BesoinDept/besoin'); ?>" method="post">
			<p>
				<label class="label">Votre Departement:</label>
					<select name="dept" id="service">
						<?php for ($i=0; $i < count($deptNom['Service']) ; $i++) { ?>
							<option value="<?php echo $deptNom['Service'][$i]['id']; ?>"><?php echo $deptNom['Service'][$i]['Nom_departement']; ?>(<?php echo $deptNom['Service'][$i]['Reference'];?>)</option>
						<?php } ?>
					</select>
			</p>
			<p>
				<label class="label">Poste vacant:</label> 
					<select name="poste" id="post">
						<option>Poste</option>
						<?php for ($j=0; $j < count($posteDept['poste']); $j++) { ?>
							<option value="<?php echo $posteDept['poste'][$j]['id']; ?>"><?php echo $posteDept['poste'][$j]['Poste']; ?></option>
						<?php } ?>
					</select>
			</p>
			<p>
				<label class="label">Justificatif:</label> 
					<input type="text" name="justificatif" id="justification" placeholder="justificatif des besoins de votre departement">
			</p>
			<p>
				<label class="label">Date debut contrat: </label>
					<input type="date" class="date" name="dateDebut">
			</p>
			<p>
				<label class="label">Date fin contrat: </label>
					<input type="date" class="date" name="dateFin">
			</p>
			<p>
				<label class="label">Date fin de recrutement: </label>
					<input type="date" class="date" name="dateEnd">
			<p>
			<p>
				<label class="label">Date limite de recrutement: </label>
					<input type="date" class="date" name="dateLimit">
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
			<p>
				<label class="label">Mission à accomplir:</label>
					<input type="text" name="misson" id="competence" placeholder="séparer par un virgule les competences requise">
			</p>
			<input type="submit" value="Valider" id="button">				  				
		</form>
	</div>

	<script type="text/javascript" src="<?php echo base_url("assets/js/scriptMenu.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/scriptCritere.js"); ?>"></script>
</body>
</html>