
<html>
<head><title> Formulaire identité </title></head>
<body>
<?php
// on se connecte à notre base
$base = mysql_connect ('localhost', 'root', 'webforce3');
mysql_select_db ('webforce3', $base) ;

mysql_close ();
?>

<center><h1>Ajouter un film</h1>
	<FORM method ="POST">

		<table>
			<tr><td bgcolor ="#CCCCFF"> Nom du film </td>
			<td> <INPUT TYPE = "text" NAME="fil_filname" ></td></tr>

			<tr><td bgcolor ="#CCCCFF"> titre du film </td>
			<td><INPUT TYPE = "text" NAME="fil_titre"></td></tr>

			<tr><td bgcolor ="#CCCCFF"> année du film </td>
			<td><INPUT TYPE = "text" NAME="fil_annee"></td></tr>

			<tr><td bgcolor ="#CCCCFF"> l'affiche du film </td>
			<td><INPUT TYPE = "text" NAME="fil_affiche"></td></tr>

			<tr><td bgcolor ="#CCCCFF"> synopsis du film </td>
			<td><INPUT TYPE = "text" NAME="fil_synopsis"></td></tr>

			<tr><td bgcolor ="#CCCCFF"> les acteurs du film </td>
			<td><INPUT TYPE = "text" NAME="fil_acteurs"></td></tr>

			<tr><td bgcolor ="#CCCCFF"> description du film </td>
			<td><INPUT TYPE = "text" NAME="fil_description"></td></tr>

			<tr><td bgcolor ="#CCCCFF"> date de creation </td>
			<td><INPUT TYPE = "text" NAME="fil_created"></td></tr>
			<tr>
			<td colspan = 2>
			<center>
			<INPUT TYPE = submit VALUE = "Ajouter">
			</center>
			</td>
			</tr>
		</table>
	</FORM>
</center>
<pre>
	<?php 


$fil_filname=isset($_POST["fil_filname"])?trim($_POST["fil_filname"]):'';
$fil_titre=isset($_POST["fil_titre"])?trim($_POST["fil_titre"]):'';
$fil_annee=isset($_POST["fil_annee"])?trim($_POST["fil_annee"]):'';
$fil_affiche=isset($_POST["fil_affiche"])?trim($_POST["fil_affiche"]):'';
$fil_synopsis=isset($_POST["fil_synopsis"])?trim($_POST["fil_synopsis"]):'';
$fil_acteurs=isset($_POST["fil_acteurs"])?trim($_POST["fil_acteurs"]):'';
$fil_description=isset($_POST["fil_description"])?trim($_POST["fil_description"]):'';
$fil_created=isset($_POST["fil_created"])?trim($_POST["fil_created"]):'';
$fil_updated='now()';

$pdo = new PDO('mysql:host=localhost;dbname=gestion des filmes', 'root', 'webforce3');



$sql='INSERT INTO film (sup_id,cat_id,fil_titre,fil_filname,fil_annee,fil_affiche,fil_synopsis,fil_acteurs,fil_description,fil_created, fil_updated) 
VALUES (1,1,:fil_titre,:fil_filname,:fil_annee,:fil_affiche,:fil_synopsis,:fil_acteurs,:fil_description,:fil_created,:fil_updated)';

$pdoStatement = $pdo->prepare($sql);

$pdoStatement->bindValue(':fil_filname',$fil_filname, PDO::PARAM_STR);
$pdoStatement->bindValue(':fil_titre',$fil_titre, PDO::PARAM_STR);
$pdoStatement->bindValue(':fil_annee',$fil_annee, PDO::PARAM_STR);
$pdoStatement->bindValue(':fil_affiche',$fil_affiche, PDO::PARAM_STR);
$pdoStatement->bindValue(':fil_synopsis',$fil_synopsis, PDO::PARAM_STR);
$pdoStatement->bindValue(':fil_acteurs',$fil_acteurs, PDO::PARAM_STR);
$pdoStatement->bindValue(':fil_description',$fil_description, PDO::PARAM_STR);
$pdoStatement->bindValue(':fil_created',$fil_created, PDO::PARAM_STR);
$pdoStatement->bindValue(':fil_updated', $fil_created, PDO::PARAM_STR);
//$pdoStatement->execute();
//print_r($_POST);
//echo $fil_updated;

if($pdoStatement->execute()){
		echo "<h2>ce film été ajouté avec succes!!!</h2>";

}else{
	echo "erreur";
}






//mysql_close ();

?>

</pre>

</body>
</html>
