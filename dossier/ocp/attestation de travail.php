<?php session_start();

		$con=mysql_connect('localhost','root','');
		mysql_select_db('ocp',$con);
		
	$code=$_SESSION['code'];
	
		$req1="SELECT  a.Nom,a.Prenom,a.Matricule,s.libelle,a.DateNaissance,a.Nationalite,s.sigle,a.Emploi FROM agents as a,demande as d,service as s where a.Matricule=d.Matricule and a.code_service=s.Code_service and d.Code_demande='$code'";
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
	top:70px;
	left:0px;
	width:100%;
	height:97px;
	
}
.div4{
	position:absolute;
	top:200px;
	left:32%;
	width:501px;
	height:auto;
	
	margin-left: auto;
	margin-right: auto; 
}
.div5{
	position:absolute;
	top:343px;
	left:526px;
	width:369px;
	height:auto;
	
	margin-left: auto;
	margin-right: auto;
}
</style>
</head>
<body>

<div class="div2">
<img src="ocp.jpg" width="97" height="68"  />
</div>
<div class="div3"><center>________________________________________</center>
  <p style="margin-left:-0%">&nbsp;&nbsp; MNB/AP N&deg;
  </p>
  <p><center><b>ATTESTATION DE TRAVAIL</b></center></p>
</div>
<div class="div4" align="justify">

&nbsp;&nbsp;&nbsp;Le chef du Service Gestion Administrative du Personnel et   Juridique
 de la Soci&eacute;t&eacute; Phosboucra&agrave;, certifie que Monsieur <?php echo $nom; echo"  "; echo $prenom;?>, Matricule
 
<?php echo $matricule; ?>, Service <?php echo $service; ?>,N&eacute; en <?php echo $dn; ?>, Nationalit&eacute; <?php echo $nationalite; ?>, a &eacute;t&eacute; engag&eacute;
   par notre groupe le <?php echo $sigle; ?> et qu'il y occupe actuellement l'emploi de <?php echo $emploi; ?>.<br>
   &nbsp;&nbsp;&nbsp;La pr&eacute;sentation attestation est d&eacute;livr&eacute;e &agrave; l'int&eacute;ress&eacute; pour servir et valoir ce
        que de droit.   
</div>
<div class="div5">
 
Laayoune, le <?php echo date('y-m-d');?><br><br>
LE CHEF DU SERVICE GESTION ADMINISTRATIVE DU PERSONNEL ET JURIDIQUE.

</div>
</body>
</html>

