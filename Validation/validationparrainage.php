<?php

require_once'../Codes/bd.php';
require_once'../Codes/codesourceparrainage.php';
if (isset($_POST['enregistrer'])) {
	//ajout
	
	$typeparrainage=$_POST['typeparrainage'];
	$nometprenomspar=$_POST['nometprenomspar'];
	$mouvparrain=$_POST['mouvparrain'];
	$respmouv=$_POST['respmouv'];
	$contactparrain=$_POST['contactparrain'];

ajouteParrainage($typeparrainage,$nometprenomspar,$mouvparrain,$respmouv,$contactparrain);
header("location:http://localhost/ELECTION-MUNICIPALES_2023/Validation?ok=listeparrain");

}

//suppression
if (isset($_GET['id_p'])){

supprimerParrain(($_GET['id_p']));

header("location:http://localhost/ELECTION-MUNICIPALES_2023/Validation?ok=listeparrain");

}



//modification
if (isset($_POST['modif'])) {
	//ajout
	$id_p=$_POST['id_p'];
	$typeparrainage=$_POST['typeparrainage'];
	$nometprenomspar=$_POST['nometprenomspar'];
	$mouvparrain=$_POST['mouvparrain'];
	$respmouv=$_POST['respmouv'];
	$contactparrain=$_POST['contactparrain'];

miseajourparrainage($id_p,$typeparrainage,$nometprenomspar,$mouvparrain,$respmouv,$contactparrain);
header("location:http://localhost/ELECTION-MUNICIPALES_2023/Validation?ok=listeparrain");

}


?>
