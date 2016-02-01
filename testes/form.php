<?php
	$nom=isset($_POST["nom"]) ? trim($_POST["nom"]) :'';
	$envoi=isset($_POST["envoi"]) ? trim($_POST["envoi"]) :'0';
	if ($envoi>0) {

		header('Location: ?id='.$envoi);
		$currentId=$envoi;

	}
	
	$nom=isset($_POST["nom"]);//$nom=$_POST["nom"];
	//$prenom=isset($_POST["prenom"]) ? trim($_POST["prenom"]):'';//$prenom=isset($_POST["prenom"]);

	echo "<br>";echo $nom;
	//$currentId = intval(5); echo $currentId;
	

?>
<html>
<head>
	<title></title>
</head>
<body>
	<form method ="POST">
		<table>
			<tr>
				<td>Nom</td>
				<td><input type='texte' name='nom' /></td>
			</tr>
			<tr>
				<td>Envoi</td>
				<td><input type='texte' name='envoi' /></td>
				<td>
			</tr>
				<tr>
				<td>URL</td>
				<td><input type='texte' name='numero' value="<?php echo $enoi; ?>" /></td></td>
				<td>
			</tr>
			<tr><td></td>
				<td>
					<input type='submit' name='button' value='envoyer' />
				</td>
			</tr>
		</table>	
	</form>

<?php 
	
	


?>
</body>
</html>