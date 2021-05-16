<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Validation fiche de frais</title>
	<meta charset="utf-8">

	<!-- Link -->
	<link rel="stylesheet" type="text/css" href="../CSS/StyleValidation-des-frais.css">

</head>
<body>
	<center><img src="../Images/logo.jpg"></center>
		<li>
			<a class="lien" href="Consultation-des-frais.php">Consultation de frais <--</a>
		</li>
		<h1 class="box"><center>Validation des frais par visiteur</center></h1>
	<div class="conteneur">
	 	<form action="/ma-page-de-traitement" method="post">
  			<h1 class="box"><center>Validation des frais</center></h1>
  			<!--<label><h3 class="margin">Choisir le visiteur:<input class="zone" type="text" name="dateValid" size="8" value="Villechalane" /></h3></label>
  				<label><h3 class="margin">Mois:<input class="zone" type="text" name="dateValid" size="8"/></h3></label>
			</div>-->

    		<div>
        		<label for="name">Visiteur</label>
        		<input type="text" id="name" name="user_name" value="Villechalane">
   			</div>
		    <div>
		        <label for="mail">Mois</label>
		        <input class="zone" type="text" name="dateValid" size="12" />
		    </div>
		    	<h1 class="box"><center>Frais au forfait</center></h1>
		    <div>
		        <label for="mail">Repas</label>
		        <input class="zone" type="text" name="dateValid" size="12" />
		    </div>
		    <div>
		        <label for="mail">Nuitée</label>
		        <input class="zone" type="text" name="dateValid" size="12" />
		    </div>
		    <div>
		        <label for="mail">Etape</label>
		        <input class="zone" type="text" name="dateValid" size="12" />
		    </div>
		    <div>
		        <label for="mail">KM</label>
		        <input class="zone" type="text" name="dateValid" size="12" />
		    </div>
			<label for="pet-select">Situation</label>
			<div>
				<select id="pet-select">
		   		<option value="">Choisissez votre option</option>
			    <option value="Enregistré">Enregistré</option>
			    <option value="Validé">Validé</option>
			    <option value="Remboursé">Remboursé</option>
			</select>
			</div>
			<h1 class="box"><center>Hors forfait</center></h1>
			<div>
		        <label for="mail">Date</label>
		        <input class="zone" type="text" name="dateValid" size="12" />
		    </div>
		    <div>
		        <label for="mail">Libellé</label>
		        <input class="zone" type="text" name="dateValid" size="12" />
		    </div>
		    <div>
		        <label for="mail">Montant</label>
		        <input class="zone" type="text" name="dateValid" size="12" />
		    </div>
		    <label for="pet-select">Situation</label>
			<div>
				<select id="pet-select">
		   		<option value="">Choisissez votre option</option>
			    <option value="Enregistré">Enregistré</option>
			    <option value="Validé">Validé</option>
			    <option value="Remboursé">Remboursé</option>
			</select>
			</div>
			<div>
		        <label for="mail">Nb-Justificatif</label>
		        <input class="zone" type="text" name="dateValid" size="12" />
		    </div>
		    <div>
		    	<center>
		    		<input type="submit" name="Envoyer">
		    		<input type="reset" name="Reinitialiser">
		    	</center>
		    	
		    </div>

		</form>
<!--<input type="text" value="par défaut cet élément sera renseigné avec ce texte">
<textarea>par défaut cet élément sera renseigné avec ce texte</textarea>
<div class="button">
        <button type="submit">Envoyer le message</button> -->
    </div>


</body>
</html>