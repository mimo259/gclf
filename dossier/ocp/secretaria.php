<?php session_start();

		$con=mysql_connect('localhost','root','');
		mysql_select_db('ocp',$con);
		$login=$_SESSION['user'];
		$se=$_SESSION['sexe'];
?>
	
	
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
<style>
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

</style>
<link href="style1.css" rel="stylesheet" media="all" type="text/css"> 

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="default.css" media="screen"/>
<title>Document sans titre</title>

<style type="text/css">
#l_col {
	padding: 0px;
	float: left;
	width: 20%;
	height:265px;
	
	
	
	}
	#r_col {
	padding:  10px;
	float: left;
	width: 68%;
	border-left: 1px solid #eee;
	font: 80%/160% Verdana, Arial, Helvetica, sans-serif;
}
#header img { width : 100%;}

.div6{
	position:absolute;
	top:236px;
	left:138px;
	width:46px;
	height:146px;
	margin-left: auto;
	margin-right: auto;
}
</style>
<script language="JavaScript">

function verification_formulaire(){ 
var x=document.forms['f1'].elements['mat'].value; 
if(x == "") { 
alert("Veuillez entrer votre le matricule!"); 
x.focus(); 
return false; 
} 
}
  function recoi()
   {
      document.getElementById('val').value= document.getElementById('mat').value;
	  return false;
   }
    	
</script>



</head>

<body class="oneColLiqCtrHdr">

<div id="container">
  <div id="header">
    <img src="header.JPG" width="1044" height="111" />
    <!-- fin de #header -->
  </div>
  <div id="content">
       <div id="l_col">
         <div ><font face="comic sans ms" color="#006633">Bienvenue <?php if(!empty($_SESSION['user'])) {echo "$se.  $login";}else{?>
		 																<SCRIPT LANGUAGE="JavaScript">document.location.href="index.php"</SCRIPT>  <?php } ?>
		 
               </font></div>
         <div class="lien"><br><font size="">
           <table width="177">
             <tr>
               <td width=5 bgcolor=#a5dcbd>&nbsp;</td>
               <td width="123" bgcolor=#f2f2f2>&nbsp;&nbsp;<img height=8 
                        src="bl_arrow_closed_grey.gif" 
                        width=8 border=0 />&nbsp;<a class=topnav-level2 
                        title="Taper la demande"  
                        href="secretaria.php">Taper la demande </a></td>
             </tr>
             <tr>
               <td width=5 bgcolor=#a5dcbd>&nbsp;</td>
               <td bgcolor=#f2f2f2>&nbsp;&nbsp;<img height=8 
                        src="bl_arrow_closed_grey.gif" 
                        width=8 border=0 />&nbsp;<a class=topnav-level2 
                        title="Consultation"  
                        href="consultation.php">Consultation </a></td>
             </tr>
             <tr>
               <td width=5 bgcolor=#a5dcbd>&nbsp;</td>
               <td bgcolor=#f2f2f2>&nbsp;&nbsp;<img height=8 
                        src="bl_arrow_closed_grey.gif" 
                        width=8 border=0 />&nbsp;<a class=topnav-level2 
                        title="Deconection"  
                        href="deco.php">Deconection </a></td>
             </tr>
           </table></font>
           
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
         <div id="r_col">
         
        
  <form name="f1" method="post" action="" onSubmit="return verification_formulaire();" >
    <fieldset>
    <legend> Taper la demande: </legend>
	<table width="393" border="0">
	<tr>
		<td width="166" ><font size="2">&nbsp;Matricule:</font></td>
		<td width="97"><input name="mat" id="mat" type="text" size=12 value="<?php  
		if (isset($_POST['verifier'])) 
			{ 
				$mat=$_POST['mat'];
		          echo $mat;}else{}
		        ?>"></td>
		<td width="116"><input  type="submit" name="verifier"  value="vérifier" /></td></tr></table>

</form>
 <form name="f2"  action="" method="post">
	<table width="414" height="103" border=0>
	<td width="163"><font size="2">Nom Complet:</font></td>
	<td width="241" colspan="2">
		<?php 
		
			if (isset($_POST['verifier'])) 
			{ 
				$mat=isset($_POST['mat'])? $_POST['mat'] : '';
				
				$req2	=mysql_query("select Nom,Prenom from agents where Matricule='$mat'") or die (mysql_error());
				
				if(mysql_num_rows($req2)==0)
		{
		echo "ce matricule n'existe pas";
		}
		else{
				    echo " <table border=0> ";
				while($ligne=mysql_fetch_array($req2))
				{	echo "<tr><td> $ligne[0] </td><td> $ligne[1] </td></tr>";	
				} 
					echo "</table>";
			}
			}
		?> 
	</td>
	</tr>
	<tr>
	<td colspan="2"><input type="hidden" name="val" id="val" value="<?php  echo $mat;    ?>"></td>
	<tr>
	<tr>
		<td><font size="2">Type de demande:</font></td>
		<td colspan="2">
		  <?php
        echo "<select name=\"list\" ><option value=\"vide\">-- Choississez --</option>";
              
              $sql = "SELECT Libelle FROM typedemande";
              $option = mysql_query($sql) ;        
              while($row = mysql_fetch_row($option))
                  {
                   echo "\t\t<option selected=\"selected\" value='$row[0]'>".($row[0])."</option>\n";
                  }
              echo "</select>";
        ?> 
		</td>
	</tr>
	<tr>
	<td colspan="2" align="right">
    <input name="b_envoyer" type="submit" value="Envoyer" />
	     <input name="annuler" type="reset" value="Annuler"  /></td>
	</tr>
	</table><br /></fieldset>
 </form>

	
<?php 


	if(isset($_POST['b_envoyer']))
	    {
			
		

					$val=isset($_POST['val']) ? $_POST['val'] : '';
					$list=isset($_POST['list']) ? $_POST['list'] : '';
					$date=date('d/m/20y');
										
				if ($val<>0) 
			    {
					$sql="insert into demande(Matricule,CodeType,Etat,DateDemande) values ('$val','$list','Ouverte','$date')";					
					mysql_query($sql) or die(mysql_error());
					echo "la demande est enregistrée ";
            		
				 } else{
					echo"tapez le matricule SVP";}
                mysql_close($con);
      }
  

?>
                   
     </div>


        </div>
			 
  <div id="footer">
    <h6 align="center"> &copy; ocp.com | Design by <a href="">LP2I - agadir</a></h6>
  <!-- fin de #footer --></div>
<!-- fin de #container --></div>
</body>
</html>