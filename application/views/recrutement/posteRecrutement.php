<?php $list['Poste'] = $this->session->userdata('annonceRecru'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/indexDRH.css"); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/pop-up.css"); ?>">
	<link rel="icon" href="<?php echo base_url("assets/image/3.png"); ?>">
	<title>Liste de recrutement</title>
</head>
<body>
	<div id="head">
		<img src="<?php echo base_url("assets/image/3.png"); ?>">
		
	</div>
	<div id="accueil">
		<a href="<?php echo base_url('welcome/index'); ?>">Quitter</a>
	</div>
	<div id="">
		<h1>Liste des annonces de recrutements</h1>
		<div id="">
			<table border="2" class="tableau">
				<tr class="">
					<th class="">Departement</th>
					<th class="">Poste</th>
					<th class="">Date fin de recrutement</th>
				</tr>
				<?php for ($i=0; $i < count($list['Poste']); $i++) { ?>
					<tr class="">
						<td class=""><?php echo $list['Poste']['recru'][$i]['Nom_departement']; ?></td>
						<td class=""><?php echo $list['Poste']['recru'][$i]['Poste']; ?></td>
						<td class=""><?php echo $list['Poste']['recru'][$i]['date_fin_recrutement']; ?></td>
						<td class=""><a href="<?php echo base_url("Cv_recru/detailAnnonce");?>?id=<?php echo $list['Poste']['recru'][$i]['id']; ?>">Détail</a></td>
					</tr>
				<?php } ?>
			</table>
		</div>
	</div>
</body>
</html>