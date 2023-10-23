<?php $deptNom = $this->session->userdata('deptName'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/indexDRH.css"); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/form.css"); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/pop-up.css"); ?>">
	<link rel="icon" href="<?php echo base_url("assets/image/3.png"); ?>">
	<title>Curriculum Vitae</title>
</head>
<body>
	<div id="head">
		<img src="<?php echo base_url("assets/image/4.png"); ?>">
	</div>
	<div>
		<h1 id="entete">Remplir votre curriculum vitae</h1>
	</div>
	<div id="accueil">
		<a href="<?php echo base_url('ListeRecrutement/listAnnonce'); ?>">Annuler</a>
	</div>
	<div id="intros">		
		<form action="<?php echo base_url('Cv_analyse/cv'); ?>" method="post" enctype="multipart/form-data">
			<h2>Coordonnées personnelles</h2>
			<p>
				<label class="label">Nom: </label><input type="text" name="name" id="noun"> <label class="label">Prénom: </label><input type="text" name="firstName" id="firstnoun"> 
			</p>
			<p>
				<label class="label">Adresse: </label><input type="text" name="address" id="adresse"> <label class="label">Numero de téléphone: </label> <input type="number" name="tel" id="phone" placeholder="022 22 456 87">
			</p>
			<p>
				<label class="label">photo:</label><input type="file" name="photo" id="adresse">
			</p>
			<hr/>
			<h2>Objectif</h2>
			<p>
				<label class="label">votre objectif:</label> <input type="text" name="but" id="objectif">
			</p>
			<hr/>
			<h2>Expérience professionnelle</h2>
			<p>
				<label class="label">vos expériences professionnelles: </label> <input type="text" name="exp_pro" id="exp_proffe">
			</p>
			<hr/>
			<h2>Education</h2>
			<p>
    			<label class="label">Vos diplômes: </label>
    				<input type="radio" name="diplome" value="1" id="diplome-doctorat"><!--checked -->
    				<label for="diplome-doctorat">Doctorat</label>

    				<input type="radio" name="diplome" value="2" id="diplome-master">
    				<label for="diplome-master">Master</label>

    				<input type="radio" name="diplome" value="3" id="diplome-licence">
    				<label for="diplome-licence">Licence</label>

    				<input type="radio" name="diplome" value="4" id="diplome-bacc">
    				<label for="diplome-bacc">Baccalauréat</label>

    				<input type="radio" name="diplome" value="5" id="diplome-bepc">
    				<label for="diplome-bepc">BEPC</label>

    				<input type="radio" name="diplome" value="6" id="diplome-cepe">
    				<label for="diplome-cepe">CEPE</label>
			</p>
			<p>
				<label class="label">date d'obtention:</label> <input type="date" name="recuDiplome" id="dateObtenu">  
			</p>
			<p>
				<label class="label">Justificatif du diplôme:</label><input type="file" name="fileDiplom" id="files">
			</p>
			<hr/>
			<h2>Compétences</h2>
			<p>
				<label class="label">vos compétences: </label> <input type="text" name="competence" id="comptence_pro">
			</p>
			<hr/>
			<h2>Langues</h2>
			<p>
				<label class="label">les langues que vous maîtrisez: </label>
				<select name="lang">
					<option value="1">malagasy</option>
					<option value="2">anglais</option>
					<option value="3">français</option>
				</select>
				<select name="niv">
					<option>niveau</option>
					<option value="0">débutant</option>
					<option value="1">moyen</option>
					<option value="2">courant</option>
				</select>
			</p>
			<hr/>
			<h2>Centre d'intérêt</h2>
			<p>
				<label class="label">vos centre d'intérêt:</label>
				<select name="sport">
					<option>loisir</option>
					<option value="1">football</option>
					<option value="2">basketball</option>
					<option value="3">jeu video</option>
				</select>
				<select name="activite">
					<option>activité</option>
					<option value="0">bénévolas</option>
					<option value="1">autre</option>
				</select>
			</p>
			<input type="submit" value="Valider" id="button" name="upload">				  				
		</form>
	</div>
</body>
</html>