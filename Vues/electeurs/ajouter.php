<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Enregistrement Electeurs</title>
 <link rel="stylesheet" type="text/css" href="../Style/bootstrap.min.css">
	   <link rel="stylesheet" type="text/css" href="../Style/style.css">
</head>
<body>
	<div class="container col-md-6 col-md-offset-3 spacer">
		<div class=" panel panel-info">
			<div class="panel-heading">Enregistrement d'un Electeur</div>
			<div class="panel-body">
				
<form method="POST" action="validationelecteurs.php">

<div class="form-group">
    <label class="control-label">Nom et Prenom du  Parrain</label>  
  <select class="form-control" name="id_p">
   <option value="" >Parrainage de </option>
  <?php
require_once '../Codes/bd.php';
require_once '../Codes/codesourceparrainage.php';
$list=listeParainage();
while ($ligne=mysqli_fetch_row($list)) {
echo "<option value='$ligne[0]' >$ligne[0] $ligne[2]</option>";
}
?>
  </select>
</div>


		<div class="form-group">
	<label class="control-label">N° Pièce d'Identité </label>
	<input type="text" name="identelecteurs" class="form-control" required>
</div>

	<div class="form-group">
	<label class="control-label">Nom Complet </label>
	<input type="text" name="nometprenoms" class="form-control" required>
</div>
	
<div class="form-group">
	<label class="control-label">Date de Naissance  </label>
	<input type="date" name="datenaissance" class="form-control"required>
</div>

<div class="form-group">
	<label class="control-label">Lieu de Naissance </label>
	<input type="text" name="lieunaissance" class="form-control"required>
</div>

<div class="form-group">
  <label class="control-label">Quartier</label>
  <select class="form-control" name="quartier" required>
  <option value="" selected>Quartier</option>
      <option value="Vakabala">Vakabala </option>
    <option value="Libreville">Libreville</option>
    <option value="Sokourani">Sokourani</option>
    <option value="Kokobrela">Kokobrela</option>
    <option value="Yankaffisa">Yankaffisa</option>
    <option value="Ecole 02">Ecole 02</option>
    <option value="Municipalité">Municipalité</option>
    <option value="Dar es Salam">Dar es Salam</option>
    <option value="Habitat">Habitat</option>
    <option value="Texas">Texas</option>
    <option value="Jerusalem">Jerusalem</option>
    <option value="Oncho">Oncho</option>
    <option value="Bromakoté">Bromakoté</option>
    <option value="Ancienne Aviation">Ancienne Aviation</option>
    <option value="Residentiel Sud">Residentiel Sud</option>
    <option value="Résidentiel Nord">Résidentiel Nord</option>
    <option value="Hermankono">Hermankono</option>
    <option value="Kamatela">Kamatela</option>
    <option value="Quartier Central">Quartier Central</option>
    <option value="Ivoire Coton">Ivoire Coton</option>
    <option value="Air Ivoire">Air Ivoire</option>
    <option value="Logbanasso">Logbanasso</option>
    <option value="Samakoungoro">Samakoungoro</option>
    <option value="Autres">Autres</option>
  </select>
  </div>

  <div class="form-group">
  <label class="control-label">Lieu de Vote</label>
  <select class="form-control" name="lieuvote" required>
  <option value="" selected>Lieu de Vote</option>
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

<div class="form-group">
	<label class="control-label">Contact 1 </label>
	<input type="text" name="contact1" class="form-control"required>
</div>

<div class="form-group">
	<label class="control-label">Contact 2 </label>
	<input type="text" name="contact2" class="form-control">
</div>



<div class="form-group">
<button class="btn btn-success" name="enregistrer" type="submit">Enregistrer electeur</button>
<button class="btn btn-danger" name="annuler" type="reset">Vider les Champs</button>
<a   href="index.php" class="btn btn-info" >RETOUR</a>
</div>

</form>

	</div>
</div>
	</div>

</body>
</html>