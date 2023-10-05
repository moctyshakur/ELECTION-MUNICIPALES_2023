<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" type="text/css" href="./Style/bootstrap.min.css">
	   <link rel="stylesheet" type="text/css" href="./Style/style.css">
	   <script type="text/javascript" src="./Script/script.js"></script> 
	   	 
	<title>Liste Parrainage</title>
</head>
<body>

	<div class="container  spacer">
		<div class="panel panel-info">
			<div class="panel-heading">Liste des Parrains</div>
			<div class="panel-body">
				<table class="table table-hover">
					<tr>
						<th>Identifiant du Parrain</th>
						<th>Type de parrainage</th>
						<th>Nom et Prenom du Parrain</th>
						<th>Mouvement</th>
						<th>Responsabilité</th>
						<th>Contact</th>
						<th>Action 1</th>
					</tr>
<tr>
<?php 
while ($svg=mysqli_fetch_row($linkp)) { 
	echo "<tr>
	<td>$svg[0]</td>
	<td>$svg[1]</td>
	<td>$svg[2]</td>
	<td>$svg[3]</td>
	<td>$svg[4]</td>
	<td>$svg[5]</td>
    
	<td><a href='?ok=editp&id_p=$svg[0]' class='btn btn-primary'>Editer</a></td>
	</tr>";

}

?>


</tr>

</table>
				
			</div>
			
		</div>
		
	</div>
		<div class="container">
			<div class="panel panel-body">
<form method="POST" action="listeparrainage.php"> 
	<label class="control-label">Recherche Parrainage </label>
	<div class="form-group">

<select class="form-control" name="nometprenomspar">
	<option>Choississez le Parrain</option>
	  <?php
$list=listeParainage();
while ($ligne=mysqli_fetch_row($list)) {
echo "<option value='$ligne[2]'>$ligne[0] -$ligne[2] </option>";
}
?>
</select>
</div>
<button class="btn btn-success" name="recherparrainage" type="submit">Recherche Parrainage</button>
<a   href="index.php" class="btn btn-info" >RETOUR</a>



 </form>
</div>
</div>


</body>
</html>