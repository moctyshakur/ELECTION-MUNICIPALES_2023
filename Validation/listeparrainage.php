<?php
require_once'../Codes/bd.php';



function electeursparrainage($nometprenomspar){ 
$sql="SELECT electeurs.ID_ELECT,electeurs.identelecteurs,electeurs.nometprenoms,electeurs.datenaissance,electeurs.lieunaissance,electeurs.quartier,electeurs.lieuvote,electeurs.burvote,electeurs.contact1,electeurs.contact2,electeurs.id_p,parrain.nometprenomspar FROM electeurs
INNER JOIN 	parrain ON  electeurs.id_p =parrain.id_p 
WHERE    nometprenomspar like '%$nometprenomspar%'";
return executeSQL($sql);

}



if (isset($_POST['recherparrainage'])){
	if (!empty($_POST['nometprenomspar'])) 
{ 

 $nometprenomspar=$_POST['nometprenomspar'];
$rech=electeursparrainage($nometprenomspar);
$totalelec=mysqli_num_rows($rech);

}

} 

?>

<!DOCTYPE html>
<html>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" type="text/css" href="../Style/bootstrap.min.css">
	   <link rel="stylesheet" type="text/css" href="../Style/print.css" media="print">

	   <script type="text/javascript" src="../Script/script.js"></script> 
	   	 
	<title>Edition des Electeurs</title>
</head>
<body style="background: url(../Style/NT.jpg);background-repeat: no-repeat;background-size: cover;">
	
	
		<h3 style="text-align: center ;margin-top: 70px;">Election Municipale Commune d'Odienné 2023</h3>

    <img src="../Style/RHDP.jpeg" style="margin-left:30px">




<div class="container  spacer">

	<div class="panel panel-info">
		
		<div class="panel-body">
			<div  align: center class="panel-heading" ><h5 align="center">Parrainage Electeurs de<?php echo("   $nometprenomspar")?></h5></div>

			<table class=" table table-dark">
<tr>
						<th> N°</th> 
						<th>N° pièce</th>
						<th>Nom et Prenom</th>
						<th>Date de Naissance</th>
						<th>Lieu de Naissance</th>
						<th>Quartier</th>
						<th>Lieu de Vote</th>
						<th>Bureau de vote</th>
						<th>Contact 1</th>
						<th>Contact 2</th>
						
					

</tr>
<tr>
<?php

while ($avg=mysqli_fetch_row($rech)) {
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
<div class="panel panel-heading">Nombre  d'electeurs: <?php echo("$totalelec")?> </div>
<div class="text-center">
	<button  class="hidden-print" onclick="window.print(); " id="btn btn-primary-" class="btn btn-success">Imprimer la liste</button>
	<a   href="index.php" class="hidden-print" >RETOUR</a>


</div></div>
</div>
                 

</body>
</html>
