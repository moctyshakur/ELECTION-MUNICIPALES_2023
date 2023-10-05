<?php

function AjoueElecteurs($identelecteurs,$nometprenoms,$datenaissance,$lieunaissance,$quartier,$lieuvote,$burvote,$contact1,$contact2,$id_p){

$sql="INSERT INTO electeurs VALUES  (null,'$identelecteurs','$nometprenoms','$datenaissance','$lieunaissance','$quartier','$lieuvote','$burvote','$contact1','$contact2',$id_p)"  ; 

return executeSQL($sql);

}


function listeElecteurs(){

$sql="SELECT * FROM electeurs";
return executeSQL($sql);

}
function listeLieudevote(){

$sql="SELECT lieuvote FROM electeurs";
return executeSQL($sql);

}


function supprimerElecteurs($ID_ELECT){ 

$sql="DELETE FROM electeurs WHERE ID_ELECT=$ID_ELECT";
return executeSQL($sql);


}
function miseajourElecteurs($ID_ELECT,$identelecteurs,$nometprenoms,$datenaissance,$lieunaissance,$quartier,$lieuvote,$burvote,$contact1,$contact2,$id_p){

$sql="UPDATE electeurs SET identelecteurs='$identelecteurs', nometprenoms='$nometprenoms', datenaissance='$datenaissance', lieunaissance='$lieunaissance', quartier='$quartier',lieuvote='$lieuvote', burvote='$burvote', contact1='$contact1', contact2='$contact2',id_p=$id_p WHERE ID_ELECT=$ID_ELECT ";
return executeSQL($sql);
}

function getelecteursbyid($ID_ELECT){
$sql="SELECT * FROM electeurs WHERE ID_ELECT=$ID_ELECT";
return executeSQL($sql);



}

function RechercheElecteurs($nometprenoms){
$sql="SELECT * FROM electeurs WHERE nometprenoms like '%$nometprenoms%'";
return executeSQL($sql);



}
function electeursparrainage($nometprenomspar){ 
$sql="SELECT electeurs.ID_ELECT,electeurs.identelecteurs,electeurs.nometprenoms,electeurs.datenaissance,electeurs.lieunaissance,electeurs.quartier,electeurs.lieuvote,electeurs.burvote,electeurs.contact1,electeurs.contact2,electeurs.id_p,parrain.nometprenomspar FROM electeurs
INNER JOIN 	parrain ON  electeurs.id_p =parrain.id_p 
WHERE    nometprenomspar like '%$nometprenomspar%'";
return executeSQL($sql);

}

?>