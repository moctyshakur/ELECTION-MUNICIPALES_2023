<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" type="text/css" href="./Style/bootstrap.min.css">
	   <link rel="stylesheet" type="text/css" href="./Style/style.css">
	<title>Modification d'Un Parrainage</title>
</head>
<body>
<div class="container col-md-6 col-md-offset-3 spacer">
	<div class="panel panel-info">
		
<div class="panel-heading">Formulaire de modification d'un Parrainage</div>
<div class="panel-body">
	
	<form method="POST" action="Validation/validationparrainage.php"> 
		<div class="form-group">
	<label class="control-label">N° Identifiant</label>
	<input type="text" name="id_p" class="form-control"  readonly="readonly"    value="<?php echo $ligne[0]?>">

</div>

<div class="form-group">
	<label class="control-label">type de  Parrainage</label>
	<select class="form-control" name="typeparrainage" >
	<option value="<?php echo $ligne[1]?>" selected>type de parrainage</option>
		<option value="politique">politique</option>
	<option value="Culturel">Culturel</option>
	<option value="Société Civile">Société Civile</option>
	<option value="Social">Social</option>
	<option value="Administratif">Administratif</option>
	<option value="Réligieux">Réligieux</option>
	<option value="Tradditionel">Tradditionel</option>
	<option value="Autres">Autres</option>
	</select>

</div>		
<div class="form-group">
	<label class="control-label">Nom et Prenom du Parrain</label>
	<input type="text" name="nometprenomspar" class="form-control" value="<?php echo $ligne[2]?>">

</div>


<div class="form-group">
	<label class="control-label">Mouvement du Parraint </label>
	<input type="text" name="mouvparrain" class="form-control" value="<?php echo $ligne[3]?>">

</div>

<div class="form-group">
	<label class="control-label">Fonction Occupée</label>
	<input type="text" name="respmouv" class="form-control" value="<?php echo $ligne[4]?>">
</div>


<div class="form-group">
	<label class="control-label">Contact du Parrain</label>
	<input type="text" name="contactparrain" class="form-control" value="<?php echo $ligne[5]?>">

</div>

<button class="btn btn-success" name="modif" type="submit">Modifier</button>
<button class="btn btn-danger" name="annuler" type="reset">Vider les Champs</button>




	</form>
	

</div>

</div>




</div>







	</div>







</div>

</body>
</html>