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
.div6{
	position:absolute;
	top:229px;
	left:71px;
	width:46px;
	height:146px;
	margin-left: auto;
	margin-right: auto;
}

</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="gest.css" media="screen"/>
<title>Document sans titre</title>

<style type="text/css">
#l_col {
	padding: 0px;
	float: left;
	width: 18%;}
	#r_col {
	padding:  10px;
	float: left;
	width: 68%;
	border-left: 1px solid #eee;
	font: 80%/160% Verdana, Arial, Helvetica, sans-serif;
}
.gauche {
	position: absolute;
	top: 210px;
	left: 9px;
	width: 18%;
	height: 239px;
}
#header img { width : 100%;}
  </style>

</head>

<body class="oneColLiqCtrHdr">

<div id="container">
  <div id="header">
    <img src="header.JPG" width="1070" height="111" />
    <!-- fin de #header -->
  </div>
  <div id="content">
         <div id="l_col"> <div ><font face="comic sans ms" color="#006633">Bienvenue <?php if(!empty($_SESSION['user'])) {echo "$se. $login";}else{?>
		 																<SCRIPT LANGUAGE="JavaScript">document.location.href="index.php"</SCRIPT>
           <?php } ?>
                                </font></div>    
		          	 <div class="lien"><font size="2">
		          	 	 <BR />
                       <table width="177">
             <tr>
               <td width=5 bgcolor=#a5dcbd>&nbsp;</td>
               <td width="123" bgcolor=#f2f2f2>&nbsp;&nbsp;<img height=8 
                        src="bl_arrow_closed_grey.gif" 
                        width=8 border=0 />&nbsp;<a class=topnav-level2 
                        title="Rechercher la demande"  
                        href="rech_chef_personnel.php">Rechercher la demande</a></td>
             </tr>
             <tr>
               <td width=5 bgcolor=#a5dcbd>&nbsp;</td>
               <td bgcolor=#f2f2f2>&nbsp;&nbsp;<img height=8 
                        src="bl_arrow_closed_grey.gif" 
                        width=8 border=0 />&nbsp;<a class=topnav-level2 
                        title="Gestion de la demande"  
                        href="chef_personnel.php">Gestion de la demande </a></td>
             </tr>
             <tr>
               <td width=5 bgcolor=#a5dcbd>&nbsp;</td>
               <td bgcolor=#f2f2f2>&nbsp;&nbsp;<img height=8 
                        src="bl_arrow_closed_grey.gif" 
                        width=8 border=0 />&nbsp;<a class=topnav-level2 
                        title="Deconection"  
                        href="deco.php">Deconection </a></td></tr> </table>
             
          <div class="div6">
<img src="cal.jpg" width="45" height="141" />
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
        <form  method="post" action=""  >
        <fieldset>
    <legend>Gestionnaire: </legend>

    
        <p><?php

if(isset($_POST['traiter']))
{
    $trait="";
    $trait="0"; 
	$liste="";
	$liste="0";
	
	$req1="SELECT  d.Code_demande,s.libelle,a.Matricule,a.Nom,a.Prenom,d.CodeType,d.DateDemande,d.Etat,d.DateCloture,d.Remarque FROM agents as a,demande as d,service as s where a.Matricule=d.Matricule and a.code_service=s.Code_service and (d.Etat='Ouverte' or d.Etat='En cours de traitement')";
    $rep1 =  mysql_query($req1, $con) or die( mysql_error() ) ;
	
	$nblignes = mysql_num_rows($rep1);
  
      if(isset($_POST['table_array']))
        {
               foreach ($_POST['table_array'] as $selectValue)
                     { 
                        $trait.=$selectValue.", ";
						
                      }  
			  $trait=substr($trait, 0, -2);
			
			if(isset($_POST['list']))
              {
		               foreach ($_POST['list'] as $Value)
                           { 
                        $liste.=$Value.", ";  
					       }
				      $liste=substr($liste, 1, -2);
				     
				      $pieces = explode(", ", $liste);
					    
					$login=$_SESSION['user'];  
                                                   
												   
				     for($i=0;$i<$nblignes;$i++)	
					   {    
					          if( $pieces[$i]<>"")
						       {
								    
								  
								       $sql="SELECT Etat,Matricule from demande where Code_demande='$trait'";
                                       $res=mysql_query($sql,$con) or die( mysql_error() ) ;
                                      while($line=mysql_fetch_row($res))
								       {
								         $base=$line[0];
								         $mat=$line[1];
										 $r=mysql_query("SELECT MAX(DateDemande) from demande where Matricule=$mat") or die( mysql_error() ) ;
								         while($lines=mysql_fetch_row($r))
										 {
											 $dern=$lines[0];
										 if($base=="Cloturee" && $pieces[$i]<>"Refusee")
									       {
											 echo "<center><b><font color='#e72a2a'>Désolé, la demande séléctionner est déjà clôturée!</font></b></center>";
									       }
										 elseif($base=="En cours de traitement" && $pieces[$i]=="Ouverte")
										   {
									echo "<center><b><font color='#e72a2a'>Désolé, la demande séléctionner est déjà En cours de traitement!</font></b></center>";  
										   }
										  else
										   {
											  if($pieces[$i]<>"Refusee")
											    {
											    echo "<center><b><font color='#e72a2a'> la demande a ete bien traitee</font></b></center>";
											       $tab[$i] = mysql_tablename($rep1, $i);
												   $date=date('d/m/20y');
					                               $trai= "update demande set gestionnaire='$login',Etat='$pieces[$i]',Datetrait='$date',DerniereDate='$dern' WHERE Code_demande in (".$tab[$i].")";
								                        mysql_query($trai) or die( mysql_error() ) ;
											       if($pieces[$i]=="Cloturee")
											         {
										                    $date=date('d/m/20y');			
		                                                   mysql_query(" update demande set  DateCloture='$date',Datetrait='$date' WHERE Code_demande in (".$tab[$i].")")                                       or die(mysql_error());
											         }
											  
												 }
											 else{
													$_SESSION['ref']=$trait;
													/*print("<script type=\"text/javascript\">setTimeout('location=(\"refusee_gest.php\")' ,1000);			 															</script>");*/
													print("<script type=\"text/javascript\">document.location.href=\"refusee_gest.php\"</script>");
												 }
										   }}
									   }
						       }
					   }		
	          }
			  
         }  
         else{echo "<center><b><font color='#e72a2a'>selectionner une demande SVP!</font></b></center>";}             
	
	
	




	
} 
elseif(isset($_POST['imprimer']))
{
    $trait="";
    $trait="0"; 
  
      if(isset($_POST['table_array']))
        {
               foreach ($_POST['table_array'] as $selectValue)
                     { 
                        $trait.=$selectValue.", ";
						
                      }  
			  $trait=substr($trait, 0, -2);
			  $_SESSION['code']=$trait;
			 $sql1= mysql_query("select Etat from demande where Code_demande='$trait'", $con) or die( mysql_error() );
			 while($lin=mysql_fetch_row($sql1))
                {
					$etat=$lin[0];
					if($etat<>"Ouverte")
					   {  
						$sql2= mysql_query("select CodeType from demande where Code_demande='$trait'", $con) or die( mysql_error() );
			            while($line=mysql_fetch_row($sql2))
                          {
                            $demande=$line[0];
				            if($demande=="Attestation d ordre irrev"){print("<script type=\"text/javascript\">document.location.href=\"attestation de d\'ordre.php\"</script>");}
							elseif($demande=="Attestation du travail"){print("<script type=\"text/javascript\">document.location.href=\"attestation de travail.php\"</script>");}
			              }
				     
						}
					else{echo "<center><b><font color='#e72a2a'>L'état de la demande est $etat!</font></b></center>";}
					 
			      
				}
				 
		 }
		else{echo "<center><b><font color='#e72a2a'>selectionner une demande SVP!</font></b></center>";}
}


?>


         <table width="" align="center">
         <tr align="center" bgcolor="#aacc19">
         <td width="1%"><font face="comic sans ms"><b></b></font></td>
         <td width="5%"><font face="comic sans ms"><b>Service</b></font></td>
         <td width="8%"><font face="comic sans ms"><b>Matricule</b></font> </td>
         <td width="4%"><font face="comic sans ms"><b>Nom</b></font> </td>
         <td width="7%"><font face="comic sans ms"><b>Prenom</b></font> </td>
         <td width="11%"><font face="comic sans ms"><b>TypeDemande</b></font> </td>
         <td width="10%"><font face="comic sans ms"><b>DateDemande</b></font> </td>
         <td width="274"><font face="comic sans ms"><b>Etat</b></font></td>
         
         <td width="10%"><font face="comic sans ms"><b>DernièreDate</b></font> </td>
         <td width="8%"><font face="comic sans ms"><b>Gestionaire</b></font> </td>
         </tr>
       
     
<?php
 
  $req="SELECT d.Code_demande,s.libelle,a.Matricule,a.Nom,a.Prenom,d.CodeType,d.DateDemande,d.Etat,d.DerniereDate,d.gestionnaire FROM agents as a,demande as d,service as s where a.Matricule=d.Matricule and a.code_service=s.Code_service and (d.Etat='Ouverte' or d.Etat='En cours de traitement') ";
  $rep =  mysql_query($req, $con) or die( mysql_error() ) ;

  while($ligne=mysql_fetch_row($rep))
    {
         $codmd=$ligne[0];
		 $ser=$ligne[1];
        $mat=$ligne[2];
		$nom=$ligne[3];
		$pre=$ligne[4];
		$typDmd=$ligne[5];
		$DatDmd=$ligne[6];
		$eta=$ligne[7];
		$dern=$ligne[8];
		$user=$ligne[9];
		
		echo "<tr align='center' bgcolor='#e2e2e2'> 
		 <td> <input type='checkbox' name='table_array[]' value='$codmd'> </td>  
		<td>$ser</td>
		<td>$mat</td>
		<td>$nom</td>
		<td>$pre</td>
		<td>$typDmd</td>
		<td>$DatDmd</td>
		
	     <td>   <input type='text' value='$eta' disabled  size='23'> <select name='list[]' > <option value=\"\"></option><option value=\"Ouverte\">Ouverte</option>         <option value=\"En cours de traitement\"> En cours de traitement</option><option value=\"Cloturee\">Cloturée</option> 
		 <option value=\"Refusee\">Refusee</option> </select></td>";
	    
		
	   echo "<td>";if($dern==''){echo "NULL";}else{echo $dern;}echo "</td>
		<td>$user</td>   
	      
	        
	         </tr>" ;
    }                                                                     

       ?>
     
     </table></fieldset>
     
     <div align="CENTER"><table>
   <tr><td colspan="7" align="center"><input type="submit" name="traiter" value="        Traiter      " class="button2"></td><td><td>
   <input type="submit" name="imprimer" value="        Imprimer      " class="button2" onclick="edition();return false;"></td></tr></table></div>
  </form> &nbsp;</p>
        
</form>
<br>



        
</div>
</div>
			 
  <div id="footer">
    <h6 align="center"><font size="-2"> &copy;  ocp.com | Design by <a href="">LP2I - agadir</a></font></h6>
  <!-- fin de #footer --></div>
<!-- fin de #container --></div>
<?php mysql_close($con); ?>
</body>
</html>