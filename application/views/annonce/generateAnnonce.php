<?php $info['annonce'] = $this->session->userdata('annonceRecru'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/indexDRH.css"); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/pop-up.css"); ?>">
	<link rel="icon" href="<?php echo base_url("assets/image/3.png"); ?>">
	<title>Annonce de recrutement</title>
</head>
<body>
	<div id="head">
		<img src="<?php echo base_url("assets/image/4.png"); ?>">
		<button id="PopupDRH"><div class="link">Voir les annonces reçu</div></button>
		<button id="PopupForm"><div class="link">ajouter critère de selection</div></button>
		
    	<!-- /////////////////////////////////////////////////////////////////////////DRH POP uP -->
    	<?php include("application/views/pop_up/DRH_pop_up.php"); ?>
    	<!-- ////////////////////////////////////////////////////////////////////////Form POP UP -->
        <?php include("application/views/pop_up/Formulaire_pop_up.php"); ?>
	</div>
	<div id="accueil">
		<a href="<?php echo base_url('ControlDRh/navigation'); ?>">Retour</a>
	</div>
	<div id="">
		<h1>Liste des annonces de recrutements génèrer</h1>
		<div id="">
			<table border="2" class="">
				<tr class="">
					<th class="">Departement</th>
					<th class="">poste</th>
					<th class="">date de creation</th>
					<th class="">date fin de recrutement</th>
					<th class="">date limite de recrutement</th>
				</tr>
				<?php for ($i=0; $i < count($info['annonce']); $i++) { ?>
					<tr class="">
						<td class=""><?php echo $info['annonce']['recru'][$i]['Nom_departement'];?></td>
						<td class=""><?php echo $info['annonce']['recru'][$i]['Poste'];?></td>
						<td class=""><?php echo $info['annonce']['recru'][$i]['datecreation'];?></td>
						<td class=""><?php echo $info['annonce']['recru'][$i]['date_fin_recrutement'];?></td>
						<td class=""><?php echo $info['annonce']['recru'][$i]['date_limit_recrutement'];?></td>
						<td class=""><a href="<?php echo $info['annonce']['recru'][$i]['id'];?>">modifier</a></td>
						<td class=""><a href="<?php echo $info['annonce']['recru'][$i]['id'];?>">supprimer</a></td>
						<td class=""><a href="<?php echo $info['annonce']['recru'][$i]['id'];?>">détail de l'annonce</a></td>
					</tr>
				<?php } ?>
			</table>
		</div>
	</div>
	<script type="text/javascript" src="<?php echo base_url("assets/js/scriptDRH.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/scriptFormulaire.js"); ?>"></script>
</body>
</html>