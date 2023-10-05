


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" type="text/css" href="../Style/bootstrap.min.css">
	   <link rel="stylesheet" type="text/css" href="../Style/style.css">
	   <script type="text/javascript" src="../Script/script.js"></script> 
	   	 
	<title>Liste des Electeurs NT</title>
</head>
<body>
		<div class="container">
			<div class="panel panel-body">
<form method="POST" action="rechercher.php"> 
	<label class="control-label">Recherche Electeurs </label>
<input type="text" name="Recherche"  required>
<button class="btn btn-success" name="rechercher" type="submit">Recherche Electeur</button>

	
 </form>

</div>
</div>
	<div class="container  ">
		<div class="panel panel-info">
			<div class="panel-heading">Liste des Electeurs </div>


			<div class="panel-body">

				<table class="table table-hover">
					<tr>
						<th>N°</th>
						<th>N° pièce</th>
						<th>Nom et Prenom</th>
						<th>Date de Naissance</th>
						<th>Lieu de Naissance</th>
						<th>Quartier</th>
						<th>Lieu de Vote</th>
						<th>Bureau de vote</th>
						<th>Contact 1</th>
						<th>Contact 2</th>
						<th>Parrainé Par</th>
						<th>Action 1</th>
					</tr>
<tr>
<?php 

$nombre=listeElecteurs();
$totalelec=mysqli_num_rows($nombre);
while ($svg=mysqli_fetch_row($linke)){
	echo "<tr>
	<td>$svg[0]</td>
	<td>$svg[1]</td>
	<td>$svg[2]</td>
	<td>$svg[3]</td>
	<td>$svg[4]</td>
	<td>$svg[5]</td>
	<td>$svg[6]</td>
	<td>$svg[7]</td>
	<td>$svg[8]</td>
	<td>$svg[9]</td>
	<td>$svg[10]</td>

    
	<td><a href='?ok=editel&ID_ELECT=$svg[0]' class='btn btn-primary'>Editer</a></td>
	</tr>";

}

?>


</tr>

</table>
</div>
		</div>

	</div>
<div class="container">
<div class=" panel panel-info">

<div class="panel-heading">TOTAL ELECTEURS ENROLES : <?php echo("$totalelec")?></div>
<a   href="index.php" class="btn btn-info" >RETOUR</a>
		
</div>
</div>

</div>			

</body>
</html>