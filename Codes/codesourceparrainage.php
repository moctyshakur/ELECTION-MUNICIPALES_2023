<?php

function ajouteParrainage($typeparrainage,$nometprenomspar,$mouvparrain,$respmouv,$contactparrain){

$sql="INSERT INTO parrain VALUES (null,'$typeparrainage','$nometprenomspar','$mouvparrain','$respmouv','$contactparrain')";

return executeSQL($sql);

}

function listeParainage(){

$sql="SELECT * FROM parrain	";
return executeSQL($sql);

}


function supprimerParrain($id_p){ 

$sql="DELETE FROM parrain WHERE id_p=$id_p";
return executeSQL($sql);

}


function miseajourparrainage($id_p,$typeparrainage,$nometprenomspar,$mouvparrain,$respmouv,$contactparrain){

$sql="UPDATE parrain SET typeparrainage='$typeparrainage', nometprenomspar='$nometprenomspar', mouvparrain='$mouvparrain', respmouv='$respmouv', contactparrain='$contactparrain' WHERE id_p=$id_p ";
return executeSQL($sql);
}



function getparrainagebyid($id_p){
$sql="SELECT * FROM parrain WHERE id_p=$id_p";
return executeSQL($sql);
}

?>
