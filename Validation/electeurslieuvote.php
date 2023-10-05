<?php
require_once'../Codes/bd.php';



function electeursLieuVote($lieuvote,$burvote){ 
$sql="SELECT electeurs.ID_ELECT,electeurs.identelecteurs,electeurs.nometprenoms,electeurs.datenaissance,electeurs.lieunaissance,electeurs.quartier,electeurs.lieuvote,electeurs.burvote,electeurs.contact1,electeurs.contact2,electeurs.id_p,parrain.nometprenomspar, parrain.contactparrain FROM electeurs
INNER JOIN 	parrain ON  electeurs.id_p =parrain.id_p 
WHERE    lieuvote like '%$lieuvote%'AND burvote  like '%$burvote%'";
return executeSQL($sql);

}



if (isset($_POST['rechercherel'])){
	

 $lieuvote=$_POST['lieuvote'];
  $burvote=$_POST['burvote'];
$rech=electeursLieuVote($lieuvote,$burvote);
$totalelec=mysqli_num_rows($rech);

}



?>

<!DOCTYPE html>
<html>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" type="text/css" href="../Style/bootstrap.min.css">
	    <link rel="stylesheet" type="text/css" href="../Style/style.css">
	   <link rel="stylesheet" type="text/css" href="../Style/print.css">
	   <script type="text/javascript" src="../Script/script.js"></script> 
	   	 
	<title>Edition des Electeurs</title>
</head>
<body style="background-image: linear-gradient(to bottom, rgba(255,128,255,0.5), rgba(0,0,128,0.5));">
	
	
		<h3 style="text-align: center ;margin-top: 70px;">Election Municipale Commune d'Odienné 2023</h3>

    <img src="../Style/RHDP.jpeg" style="margin-left: 30px;">




<div class="container  spacer">

	<div class="panel panel-info">
		
		<div class="panel-body">
			<div  align: center class="panel-heading" ><h3 align="center">liste des  Electeurs de<?php echo(" $lieuvote  $burvote") ?></h3></div>

			<table class=" table table-hover"  >
				<thead class= "thead-light">
<tr>
						<th> N°</th> 
						<th>N° pièce</th>
						<th>Nom et Prenom</th>
						<th>Date de Naissance</th>
						<th>Lieu de Naissance</th>
						<th>Quartier</th>
						<th>Contact 1</th>
						<th>Contact 2</th>
						<th> Parrainnage de </th>
						<th> Contact P </th>
						
					

</tr>
<tr>
				<thead>

<?php

while ($avg=mysqli_fetch_row($rech)) {
	echo"<tr>
	<td>$avg[0]</td>
	<td>$avg[1]</td>
	<td>$avg[2]</td>
	<td>$avg[3]</td>
	<td>$avg[4]</td>
	<td>$avg[5]</td>
	<td>$avg[8]</td>
	<td>$avg[9]</td>
	<td>$avg[11]</td>
	<td>$avg[12]</td>

	
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
	<button  onclick="window.print(); "class="hidden-print" id="btn-print">Imprimer la liste</button>
	<a   href="index.php" class="hidden-print" >RETOUR</a>


</div></div>
</div>
                 

</body>
</html>
