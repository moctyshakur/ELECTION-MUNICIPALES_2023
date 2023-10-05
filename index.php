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


if (isset($_POST['connexionutil']))
{
  if (!empty($_POST['email'])   AND !empty($_POST['motdepasse']))
  {

 function RechercheUtilisateurs($email,$motdepasse)
 {
      $sql="SELECT * FROM utilisateurs WHERE email like '%$email%' AND motdepasse like '%$motdepasse%'";
       return executeSQL($sql);
  }

   $email=htmlspecialchars($_POST['email']);
   $motdepasse=sha1($_POST['motdepasse']);
   $resultat=RechercheUtilisateurs($email,$motdepasse);
   $totalelec=mysqli_num_rows($resultat);
   if ($totalelec==1)
   {

 $erreur=" Cet utilisateur existe bel et bien "; 
  header("location:http://localhost/ELECTION-MUNICIPALES_2023/Validation/index.php");




   }
   else
   {

$erreur="cet utilisateur n'existe pas encore";

   }



  }
  else
  {

$erreur="remplissez tous les champs d'abords";



  }











}

?>








<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" type="text/css" href="./Style/bootstrap.min.css">
	   <link rel="stylesheet" type="text/css" href="./Style/style.css">
	<title>Connexion</title>
</head>
<body style="background:url(./Style/NT.jpg);">
  <br>
  <br>
  
  <br>
  <br>
<div class="container col-md-6 col-md-offset-3 spacer">
	<div class="panel panel-info">
		
<div class="panel-heading">Connexion </div>

<div class="panel-body">
	<form method="POST" action=""> 

<div class="form-group">
	<label class="control-label">Email </label>
	<input type="Email" name="email" class="form-control" >
<div class="form-group">
	<label class="control-label">Mot de passe</label>
	<input type="password" name="motdepasse" class="form-control">
</div>
<button class="btn btn-success" name="connexionutil" type="submit">Connexion </button>
<button class="btn btn-danger" name="annuler" type="reset">Effacer</button>
<a   style="text-align:center ;" href="index.php" class="btn btn-info" >Quitter</a>

</form>


<br>
<br>
<?php

if (isset($erreur))
	
{
  echo '<font color="red">'.$erreur. "</font>";  


}
?>
	

</div>

</div>

</div>

</body>
</html>