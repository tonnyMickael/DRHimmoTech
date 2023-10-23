<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/indexDRH.css"); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/pop-up.css"); ?>">
	<link rel="icon" href="<?php echo base_url("assets/image/3.png"); ?>">
	<title>DRH Page ImmoTech</title>
</head>
<body>
	<div id="head">
		<img src="<?php echo base_url("assets/image/3.png"); ?>">
		<button id="PopupDRH"><div class="link">Voir les annonces reçu</div></button>
		<button id="PopupForm"><div class="link">Formulaire des besoins</div></button>
		
    	<!-- /////////////////////////////////////////////////////////////////////////DRH POP uP -->
    	<?php include("application/views/pop_up/DRH_pop_up.php");?>
    	<!-- ////////////////////////////////////////////////////////////////////////Form POP UP -->
        <?php include("application/views/pop_up/Formulaire_pop_up.php"); ?>

	</div>
	<div id="intro">
		<h1>BIENVENUE SUR LA PAGE DU DEPARTEMENT DES RESSOURCES HUMAINES</h1>
		<button> <a href="<?php echo base_url("ListeRecrutement/listAnnonce");?>"><div class="link">Annonce de recrutement</div></a></button>
	</div>

	<script type="text/javascript" src="<?php echo base_url("assets/js/scriptDRH.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/scriptFormulaire.js"); ?>"></script>
</body>
</html>