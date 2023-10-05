<?php

 function getConnexion(){
 	$host='localhost';
 	$user='root';
 	$pwd='';
 	$dbname='bd_municipalite2023';
 	$scon=mysqli_connect($host,$user,$pwd,$dbname);
 	return $scon;

 }

function executeSQL($sql){
$exec=mysqli_query(getConnexion(),$sql);


return $exec;



}



function RechercheElecteurs($nometprenoms){
$sql="SELECT * FROM electeurs WHERE nometprenoms like '%$nometprenoms%'";
return executeSQL($sql);

}



if (isset($_POST['rechercher'])){
	
$nometprenoms=$_POST['Recherche'];	

$resultat=RechercheElecteurs($nometprenoms);
$totalelec=mysqli_num_rows($resultat);
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" type="text/css" href="../Style/bootstrap.min.css">
	   <link rel="stylesheet" type="text/css" href="../Style/style.css">
	   <script type="text/javascript" src="../Script/script.js"></script> 
	   	 
	<title>recherche Electeurs</title>
</head>
<body style="background: url(../Style/nasseneba5.jpg);background-repeat: no-repeat;background-size: cover;">
<div class="container  spacer">
	<div class="panel panel-info">
		<div class="panel-heading">REcherche Electeur</div>
		<div class="panel-body">
<table class=" table table-hover">
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
						<th>Action 2</th>

</tr>
<tr>
<?php

	


while ($avg=mysqli_fetch_row($resultat)) {
	echo"<tr>
	<td>$avg[0]</td>
	<td>$avg[1]</td>
	<td>$avg[2]</td>
	<td>$avg[3]</td>
	<td>$avg[4]</td>
	<td>$avg[5]</td>
	<td>$avg[6]</td>
	<td>$avg[7]</td>
	<td>$avg[8]</td>
	<td>$avg[9]</td>
	<td>$avg[10]</td>
	<td><a href='../Validation/validationelecteurs.php?ID_ELECT=$avg[0]' class='btn btn-danger' onclick='return confirmation()'>Supprimer</a></td>
	<td><a href='index.php?ok=editel&ID_ELECT=$avg[0]' class='btn btn-primary'>Editer</a></td>
	</tr>";
	} 

?>

</tr>	
</table> 


</div>	
</div>
</div>
<div class="container">
	<div class="panel panel-info">
<div class="panel panel-heading">Nombre  d'electeurs: <?php echo("$totalelec")?></div>
<div class="text-center">
	<button  onclick="window.print(); "class="btn btn-primary" id="btn-print">Imprimer la liste</button>
	<a   href="index.php" class="btn btn-info" >RETOUR</a>
</div>
</div>
</body>
</body> b<
</html>
