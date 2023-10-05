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







?>