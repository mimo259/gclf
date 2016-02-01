 <?php session_start();

		$con=mysql_connect('localhost','root','');
		mysql_select_db('ocp',$con);
		$login=$_SESSION['user'];
		$ref=$_SESSION['ref'];
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
.div6{
	position:absolute;
	top:236px;
	left:70px;
	width:46px;
	height:146px;
	margin-left: auto;
	margin-right: auto;
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

</style>
<link href="style2.css" rel="stylesheet" media="all" type="text/css">
<script type="text/javascript">
var ns6=document.getElementById&&!document.all

function restrictinput(maxlength,e,placeholder){
if (window.event&&event.srcElement.value.length>=maxlength)
return false
else if (e.target&&e.target==eval(placeholder)&&e.target.value.length>=maxlength){
var pressedkey=/[a-zA-Z0-9\.\,\/]/ 
if (pressedkey.test(String.fromCharCode(e.which)))
e.stopPropagation()
}
}

function countlimit(maxlength,e,placeholder){
var theform=eval(placeholder)
var lengthleft=maxlength-theform.value.length
var placeholderobj=document.all? document.all[placeholder] : document.getElementById(placeholder)
if (window.event||e.target&&e.target==eval(placeholder)){
if (lengthleft<0)
theform.value=theform.value.substring(0,maxlength)
placeholderobj.innerHTML=lengthleft
}
}
//trouvé sur: www.portugal-tchat.com//

function displaylimit(thename, theid, thelimit){
var theform=theid!=""? document.getElementById(theid) : thename
var limit_text='<b><span id="'+theform.toString()+'">'+thelimit+'</span></b> characteres Maximum.'
if (document.all||ns6)
document.write(limit_text)
if (document.all){
eval(theform).onkeypress=function(){ return restrictinput(thelimit,event,theform)}
eval(theform).onkeyup=function(){ countlimit(thelimit,event,theform)}
}
else if (ns6){
document.body.addEventListener('keypress', function(event) { restrictinput(thelimit,event,theform) }, true); 
document.body.addEventListener('keyup', function(event) { countlimit(thelimit,event,theform) }, true); 
}
}

</script>

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
		          	 <div class="lien">
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
        <form  method="post" action=""  >
        <fieldset>
    <legend>Refuser la demande: </legend>
    <legend><font color="#000066">Veuillez entrer la remarque:</font></legend>
    <p>
    <table width="476"><tr>
      <td width="346"><textarea id="remarque" name="remarque" cols="35" rows="3" ></textarea></td><td width="118"><input type="submit" name="envoyer" class="button2" value="Envoyer" /></td><td> <input type="submit" name="annuler" class="button2" value="Annuler" /></form></td>
      
     </tr></table> 
     <script>
displaylimit("","remarque",50)
</script>
   <br />
   <?php 
if (isset($_POST['envoyer'])) 
{       
		$remarque=$_POST['remarque'];
		//echo "votre Remarque est prise en compte";
		
		$req="update demande set Etat='Refusee',Remarque='$remarque' where Code_demande=$ref";
		$result=mysql_query($req) or die( mysql_error() ) ;
		header('location:gestionnaire.php');
	}
	
elseif (isset($_POST['annuler'])) 
{       
		
		
		
		header('location:gestionnaire.php');
		
	}
	mysql_close(); 
		?> 
      
      </fieldset>
     
  </form> 
        
</form> 
<br>



        
</div>
</div>
			 
  <div id="footer">
    <h6 align="center"> &copy;  ocp.com | Design by <a href="">LP2I - agadir</a></h6>
  <!-- fin de #footer --></div>
<!-- fin de #container --></div>
</body>
</html>