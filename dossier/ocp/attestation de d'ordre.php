<?php session_start();

		$con=mysql_connect('localhost','root','');
		mysql_select_db('ocp',$con);
		
	$code=$_SESSION['code'];
	
		$req1="SELECT  a.Nom,a.Prenom,a.Matricule,s.libelle,a.DateNaissance,a.Nationalite,s.sigle,a.Emploi,a.Banque,a.NumCompte FROM agents as a,demande as d,service as s where a.Matricule=d.Matricule and a.code_service=s.Code_service and d.Code_demande='$code'";
    $rep1 =  mysql_query($req1, $con) or die( mysql_error() ) ;
	
	while($ligne=mysql_fetch_row($rep1))
    {
        $nom=$ligne[0];
		$prenom=$ligne[1];
        $matricule=$ligne[2];
		$service=$ligne[3];
		$dn=$ligne[4];
		$nationalite=$ligne[5];
		$sigle=$ligne[6];
		$emploi=$ligne[7];
		$banque=$ligne[8];
		$NumCompte=$ligne[8];
	}
	
?>
<html>
<head>
<style>
body{
padding:100px;
}

.div2{
position:absolute;
top:0px;
left:45%;
width:auto;
height:auto;

margin-left: auto;
margin-right: auto; 
}
.div3{
	position:absolute;
	top:60px;
	left:-3px;
	width:217px;
	height:38px;
}
.div4{
	position:absolute;
	top:270px;
	left:32%;
	width:501px;
	height:auto;
	
	margin-left: auto;
	margin-right: auto;
}
.div5{
	position:absolute;
	top:502px;
	left:32%;
	width:499px;
	height:auto;

	margin-left: auto;
	margin-right: auto;
}
.div6{
	position:absolute;
	top:227px;
	left:218px;
	width:301px;
	height:auto;
	margin-left: auto;
	margin-right: auto;
}
.div7{
	position:absolute;
	top:146px;
	left:510px;
	width:301px;
	height:auto;
	margin-left: auto;
	margin-right: auto;
}
</style>
</head>
<body>

<div class="div2">
<img src="../ocp.jpg" width="97" height="68"  />
</div>
<div class="div3">
  <p style="margin-left:-0%">&nbsp;&nbsp; MNB/AP N&deg;
  </p>
  <p><center></center></p>
</div>
<div class="div6">
Objet: Ordre de virement irrévocable
</div>
<div class="div7"><center>
A MONSIEUR LE DIRECTEUR DE LA BANQUE <?php echo $banque; ?>

LAAYOUNE 
</center>
</div>
<div class="div4" align="justify">
&nbsp;&nbsp;Monsieur,le Directeur, <br> 
&nbsp;&nbsp;Nous avons l'honneur de vous confirmer pour la bonne régle que nous réçu de

notre agent <?php echo $nom; echo"  "; echo $prenom;?>, Matricule <?php echo $matricule; ?>,Service <?php echo $service; ?>, un ordre de virement 

irrévocable de ses émoluments à son compte N° <?php echo $NumCompte; ?>.<br>

&nbsp;&nbsp;Cet ordre qui ne souléve aucune objection de notre part, a été noté par nos services 

intéressés et sera normalement exécuté jusqu'a changement éventuel de position de l'intéressé 

ou révocation expresse de votre part. <br>

&nbsp;&nbsp;Il est également entendu que cet ordre ne confére pas a votre organisme la qualité

de créancier privilégié et ne peut s'executer que si les émoluments de l'intéressé ne font

l'objet d'aucune saisie-arrêt ni d'opposition.<br> 

&nbsp;&nbsp;Veuillez agréer Monsieur le Directeur l'expréssion de nos sentiments distingués.
</div>
<div class="div5">
 
Laayoune, le 20<?php echo date('y-m-d');?><br>
LE CHEF DU SERVICE GESTION ADMINISTRATIVE DU PERSONNEL ET JURIDIQUE.

</div>
</body>
</html>

