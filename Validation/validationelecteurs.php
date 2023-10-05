
<?php

require_once'../Codes/bd.php';
require_once'../Codes/codesourceelecteurs.php';

if (isset($_POST['enregistrer'])) {
  $identelecteurs=$_POST['identelecteurs'];
  $nometprenoms=$_POST['nometprenoms'];
  $datenaissance=$_POST['datenaissance'];
  $lieunaissance=$_POST['lieunaissance'];
  $quartier=$_POST['quartier'];
  $lieuvote=$_POST['lieuvote'];
  $burvote=$_POST['burvote'];
  $contact1=$_POST['contact1'];
  $contact2=$_POST['contact2'];
  $id_p=$_POST['id_p'];



AjoueElecteurs($identelecteurs,$nometprenoms,$datenaissance,$lieunaissance,$quartier,$lieuvote,$burvote,$contact1,$contact2,$id_p);

header("location:http://localhost/ELECTION-MUNICIPALES_2023/Validation?ok=listelec");

}
//suppression
if (isset($_GET['ID_ELECT '])){
supprimerElecteurs(($_GET['ID_ELECT ']));
header("location:http://localhost/ELECTION-MUNICIPALES_2023/Validation?ok=listelec");
}


//modification
if (isset($_POST['modif'])) {
  //ajout
  $ID_ELECT=$_POST['ID_ELECT'];
  $identelecteurs=$_POST['identelecteurs'];
  $nometprenoms=$_POST['nometprenoms'];
  $datenaissance=$_POST['datenaissance'];
  $lieunaissance=$_POST['lieunaissance'];
  $quartier=$_POST['quartier'];
  $lieuvote=$_POST['lieuvote'];
  $burvote=$_POST['burvote'];
  $contact1=$_POST['contact1'];
  $contact2=$_POST['contact2'];
  $id_p=$_POST['id_p'];

miseajourElecteurs($ID_ELECT,$identelecteurs,$nometprenoms,$datenaissance,$lieunaissance,$quartier,$lieuvote,$burvote,$contact1,$contact2,$id_p);
header("location:http://localhost/ELECTION-MUNICIPALES_2023/Validation?ok=listelec");

}


