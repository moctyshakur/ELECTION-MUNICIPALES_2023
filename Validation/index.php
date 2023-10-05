<?php
if (isset($_GET['ok'])) {
	require_once'menu.php';
	switch ($_GET['ok']) {



		case 'listelec':
		require_once'../Codes/bd.php';	
		require_once'../Codes/codesourceelecteurs.php';

		$linke=listeElecteurs(); 
	

		require_once'../Vues/electeurs/listing.php';
		break;
		

	case 'ajouelec':
		require_once'../Vues/electeurs/ajouter.php';
		break;

	

		require_once'../Vues/electeurs/listing.php';
		break;
		
		
			case 'ajouparrain':
		require_once'../Vues/parrainage/ajouter.php';
		break;
			case 'listeparrain':
		require_once'../Codes/bd.php';	
		require_once'../Codes/codesourceparrainage.php';
		$linkp=listeParainage(); 
		require_once'../Vues/parrainage/listing.php';
		break;

		case 'editp':
	    require_once'../Codes/bd.php';	
		require_once'../Codes/codesourceparrainage.php';
		$tab=getparrainagebyid($_GET['id_p']);
		$ligne=mysqli_fetch_row($tab);
		require_once'../Vues/parrainage/modifier.php';
		break;

		case 'editel':
	    require_once'../Codes/bd.php';	
		require_once'../Codes/codesourceelecteurs.php';
		$tab=getelecteursbyid($_GET['ID_ELECT']);
		$ligne=mysqli_fetch_row($tab);
		require_once'../Vues/electeurs/modifier.php';
		break;
			case 'listeelectorale':
		require_once'listeelectorale.php';
	
		break;

}
}

else{
	// code...
}

	require_once'menu.php';


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <title>Accueil</title>
	 <link rel="stylesheet" type="text/css" href="../Style/bootstrap.min.css">

	   <link rel="stylesheet" type="text/css" href="../Style/style.css">
</head>
<body style="background:url(../Style/tourentnasseneba.png); background-repeat: no-repeat;background-size: cover;">
	





   
  
</body>

</html>