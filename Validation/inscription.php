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

function AjouteUtilisateurs($nomutilisateur,$email,$motdepasse){

$sql="INSERT INTO 	utilisateurs VALUES  (null,'$nomutilisateur','$email','$motdepasse')"  ; 

return executeSQL($sql);

}


if (isset($_POST['enregistrerutil']))
	
{ 
if (!empty($_POST['nomutilisateur']) AND !empty($_POST['email']) AND !empty($_POST['email2']) AND !empty($_POST['motdepasse']) AND !empty($_POST['motdepasse2']))
{
$nomutilisateur=htmlspecialchars($_POST['nomutilisateur']);
$email=htmlspecialchars($_POST['email']);

$email2=htmlspecialchars($_POST['email2']);

$motdepasse=sha1($_POST['motdepasse']);

$motdepasse2=sha1($_POST['motdepasse2']);

 if ($email==$email2)
   {

     if (filter_var($email,FILTER_VALIDATE_EMAIL))
     {
     function RechercheMail($email){
      $sql="SELECT * FROM utilisateurs WHERE email like '%$email%'";
       return executeSQL($sql);
       }

       $email=htmlspecialchars($_POST['email']);
      $resultat=RechercheMail($email);
      $totalelec=mysqli_num_rows($resultat);
      if ($totalelec==0)
      {


          if ($motdepasse==$motdepasse2)
          {

          AjouteUtilisateurs($nomutilisateur,$email,$motdepasse);

        $erreur=" l'utilisateur a été ajouté avec succès";
        header("location:http://localhost/ELECTION-MUNICIPALES_2023/?ok=connexion");
          }
          else
          {
           $erreur=" vos mots de passe ne coreespondent pas";

          }

      }
      else
      {

           $erreur=" Addresse Email dèjà utilisée ";


      }
      }

      else
      {

      $erreur=" votre adresse Email n'est pas une addresse Email Valable";
      
      }


}
else
{

	$erreur=" vos adresses Emails ne correspondent pas";
}

}

else
{ 
$erreur= " Tous les champs doivent être remplis" ;
}

}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" type="text/css" href="../Style/bootstrap.min.css">
	   <link rel="stylesheet" type="text/css" href="../Style/style.css">
	<title>Inscription Utilisateur</title>
</head>
<body>
	
  <br>
  <br>
  <br>
<div class="container col-md-6 col-md-offset-3 spacer">
	<div class="panel panel-info">
		
<div class="panel-heading">Inscription Utilisateur</div>
<div class="panel-body">
	<form method="POST" action=""> 

	
<div class="form-group">
	<label class="control-label">Nom ultilisateur</label>
	<input type="text" name="nomutilisateur" class="form-control" >

</div>


<div class="form-group">
	<label class="control-label">Email </label>
	<input type="Email" name="email" class="form-control" >

</div>
<div class="form-group">
	<label class="control-label">Confirmer votre Email </label>
	<input type="Email" name="email2" class="form-control" >

</div>
<div class="form-group">
	<label class="control-label">Mot de passe</label>
	<input type="password" name="motdepasse" class="form-control">
</div>

</div>
<div class="form-group">
	<label class="control-label"> Confirmer le Mot de passe</label>
	<input type="password" name="motdepasse2" class="form-control">
</div>

<button class="btn btn-success" name="enregistrerutil" type="submit">Inscription </button>
<button class="btn btn-danger" name="annuler" type="reset">Vider les Champs</button>
<a   style="text-align:center ;" href="../index.php" class="btn btn-info" >RETOUR</a>

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