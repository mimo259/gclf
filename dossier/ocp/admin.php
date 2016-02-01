<?php session_start();

		$con=mysql_connect('localhost','root','');
		mysql_select_db('ocp',$con);
		$login=$_SESSION['user'];
		$se=$_SESSION['sexe']
?>

 		<SCRIPT LANGUAGE="JavaScript">
function vider(){
    var foo = document.getElementById("formmod");
foo.innerHTML="";}
        </SCRIPT>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<SCRIPT language=javascript>
// Script réalisé par http://www.toutjavascript.com
// Reproduction gratuite à condition de laisser ce commentaire

var ferie=new Array("01/01","01/05","08/05","14/07","15/08","01/11","11/11","25/12");
var mois=new Array("Janvier","F&eacute;vrier","Mars","Avril","Mai","Juin","Juillet","Ao&ucirc;t","Septembre","Octobre","Novembre","D&eacute;cembre");

function disp(txt) { document.write(txt) }
function estFerie(j,m) {
	var nb=ferie.length;
	var test=false;
	for(var i=0;i<nb;i++) {
		if ((ferie[i].substring(0,2)==j)&&(ferie[i].substring(3,5)==m)) return true;
	}
	return false;
}
function calendar(colFond,colTitre,colTexte,colFerie,colOn) {
	var d_jour=new Date();
	var a=d_jour.getYear(); if (a<1970) {a=1900+a}
	var m=d_jour.getMonth()+1;
	var d=new Date(a,m-1,1);
	var dfin=new Date(a,m-1,1);
	var nb_jour=31;
	var aff_j="";
	for(var k=32;k>27;k--) {
		dfin.setMonth(m-1);
		dfin.setDate(k);
		if (dfin.getMonth()!=m-1) {nb_jour=k-1;}
	}

	var j1=d.getDay(); if (j1==0) j1=7;
	var jour=0;
	disp("<FONT FACE='Arial' size='-1'><CENTER><B>"+mois[m-1]+" "+a+"</B></CENTER></FONT>");
	disp("<TABLE border=0 cellspacing=0 cellpadding='2'>");
	disp("<TR align='center' bgcolor='"+colTitre+"'><TD width='10'>L</TD><TD width='10'>M</TD><TD width='10'>M</TD><TD width='10'>J</TD><TD width='10'>V</TD><TD width='10'>S</TD><TD width='10'>D</TD></TR>");
	for(var i=0;i<6;i++) {
		disp("<TR>");
		for (j=0;j<7;j++) {
			jour=7*i+j-j1+2; 
			aff_j=jour;
			if ((jour==d_jour.getDate())&&(m==d_jour.getMonth()+1)) {aff_j="<FONT size='-1' color='"+colOn+"' face='Arial'><I><U>"+jour+"</I><U></FONT>";}
			if ((7*i+j>=j1-1)&&(jour<=nb_jour)) {
				if ((j==6)||(estFerie(jour,m))) disp("<TD width='10' bgcolor='"+colFerie+"' align='center'><FONT face='Arial' size='-1' color='"+colTexte+"'>"+aff_j+"</FONT></TD>");
				else disp("<TD width='10' bgcolor='"+colFond+"' align='center'><FONT face='Arial' size='-1' color='"+colTexte+"'>"+aff_j+"</FONT></TD>");
			}
			else disp("<TD width='10' bgcolor='"+colFond+"'><FONT size=-1>&nbsp; </TD>");
		}
		disp("</TR>");
	}
	disp("</TABLE>");
}


</SCRIPT>
<!-- ----------------------------------------------------------------------------------------------------------------------------------->
<style type="text/css">
#header img { width : 100%;}

.div6{
	position:absolute;
	top:259px;
	left:138px;
	width:46px;
	height:146px;
	margin-left: auto;
	margin-right: auto;
}
.ds_box {
	background-color: #FFF;
	border: 1px solid #000;
	position: absolute;
	z-index: 32767;
}

.ds_tbl {
	background-color: #b0d592;
}

.ds_head {
	background-color: #556b33;
	color: #FFF;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-weight: bold;
	text-align: center;
	letter-spacing: 2px;
}

.ds_subhead {
	background-color: #489a2b;
	color: #FFF;
	font-size: 12px;
	font-weight: bold;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	width: 32px;
}

.ds_cell {
	background-color: #cbf6aa;
	color: #000;
	font-size: 13px;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	padding: 5px;
	cursor: pointer;
}

.ds_cell:hover {
	background-color: #70ebaf;
} /* This hover code won't work for IE */

</style>

<!-- ----------------------------------------------------------------------------------------------------------------------------------->


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="default.css" media="screen"/>
<title>Document sans titre</title>

<style type="text/css">
#l_col {
	padding: 0px;
	float: left;
	width: 20%;}
	#r_col {
	padding:  10px;
	float: left;
	width: 68%;
	border-left: 1px solid #eee;
	font: 80%/160% Verdana, Arial, Helvetica, sans-serif;
}


 
.topnav-level2 {
	FONT-SIZE: 11px; COLOR: #333333; LINE-HEIGHT: normal; FONT-FAMILY: Arial, Helvetica, sans-serif; TEXT-DECORATION: underline
}
A.topnav-level2:link {
	FONT-SIZE: 11px; COLOR: #000000; FONT-FAMILY: Arial, Helvetica, sans-serif; TEXT-DECORATION: none
}
A.topnav-level2:visited {
	FONT-SIZE: 11px; FONT-FAMILY: Arial, Helvetica, sans-serif; TEXT-DECORATION: none
}
A.topnav-level2:hover {
	FONT-SIZE: 11px; COLOR: #ff0000; FONT-FAMILY: Arial, Helvetica, sans-serif; TEXT-DECORATION: underline
}
A.topnav-level2:active {
	FONT-SIZE: 11px; COLOR: #000000; FONT-FAMILY: Arial, Helvetica, sans-serif
}
.topnav-level2-highlight {
	FONT-WEIGHT: bold; FONT-SIZE: 11px; COLOR: #000000; LINE-HEIGHT: normal; FONT-FAMILY: Arial, Helvetica, sans-serif; TEXT-DECORATION: none
}
A.topnav-level2-highlight:link {
	FONT-WEIGHT: bold; FONT-SIZE: 11px; COLOR: #cc0033; FONT-FAMILY: Arial, Helvetica, sans-serif; TEXT-DECORATION: none
}
A.topnav-level2-highlight:visited {
	FONT-WEIGHT: bold; FONT-SIZE: 11px; COLOR: #f2f2f2; FONT-FAMILY: Arial, Helvetica, sans-serif; TEXT-DECORATION: none
}
A.topnav-level2-highlight:hover {
	FONT-WEIGHT: bold; FONT-SIZE: 11px; COLOR: #f2f2f2; FONT-FAMILY: Arial, Helvetica, sans-serif; TEXT-DECORATION: underline
}
A.topnav-level2-highlight:active {
	FONT-WEIGHT: bold; FONT-SIZE: 11px; COLOR: #ffcc33; FONT-FAMILY: Arial, Helvetica, sans-serif; TEXT-DECORATION: none
}
.txt{
	position:absolute;
	top:145px;
	left:405px;
	width:688px;
	height:131px;
	margin-left: auto;
	margin-right: auto;
}
</style>
</head>

<body class="oneColLiqCtrHdr">
<!-- ----------------------------------------------------------------------------------------------------------------------------------->
<table class="ds_box" cellpadding="0" cellspacing="0" id="ds_conclass" style="display: none;">
<tr><td id="ds_calclass">
</td></tr>
</table>

<!-- ----------------------------------------------------------------------------------------------------------------------------------->
<div id="container">
  <div id="header">
    <img src="header.JPG" width="1070" height="111" />
    <!-- fin de #header -->
  </div>
  <div id="content">
         <div id="l_col"> 
           <div ><font face="comic sans ms" color="#006633">Bienvenue <?php if(!empty($_SESSION['user'])) {echo "$se. $login";}else{?>
		 																<SCRIPT LANGUAGE="JavaScript">document.location.href="index.php"</SCRIPT>
           <?php } ?>
           </font>
           </div>     
         <div class="lien"><?php
echo "<table width=\"175\"><br><font size=\"\">
					
                    <TR>
                      <TD width=5 bgColor=#146d12>&nbsp;</TD>
                      <TD bgColor=#f2f2f2>&nbsp;&nbsp;<IMG height=8 
                        src='bl_arrow_closed_grey.gif' 
                        width=8 border=0></A>&nbsp;<A class=topnav-level2 
                        title='Consultation'  
                        href=\"admin.php?p=1\">TypeDemande
                        </A></TD></TR>
                    <TR>
                      <TD width=5 bgColor=#146d12>&nbsp;</TD>
                      <TD bgColor=#f2f2f2>&nbsp;&nbsp;<IMG height=8 
                        src='bl_arrow_closed_grey.gif' 
                        width=8 border=0></A>&nbsp;<A class=topnav-level2 
                        title='Deconection'  
                        href=\"admin.php?p=2\">utilisateur 
                        </A></TD></TR>
					<TR>
                      <TD width=5 bgColor=#146d12>&nbsp;</TD>
                      <TD bgColor=#f2f2f2>&nbsp;&nbsp;<IMG height=8 
                        src='bl_arrow_closed_grey.gif' 
                        width=8 border=0></A>&nbsp;<A class=topnav-level2 
                        title='Deconection'  
                        href=\"admin.php?p=3\">service 
                        </A></TD></TR>
					<TR>
                      <TD width=5 bgColor=#146d12>&nbsp;</TD>
                      <TD bgColor=#f2f2f2>&nbsp;&nbsp;<IMG height=8 
                        src='bl_arrow_closed_grey.gif' 
                        width=8 border=0></A>&nbsp;<A class=topnav-level2 
                        title='Deconection'  
                        href=\"deco.php\">Deconection 
                        </A></TD></TR>
						
                        </font></table>";
?>
<div class="div6">
<img src="cal.jpg" width="45" height="143" />
</div>
           <FONT face=arial color=navy size=2>
<center><SCRIPT type='text/javascript'>
		// Affiche le calendrier 
		// calendar(colFond,colTitre,colTexte,colFerie,colOn)
	  	   calendar("#deeeef","#c7c8e1","#080809","#b6f6d1","red");
	</SCRIPT></CENTER></FONT>
       	   </div>
		 </div>
         <div id="r_col" >
        <form name="f3" method="POST" action=""  >
    
   <div class="txt" id="txt"> <b><h3>vous avez le droit:
   </h3></b>
     <ul>
       <li>d'ajouter et de modifier un type de demande. </li>
   <li>d'ajouter et de modifier un compte utilisateur.</li>
   <li>d'ajouter et de modifier un service.</li>
   </ul>
     <p>&nbsp;</p>
<p><font color="#990000"> NB: Attention toutes modification des informations est au niveau de la base des données  </font></p>
   </div>
  </form>
   
   <?php 
   
   /////////////////////////////////////////////////////////
////////////////////////////////////////////////////////formulaire d'ajout d'un user
					
					if(isset($_POST['Ajoutuser']))
{
unset($_POST['modifieuser']);
	unset($_GET['moduser']);
	unset($_GET['p']);
 ?>
 <SCRIPT LANGUAGE="JavaScript">
 var foo = document.getElementById("txt");
foo.innerHTML=""
var fooo = document.getElementById("r_col");
fooo.innerHTML=""
 </SCRIPT>
<form  method="post" action="" id="formuser" >
 
 <center><H1 class="button">Ajouter un utilisateur</H1>
   <table>
     <tr>
       <td> Sexe :</td>
       <td><select name="sexe">
         <option value="Mr">Mr</option>
         <option value="Mme">Mme</option>
         <option value="Mlle">Mlle</option>
       </select></td>
       <td>Entrer le nom complet :</td>
       <td><input type="text" name="nom2" value="" /></td>
     </tr>
     <tr>
       <td> Entrer le Mot de passe :</td>
       <td><input type="password" name="pwd2" value="" /></td>
     
       <td> Entrer le Profil :</td>
       <td><input type="text" name="profil2" value="" /></td>
     </tr>
     <tr>
       <td></td>
       <td><input  type="submit" name="ajouteruser" class="button" value="Valider" onClick="vider()"  /></td>
     </tr>
   </table>
 </center>
</form>
<?php
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////formulaire d'ajout d'un type de dmd

	if(isset($_POST['Ajoutservice'])){
	unset($_POST['modifierservice']);
	unset($_GET['modservice']);
	unset($_GET['p']);
?>
 <SCRIPT LANGUAGE="JavaScript">
 var foo = document.getElementById("txt");
foo.innerHTML=""
var fooo = document.getElementById("r_col");
fooo.innerHTML=""
 </SCRIPT>
  <form  method="POST" action="" id="formserv" >
 
 <center><H1 class="button">Inserer un nouveau service</H1>
 <table><TR>
<td> Entrer le libellé :</td><td><input type="text" name="libelle" value="" /></td>
<tr><td> Entrer le sigle :</td><td><input type="text" name="sigle" value="" /></td></tr>
<tr> <td> </td><td><input  type="submit" name="ajouterservice" class="button" value="Ajouter le service" onClick="vider()"  /></td></tr>
</table></center>
</form>
<?php
}
/////////////////////////////////

   if(isset($_GET['p'])){
    switch ($_GET['p']){
    case 1 : 
	///////////////////////////////////////////////// affichage de la liste des typedemand
	{
	?> 
 <SCRIPT LANGUAGE="JavaScript">
 var foo = document.getElementById("txt");
foo.innerHTML=""

 </SCRIPT>
    <form  method="POST" action=""  >
	<?php
	$req=("select * from typedemande");
		 $res = mysql_query($req) ;        
              echo " <table border=0><tr  bgcolor='#aacc19'><td>Code Type 	</td><td>Libelle</td><td>Modifier</td></tr>";
				while($ligne=mysql_fetch_row($res))
				  {	echo "<tr align='center' bgcolor='#e2e2e2'><td> $ligne[0] </td><td> $ligne[1] </td>
				  <td><a href=\"admin.php?modifier= $ligne[0] \"><img src=\"mod.png\" width=\"26\" height=\"25\" /></a></td>";		
				  } 
					echo "</table>";
		?>   
	<div align='left'>	<input  type="submit" name="Ajout" class="button" value="Ajouter un type" /></div>
		</form>
		
	         
  

  <?php 
  
  } break;
  //////////////////////////////////////
  /////////////////////////////////////affichage de la liste des users
    case 2  :
	{
	?>
 <SCRIPT LANGUAGE="JavaScript">
 var foo = document.getElementById("txt");
foo.innerHTML=""
 </SCRIPT>
    <form  method="POST" action=""  >
	<?php
	$req=("select * from utilisateur");
		 $res = mysql_query($req) ;        
              echo "<table border=0><tr  bgcolor='#aacc19'><td>Sexe</td><td>Nom</td><td>Profil</td><td>Mot de passe</td><td>Modifier</td></tr>";
				while($ligne=mysql_fetch_row($res))
				  {	echo "<tr align='center' bgcolor='#e2e2e2'><td> $ligne[0] </td><td> $ligne[1] </td><td>$ligne[3]</td><td>●●●●●●●</td>
				  <td><a href=\"admin.php?moduser='$ligne[1]' \"><img src=\"mod.png\" width=\"26\" height=\"25\" /></a></td></tr>";		
				  } 
					echo "</table>"; 
					
					?>

					<div align='left'>	<input  type="submit" name="Ajoutuser" class="button" value="Ajouter un utilisateur"  onclick="vider()" /></div>
</form>
<?php
	
	} break;
	/////////////////////////////////
case 3  :
	{
	?>
 <SCRIPT LANGUAGE="JavaScript">
 var foo = document.getElementById("txt");
foo.innerHTML=""
 </SCRIPT>
    <form  method="POST" action=""  >
	<?php
		 $res = mysql_query("select * from service");        
              
			  echo "<table border=0><tr  bgcolor='#aacc19'><td>Code Service</td><td>Libelle</td><td>Sigle</td><td>Modifier</td></tr>";
				while($ligne=mysql_fetch_row($res))
				  {	echo "<tr align='center' bgcolor='#e2e2e2'><td> $ligne[0] </td><td> $ligne[1] </td><td> $ligne[2] </td>
				  <td><a href=\"admin.php?modservice='$ligne[0]' \"><img src=\"mod.png\" width=\"26\" height=\"25\" /></a></td></tr>";		
				  } 
					echo "</table>"; 
					
					?>

					<div align='left'>	<input  type="submit" name="Ajoutservice" class="button" value="Ajouter un service"  onclick="vider()" /></div>
</form>
<?php
	
	} break;
	//////////////////////////////////////////////////////
	
    default : $mapage = 'erreur.htm';
    }	
     }
	 
	 
//////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////formulaire d'ajout d'un type de dmd

	if(isset($_POST['Ajout'])){
	unset($_POST['modifie']);
	unset($_GET['modifier']);
	unset($_GET['p']);
  ?>
 <SCRIPT LANGUAGE="JavaScript">
 var foo = document.getElementById("txt");
foo.innerHTML=""
var fooo = document.getElementById("r_col");
fooo.innerHTML=""
 </SCRIPT>
  <form  method="POST" action="" id="" >

 <center><H1 class="button">Inserer un nouveau type de demande</H1>
 <table><TR>
 <td>Entrer libelle :</td><td><input type="text" name="libelle" value="" /></td>
<td> Entrer le Code de demande :</td><td><input type="text" name="codedmd" value="" /></td></tr>
<tr> <td> </td><td><input  type="submit" name="ajouter" class="button" value="Ajouter le type" onClick="vider()"  /></td></tr>
</table></center>

</form>
 <?php }
   
	///////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////formulaire de modification d'un type de dmd
	
  if(isset($_GET['modifier']))
  {
  $cod=$_GET['modifier'];
		 
		
		
		
		$cod=substr($cod,1,3);
	
         $req=("select * from typedemande  where CodeType=\"$cod\"");
		 $rep =  mysql_query($req) or die( mysql_error() ) ;
		 if(mysql_num_rows($rep)==0)
		  {
		        echo "aucun type demande";
		  }
		  else
		  { 
		 while($ligne=mysql_fetch_row($rep))
		{	
		    $code=$ligne[0]; 
			$type=$ligne[1];	
			
 		 }
		  }
?>
 <SCRIPT LANGUAGE="JavaScript">
 var foo = document.getElementById("txt");
foo.innerHTML=""
 </SCRIPT>
 <form  method="POST" action="" id="formmod" >
 
 <center><H1 class="button">Modifier les champs de demande</H1>
 <table><TR>
 <td>Entrer libelle :</td><td><input type="text" name="libelle" value="<?php echo $type; ?>" /></td>
<td> Entrer le Code de demande :</td><td><input type="text" name="codedmd" value="<?php  echo $code; ?>" /></td></tr>
<tr> <td> </td><td><input  type="submit" name="modifie" class="button" value="Modifier le type"  /></td></tr>
</table></center>
</form>
<?php 
}

/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////modifier le type de dmd dans la base de donee

if(isset($_POST['modifie']))
{

?>
<SCRIPT LANGUAGE="JavaScript">

    var foo = document.getElementById("r_col");
foo.innerHTML=""
        </SCRIPT>
		<form  method="POST" action=""  >
		<?php
$codmd=addslashes($_POST['codedmd']);
$Lib=addslashes($_POST['libelle']);
//$cod=substr($cod,1,3);


if(!empty($codmd) && !empty($Lib)){
$res=mysql_query("UPDATE typedemande SET CodeType='$codmd', Libelle='$Lib' where CodeType='$cod' ") or die(mysql_error());
}else{ 
?>
<SCRIPT LANGUAGE="JavaScript">
alert("veuillez remplir tous les champs");
        </SCRIPT>
<?php }
$req=("select * from typedemande");
		 $res = mysql_query($req) ;        
              echo " <table border=0><tr  bgcolor='#aacc19'><td>Code Type </td><td>Libelle</td><td>Modifier</td></tr>";
				while($ligne=mysql_fetch_row($res))
				  {	echo "<tr align='center' bgcolor='#e2e2e2'><td> $ligne[0] </td><td> $ligne[1] </td>
				  <td><a href=\"admin.php?modifier='$ligne[0]' \"><img src=\"mod.png\" width=\"26\" height=\"25\" /></a></td>";		
				  } 
					echo "</table>";
					
					
					?>
					<div align='left'>	<input  type="submit" name="Ajout" class="button" value="Ajouter un type"  onclick="vider()" /></div>
</form>
					<?php
					
					}
					
////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////ajouter le type de dmd dans la base de donee
					
if(isset($_POST['ajouter']))
{
?>
<SCRIPT LANGUAGE="JavaScript">
 var foo = document.getElementById("r_col");
foo.innerHTML=""
        </SCRIPT>

           
		
		<form  method="POST" action=""  >
		<?php
		
$codmd=addslashes($_POST['codedmd']);
$Lib=addslashes($_POST['libelle']);
//echo "$codmd";
if(!empty($codmd) && !empty($Lib)){
$req=("insert into typedemande (CodeType,Libelle) values ('$codmd','$Lib')");
$res=mysql_query($req) or die(mysql_error());
}else{ 
?>
<SCRIPT LANGUAGE="JavaScript">
alert("veuillez remplir tous les champs");
        </SCRIPT>
<?php }
$req=("select * from typedemande");
		 $res = mysql_query($req) ;        
              echo " <table border=0><tr  bgcolor='#aacc19'><td>Code Type </td><td>Libelle</td><td>Modifier</td></tr>";
				while($ligne=mysql_fetch_row($res))
				  {	echo "<tr align='center' bgcolor='#e2e2e2'><td> $ligne[0] </td><td> $ligne[1] </td>
				  <td><a href=\"admin.php?modifier='$ligne[0]' \"><img src=\"mod.png\" width=\"26\" height=\"25\" /></a></td>";		
				  } 
					echo "</table>";
					
					?>
					<div align='left'>	<input  type="submit" name="Ajout" class="button" value="Ajouter un type"  /></div>
                    </form>
					<?php
					}
					


//////////////////////////////////////////////////////
/////////////////////////////////////////////////////formulaire de modification d'un user

if(isset($_GET['moduser']))
{
  $cod=$_GET['moduser'];
  $res = mysql_query("select * from utilisateur where Nom=$cod") ;
  while($ligne=mysql_fetch_row($res)){
 $sexe=$ligne['0'] ;
 $nom=$ligne['1'] ;
 $mdp=$ligne['2'];
 $profil=$ligne['3'];

 
 }
?>
 <SCRIPT LANGUAGE="JavaScript">
 var foo = document.getElementById("txt");
foo.innerHTML=""
 </SCRIPT>
<form  method="POST" action=""  >

 <center><H1 class="button">Modifier un utilisateur</H1>
 <table><TR>
 <td> Sexe :</td>
       <td><select name="sexe">
         <option value="Mr">Mr</option>
         <option value="Mme">Mme</option>
         <option value="Mlle">Mlle</option>
       </select></td>
 <td>Entrer le nom complet :</td><td><input type="text" name="nom" value="<?php  echo  $nom ;?>" /></td></TR>
<tr><td> Entrer le Mot de passe :</td><td><input type="password" name="pwd" value="<?php echo $mdp ;?>" /></td>
<td> Entrer le Profil :</td><td><input type="text" name="profil" value="<?php echo $profil ;?>" /></td></tr>

<tr> <td> </td><td><input  type="submit" name="modifieuser" class="button" value="Valider" onClick="vider()"  /></td></tr>
</table></center>
</form>
<?php

 ////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////// modification d'un user dans la base

if(isset($_POST['modifieuser']))
{
//unset ($_GET['moduser']);
echo $cod;
?>
<SCRIPT LANGUAGE="JavaScript">

    var foo = document.getElementById("r_col");
foo.innerHTML=""
        </SCRIPT>
		<form  method="POST" action=""  >
		<?php
$nom= addslashes($_POST['nom']);
$mdp=addslashes($_POST['pwd']);
$prof=addslashes($_POST['profil']);
$sexe=addslashes($_POST['sexe']);
//echo $nom;
if(!empty($nom) && !empty($mdp)  && !empty($prof))
{$req=("update utilisateur set Nom ='$nom', Motpasse='$mdp', Profil='$prof', sexe='$sexe' where Nom=$cod");
$res=mysql_query($req) or die(mysql_error());
}
else
{ 
?>
<SCRIPT LANGUAGE="JavaScript">
alert("veuillez remplir tous les champs");
        </SCRIPT>
<?php 
}
$req=("select * from utilisateur");
		 $res = mysql_query($req) ;        
              echo " <table border=0><tr  bgcolor='#aacc19'><td>Sexe</td><td>Nom</td><td>Mot de passe</td><td>Profil</td><td>Modifier</td></tr>";
				while($ligne=mysql_fetch_row($res))
				  {	echo "<tr align='center' bgcolor='#e2e2e2'><td> $ligne[0] </td><td> $ligne[1] </td>
				  <td> ●●●●●●● </td><td>$ligne[3]</td>
				  <td><a href=\"admin.php?moduser='$ligne[1]' \"><img src=\"mod.png\" width=\"26\" height=\"25\" /></a></td></tr>";		
				  } 
					echo "</table>";
					
					
					?>
					<div align='left'>	<input  type="submit" name="Ajoutuser" class="button" value="Ajouter un utilisateur"  onclick="vider()" /></div>
</form>
					<?php

}

}



///////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////Ajout d'un user dans la base

if(isset($_POST['ajouteruser']))
{

?>
<SCRIPT LANGUAGE="JavaScript">

    var foo = document.getElementById("r_col");
foo.innerHTML=""
        </SCRIPT>
		<form  method="POST" action=""  >
		<?php
		
$nom=$_POST['nom'];
$mdp=$_POST['pwd'];
$prof=$_POST['profil'];
$sexe=$_POST['sexe'];
if(!empty($nom) && !empty($mdp)  && !empty($prof))
{
$req=("insert into utilisateur (sexe,Nom,Motpasse,Profil) values ('$sexe','$nom','$mdp','$prof')");

$res=mysql_query($req) or die(mysql_error());
}
else{
?>
<SCRIPT LANGUAGE="JavaScript">
alert("veuillez remplir tous les champs");
</SCRIPT>
<?php 
}
$req=("select * from utilisateur");
		 $res = mysql_query($req) ;        
              echo " <table border=0><tr  bgcolor='#aacc19'><td>Sexe</td><td>Nom </td><td>Mot de passe</td><td>Profil</td><td>Modifier</td></tr>";
				while($ligne=mysql_fetch_row($res))
				  {	echo "<tr align='center' bgcolor='#e2e2e2'><td> $ligne[0] </td><td> $ligne[1] </td><td> $ligne[2] </td><td> $ligne[3] </td>
				  
				  <td><a href=\"admin.php?moduser='$ligne[1]' \"><img src=\"mod.png\" width=\"26\" height=\"25\" /></a></td></tr>";		
				  } 
					echo "</table>";
					
					?>
<div align='left'>	<input  type="submit" name="Ajoutuser" class="button" value="Ajouter un utilisateur"  /></div>
                    </form>
					
<?php
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


if(isset($_GET['modservice']))
{
  $cod=$_GET['modservice'];
  $res = mysql_query("select * from service where Code_service=$cod") ;
  while($ligne=mysql_fetch_row($res)){
 $code_service=$ligne['0'] ;
 $libelle=$ligne['1'];
 $sigle=$ligne['2'];
 
 }
?>
 <SCRIPT LANGUAGE="JavaScript">
 var foo = document.getElementById("txt");
foo.innerHTML=""
 </SCRIPT>
<form  method="POST" action=""  >
 
 <center><H1 class="button">Modifier un service</H1>
 <table><TR>

<td> Entrer le libellé :</td><td><input type="text" name="libelle" value="<?php echo  $libelle; ?>" /></td></tr>
<tr><td> Entrer le sigle :</td><td><input type="text" name="sigle" value="<?php echo $sigle ;?>" /></td></tr>

<tr> <td> </td><td><input  type="submit" name="modifierservice" class="button" value="Valider" onClick="vider()"  /></td></tr>
</table></center>
</form>
<?php

 ////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////// modification d'un user dans la base

if(isset($_POST['modifierservice']))
{
//unset ($_GET['moduser']);
//echo $cod;
?>
<SCRIPT LANGUAGE="JavaScript">

    var foo = document.getElementById("r_col");
foo.innerHTML=""
        </SCRIPT>
		<form  method="POST" action=""  >
		<?php
$sigle=addslashes($_POST['sigle']);
$libelle=addslashes($_POST['libelle']);


if(!empty($sigle) && !empty($libelle))
{
 $res=mysql_query("update service set Libelle='$libelle', sigle='$sigle' where Code_service=$cod") or die(mysql_error());
}
else
{ 
?>
<SCRIPT LANGUAGE="JavaScript">
alert("veuillez remplir tous les champs");
        </SCRIPT>
<?php 
}
$res = mysql_query("select * from service") ;        
echo " <table border=0><tr  bgcolor='#aacc19'><td>code service</td><td>libelle</td><td>sigle</td><td>Modifier</td></tr>";
		         while($ligne=mysql_fetch_row($res))
				  {	echo "<tr align='center' bgcolor='#e2e2e2'><td> $ligne[0] </td><td>$ligne[1]</td><td> $ligne[2] </td> <td><a href=\"admin.php?modservice='$ligne[0]' \"><img src=\"mod.png\" width=\"26\" height=\"25\" /></a>     					</td></tr>";	
				  	
				  } 
echo "</table>";					
					
?>					
					
<div align='left'>
  <input  type="submit" name="ajoutservice" class="button" value="Ajouter un service"  onclick="vider()" />
</div>
</form>

<?php					
}
}
////////////////////////////////////////////////////////Ajout d'un user dans la base

if(isset($_POST['ajouterservice']))
{

?>
<SCRIPT LANGUAGE="JavaScript">

    var foo = document.getElementById("r_col");
foo.innerHTML=""
        </SCRIPT>
		<form  method="post" action=""  >
		
<?php		
$sigle=addslashes($_POST['sigle']);
$libelle=addslashes($_POST['libelle']);

if(!empty($sigle) && !empty($libelle))
{
$res=mysql_query("insert into service (Libelle,sigle) values ('$libelle','$sigle')") or die(mysql_error());
}
else
{
?>
<SCRIPT LANGUAGE="JavaScript">
alert("veuillez remplir tous les champs");
        </SCRIPT>
<?php 
}
$res = mysql_query("select * from service") ;        
echo " <table border=0><tr  bgcolor='#aacc19'><td>code service</td><td>libelle</td><td>sigle</td><td>Modifier</td></tr>";
		         while($ligne=mysql_fetch_row($res))
				  {	echo "<tr align='center' bgcolor='#e2e2e2'><td> $ligne[0] </td><td>$ligne[1]</td><td> $ligne[2] </td> <td><a href=\"admin.php?modservice='$ligne[0]' \"><img src=\"mod.png\" width=\"26\" height=\"25\" /></a></td></tr>";			
				  } 
					echo "</table>";
					
					?>
					<div align='left'>	<input  type="submit" name="ajoutservice" class="button" value="Ajouter un service"  /></div>
                    </form>
					
<?php
}
mysql_close($con);
?>	
				
<br>
      
</div>


  </div>
	
 <div id="footer">
    <h6 align="center"> &copy;  ocp.com | Design by <a href="">LP2I - agadir</a></h6>
  <!-- fin de #footer --></div>
<!-- fin de #container --></div>
</body>
</html>