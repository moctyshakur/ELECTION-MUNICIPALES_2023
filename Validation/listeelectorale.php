


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" type="text/css" href="./Style/bootstrap.min.css">
	   <link rel="stylesheet" type="text/css" href="./Style/style.css">
	   <script type="text/javascript" src="./Script/script.js"></script> 
	   	 
	<title>Liste des Electeurs</title>
</head>
<body>
<div class="container col-md-6 col-md-offset-3 spacer">
<div class=" panel panel-info">
<div class="panel-heading">LISTE DES ELECTEURS</div>
<div class="panel-body">
<form method="POST" action="electeurslieuvote.php"> 
	<div class="form-group">
  <label class="control-label">Lieu de Vote</label>
  <select class="form-control" name="lieuvote">
  <option value="">Lieu de Vote </option>
      <option value="Complexe Socio-Educatif">Complexe Socio-Educatif</option>
    <option value="EPP Texaco">EPP Texaco</option>
    <option value="Ancien Conseil  Régional">Ancien Conseil  Régional</option>
    <option value="Ecole Coraniqu">Ecole Coranique</option>
    <option value="EPP Résidentiel Nord">EPP Résidentiel Nord</option>
    <option value="EPP Zaher">EPP Zaher</option>
    <option value="EPP Bromakoté">EPP Bromakoté</option>
    <option value="EPP Odienné 1">EPP Odienné 1</option>
    <option value="EPP Odienné 3">EPP Odienné 3</option>
    <option value="EPP Jerusalem">EPP Jerusalem</option>
    <option value="Direction Des Mines">Direction Des Mines</option>
    <option value="EPP Habitat">EPP Habitat</option>
    <option value="Medico-Scolaire">Medico-Scolaire</option>
    <option value="Hall d'Information">Hall d'Information</option>
    <option value="GS 2 ABC">GS 2 ABC</option>
    <option value="EPP Frontière">EPP Frontière</option>
    <option value="EPP Municipalité">EPP Municipalité</option>
    <option value="EPP Enfance Espoir">EPP Enfance Espoir</option>
    <option value="GSMC">Groupe Scolaire Mamadou C (GSMC)</option>
    <option value="Collège Technique Diaby">Collège Technique Diaby</option>
    <option value="Epp Logbanasso">Epp Logbanasso</option>
    <option value="Place Publique Samakoungoro">Place Publique Samakoungoro</option>
    <option value="Autres">Autres</option>

  </select>
  </div>


   <div class="form-group">
  <label class="control-label">Bureau de Vote</label>
  <select class="form-control" name="burvote">
  <option value=">" selected>Bureau de Vote</option>
    <option value="BV 1">BV 1</option>
    <option value="BV 2">BV 2</option>
    <option value="BV 3">BV 3</option>
    <option value="BV 4">BV 4</option>
    <option value="BV 5">BV 5</option>
    <option value="BV 6">BV 6</option>
    <option value="BV 7">BV 7</option>
    <option value="BV 8">BV 8</option>
  </select>
</div>


<button class="btn btn-success" name="rechercherel" type="submit">Recherche Electeur</button>
<a   href="index.php" class="btn btn-info" >RETOUR</a>
 </form>
</div>
</div>
</div>	

</body>
</html>