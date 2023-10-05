<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" type="text/css" href="./Style/bootstrap.min.css">
	   <link rel="stylesheet" type="text/css" href="./Style/style.css">
	<title>Ajouter Un Parrainage</title>
</head>
<body>
<div class="container col-md-6 col-md-offset-3 spacer">
	<div class="panel panel-info">
		
<div class="panel-heading">Formulaire d'Ajout d'un Parrainage</div>
<div class="panel-body">
	<form method="POST" action="validationparrainage.php"> 

<div class="form-group">
	<label class="control-label">type de  Parrainage</label>
	<select class="form-control" name="typeparrainage">
	<option value="" selected>type de parrainage</option>
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
	<input type="text" name="nometprenomspar" class="form-control">

</div>


<div class="form-group">
	<label class="control-label">Mouvement ou Association </label>
	<input type="text" name="mouvparrain" class="form-control">

</div>
<div class="form-group">
	<label class="control-label">Fonction Occupée</label>
	<input type="text" name="respmouv" class="form-control">
</div>

<div class="form-group">
	<label class="control-label">Contact du Parrain</label>
	<input type="text" name="contactparrain" class="form-control">

</div>

<button class="btn btn-success" name="enregistrer" type="submit">Enregistrer le Parrain</button>
<button class="btn btn-danger" name="annuler" type="reset">Vider les Champs</button>
<a   href="index.php" class="btn btn-info" >RETOUR</a>




	</form>
	

</div>

</div>




</div>







	</div>







</div>

</body>
</html>