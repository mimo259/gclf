<?php session_start();

		$con=mysql_connect('localhost','root','');
		mysql_select_db('ocp',$con);
		$login=$_SESSION['user'];
		$se=$_SESSION['sexe'];
?>		
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- ----------------------------------------------------------------------------------------------------------------------------------->
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
	top:236px;
	left:138px;
	width:46px;
	height:146px;
	margin-left: auto;
	margin-right: auto;
}
</style>
<style type="text/css">
<style>
body{
padding:100px;
}

.btn{
	position:absolute;
	top:152px;
	left:1007px;
	width:auto;
	height:auto;
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
<script language="Javascript">
// ==================
//	Activations - Désactivations
// ==================
function GereControle(Controleur, Controle, Masquer) {
var objControleur = document.getElementById(Controleur);
var objControle = document.getElementById(Controle);
	if (Masquer=='0')
		objControle.style.visibility=(objControleur.checked==true)?'visible':'hidden';
	else
		objControle.disabled=(objControleur.checked==true)?false:true;
	return true;
}
</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../default.css" media="screen"/>
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
.gauche {
	position: absolute;
	top: 210px;
	left: 9px;
	width: 18%;
	height: 239px;
}
.droite {
	position: absolute;
	top: 131px;
	right: -109px;
	width: 292px;
	height: 304px;
}
#header img { width : 100%;}
  </style>
<script type="text/javascript">
 
    function inverse(ID, COL){
      var table = document.getElementById(ID);      
      var nom = navigator.appName;
      if (nom == 'Netscape'){
        var detail=document.getElementsByName(COL);
      } else {
        var detail=getCellByName(table,COL);
      }
      if (detail[0].style.display == ""){
        for(var i = 0; i < detail.length; ++i) detail[i].style.display = "none";
      } else {
        for(var i = 0; i < detail.length; ++i) detail[i].style.display = "";
      }
    }
	
	  function getCellByName(tab, nom){
		  var cols=new Array();
		  cellules=tab.getElementsByTagName("td");
		  for(var i = 0; i < cellules.length; ++i){
			  if(cellules[i].name==nom){
				  cols[cols.length]=cellules[i];
			  }
		  }
		  return cols;
	  }
    
  </script>
 

</head>

<body class="oneColLiqCtrHdr">
<!-- ----------------------------------------------------------------------------------------------------------------------------------->
<table class="ds_box" cellpadding="0" cellspacing="0" id="ds_conclass" style="display: none;">
<tr><td id="ds_calclass">
</td></tr>
</table>

<script type="text/javascript">
// <!-- <![CDATA[

// Project: Dynamic Date Selector (DtTvB) - 2006-03-16
// Script featured on JavaScript Kit- http://www.javascriptkit.com
// Code begin...
// Set the initial date.
var ds_i_date = new Date();
ds_c_month = ds_i_date.getMonth() + 1;
ds_c_year = ds_i_date.getFullYear();

// Get Element By Id
function ds_getel(id) {
	return document.getElementById(id);
}

// Get the left and the top of the element.
function ds_getleft(el) {
	var tmp = el.offsetLeft;
	el = el.offsetParent
	while(el) {
		tmp += el.offsetLeft;
		el = el.offsetParent;
	}
	return tmp;
}
function ds_gettop(el) {
	var tmp = el.offsetTop;
	el = el.offsetParent
	while(el) {
		tmp += el.offsetTop;
		el = el.offsetParent;
	}
	return tmp;
}

// Output Element
var ds_oe = ds_getel('ds_calclass');
// Container
var ds_ce = ds_getel('ds_conclass');

// Output Buffering
var ds_ob = ''; 
function ds_ob_clean() {
	ds_ob = '';
}
function ds_ob_flush() {
	ds_oe.innerHTML = ds_ob;
	ds_ob_clean();
}
function ds_echo(t) {
	ds_ob += t;
}

var ds_element; // Text Element...

var ds_monthnames = [
'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin',
'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre'
]; // You can translate it for your language.

var ds_daynames = [
'Dim', 'Lun', 'Mar', 'Me', 'Jeu', 'Ven', 'Sam'
]; // You can translate it for your language.

// Calendar template
function ds_template_main_above(t) {
	return '<table cellpadding="3" cellspacing="1" class="ds_tbl">'
	     + '<tr>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_py();">&lt;&lt;</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_pm();">&lt;</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_hi();" colspan="3">[Fermer]</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_nm();">&gt;</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_ny();">&gt;&gt;</td>'
		 + '</tr>'
	     + '<tr>'
		 + '<td colspan="7" class="ds_head">' + t + '</td>'
		 + '</tr>'
		 + '<tr>';
}

function ds_template_day_row(t) {
	return '<td class="ds_subhead">' + t + '</td>';
	// Define width in CSS, XHTML 1.0 Strict doesn't have width property for it.
}

function ds_template_new_week() {
	return '</tr><tr>';
}

function ds_template_blank_cell(colspan) {
	return '<td colspan="' + colspan + '"></td>'
}

function ds_template_day(d, m, y) {
	return '<td class="ds_cell" onclick="ds_onclick(' + d + ',' + m + ',' + y + ')">' + d + '</td>';
	// Define width the day row.
}

function ds_template_main_below() {
	return '</tr>'
	     + '</table>';
}

// This one draws calendar...
function ds_draw_calendar(m, y) {
	// First clean the output buffer.
	ds_ob_clean();
	// Here we go, do the header
	ds_echo (ds_template_main_above(ds_monthnames[m - 1] + ' ' + y));
	for (i = 0; i < 7; i ++) {
		ds_echo (ds_template_day_row(ds_daynames[i]));
	}
	// Make a date object.
	var ds_dc_date = new Date();
	ds_dc_date.setMonth(m - 1);
	ds_dc_date.setFullYear(y);
	ds_dc_date.setDate(1);
	if (m == 1 || m == 3 || m == 5 || m == 7 || m == 8 || m == 10 || m == 12) {
		days = 31;
	} else if (m == 4 || m == 6 || m == 9 || m == 11) {
		days = 30;
	} else {
		days = (y % 4 == 0) ? 29 : 28;
	}
	var first_day = ds_dc_date.getDay();
	var first_loop = 1;
	// Start the first week
	ds_echo (ds_template_new_week());
	// If sunday is not the first day of the month, make a blank cell...
	if (first_day != 0) {
		ds_echo (ds_template_blank_cell(first_day));
	}
	var j = first_day;
	for (i = 0; i < days; i ++) {
		// Today is sunday, make a new week.
		// If this sunday is the first day of the month,
		// we've made a new row for you already.
		if (j == 0 && !first_loop) {
			// New week!!
			ds_echo (ds_template_new_week());
		}
		// Make a row of that day!
		ds_echo (ds_template_day(i + 1, m, y));
		// This is not first loop anymore...
		first_loop = 0;
		// What is the next day?
		j ++;
		j %= 7;
	}
	// Do the footer
	ds_echo (ds_template_main_below());
	// And let's display..
	ds_ob_flush();
	// Scroll it into view.
	ds_ce.scrollIntoView();
}

// A function to show the calendar.
// When user click on the date, it will set the content of t.
function ds_sh(t) {
	// Set the element to set...
	ds_element = t;
	// Make a new date, and set the current month and year.
	var ds_sh_date = new Date();
	ds_c_month = ds_sh_date.getMonth() + 1;
	ds_c_year = ds_sh_date.getFullYear();
	// Draw the calendar
	ds_draw_calendar(ds_c_month, ds_c_year);
	// To change the position properly, we must show it first.
	ds_ce.style.display = '';
	// Move the calendar container!
	the_left = ds_getleft(t);
	the_top = ds_gettop(t) + t.offsetHeight;
	ds_ce.style.left = the_left + 'px';
	ds_ce.style.top = the_top + 'px';
	// Scroll it into view.
	ds_ce.scrollIntoView();
}

// Hide the calendar.
function ds_hi() {
	ds_ce.style.display = 'none';
}

// Moves to the next month...
function ds_nm() {
	// Increase the current month.
	ds_c_month ++;
	// We have passed December, let's go to the next year.
	// Increase the current year, and set the current month to January.
	if (ds_c_month > 12) {
		ds_c_month = 1; 
		ds_c_year++;
	}
	// Redraw the calendar.
	ds_draw_calendar(ds_c_month, ds_c_year);
}

// Moves to the previous month...
function ds_pm() {
	ds_c_month = ds_c_month - 1; // Can't use dash-dash here, it will make the page invalid.
	// We have passed January, let's go back to the previous year.
	// Decrease the current year, and set the current month to December.
	if (ds_c_month < 1) {
		ds_c_month = 12; 
		ds_c_year = ds_c_year - 1; // Can't use dash-dash here, it will make the page invalid.
	}
	// Redraw the calendar.
	ds_draw_calendar(ds_c_month, ds_c_year);
}

// Moves to the next year...
function ds_ny() {
	// Increase the current year.
	ds_c_year++;
	// Redraw the calendar.
	ds_draw_calendar(ds_c_month, ds_c_year);
}

// Moves to the previous year...
function ds_py() {
	// Decrease the current year.
	ds_c_year = ds_c_year - 1; // Can't use dash-dash here, it will make the page invalid.
	// Redraw the calendar.
	ds_draw_calendar(ds_c_month, ds_c_year);
}

// Format the date to output.
function ds_format_date(d, m, y) {
	// 2 digits month.
	m2 = '00' + m;
	m2 = m2.substr(m2.length - 2);
	// 2 digits day.
	d2 = '00' + d;
	d2 = d2.substr(d2.length - 2);
	// YYYY-MM-DD
	return y + '-' + m2 + '-' + d2;
}

// When the user clicks the day.
function ds_onclick(d, m, y) {
	// Hide the calendar.
	ds_hi();
	// Set the value of it, if we can.
	if (typeof(ds_element.value) != 'undefined') {
		ds_element.value = ds_format_date(d, m, y);
	// Maybe we want to set the HTML in it.
	} else if (typeof(ds_element.innerHTML) != 'undefined') {
		ds_element.innerHTML = ds_format_date(d, m, y);
	// I don't know how should we display it, just alert it to user.
	} else {
		alert (ds_format_date(d, m, y));
	}
}

// And here is the end.

// ]]> -->
</script>
<!-- ----------------------------------------------------------------------------------------------------------------------------------->
<div id="container">
  <div id="header">
    <img src="../header.JPG" width="1070" height="111" />
    <!-- fin de #header -->
  </div>
  <div id="content">
         <div id="l_col"> 
           <div ><font face="comic sans ms" color="#006633">Bienvenue <?php if(!empty($_SESSION['user'])) {echo "$se. $login";}else{?>
		 																<SCRIPT LANGUAGE="JavaScript">document.location.href="index.php"</SCRIPT>
           <?php } ?>
                 </font>
           </div>     
         <div class="lien"><BR />
                       <table width="177">
             <tr>
               <td width=5 bgcolor=#a5dcbd>&nbsp;</td>
               <td width="123" bgcolor=#f2f2f2>&nbsp;&nbsp;<img height=8 
                        src="bl_arrow_closed_grey.gif" 
                        width=8 border=0 />&nbsp;<a class=topnav-level2 
                        title="Rechercher la demande"  
                        href="rech_gestionaire.php">Rechercher la demande</a></td>
             </tr>
             <tr>
               <td width=5 bgcolor=#a5dcbd>&nbsp;</td>
               <td bgcolor=#f2f2f2>&nbsp;&nbsp;<img height=8 
                        src="bl_arrow_closed_grey.gif" 
                        width=8 border=0 />&nbsp;<a class=topnav-level2 
                        title="Gestion de la demande"  
                        href="gestionnaire.php">Gestion de la demande </a></td>
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
        <form name="f3" method="post" action=""  >
        <fieldset style="width:830px;">
    <legend> consulter par: </legend>
<font size="-2"><table    height="32" >
<tr bgcolor="#d4dde6" >
<td width="90" height="26" >&nbsp;
  <label for="chkb_1">Matricule</label>  <input type="checkbox" id="chkb_1" onClick="GereControle('chkb_1', 'matricule', '1');inverse('tb', 'col0');" CHECKED></td>
<td width="74"><font size="-2">&nbsp;Période
  <input type="checkbox" id="chkb_2" onClick="GereControle('chkb_2', 'date', '1');GereControle('chkb_2', 'date2', '1');inverse('tb', 'col1');" >&nbsp;</td>
<td width="114"><label for="chkb_7"><font size="-2">&nbsp;Typedemande</label>
  <input type="checkbox" id="chkb_3" onClick="GereControle('chkb_3', 'type', '1');inverse('tb', 'col2');" >&nbsp;</td>
<td width="63" height="26" >&nbsp;
  <label for="chkb_8">Etat</label>  <input type="checkbox" id="chkb_4" onClick="GereControle('chkb_4', 'etat', '1');inverse('tb', 'col3');" ></td>
<td width="69">Service
  <input type="checkbox" id="chkb_5" onClick="GereControle('chkb_5', 'service', '1');inverse('tb', 'col4');" >&nbsp;</td>

</tr></table>
<span class="btn">
<input type="submit" name="rechercher" value="Rechercher" class="button2"/>
</span></font>
<br />
<table id="tb">
  <tr bgcolor="#d4dde6">
  <td name="col0">Matricule</td>
  <td name="col1" style="display:none">Période</td>
  <td name="col2" style="display:none">Type demande</td>
  <td width="168" name="col3" style="display:none">Etat</td>
  <td width="45" name="col4" style="display:none">Service</td>
  <td width="80" name="col5" style="display:none">Gestionnaire</td></tr>
<tr>
<td   name="col0"><input type="text" name="matricule" id="matricule" size="8"></td>
<td  name="col1" style="display:none">de : 
  <input onclick="ds_sh(this);" name="date" id="date" readonly="readonly" style="cursor: text"  size="8"  disabled /><br />
  au :
  <input onclick="ds_sh(this);" name="date2" id="date2" readonly="readonly" style="cursor: text" size="8"  disabled />
  </td>
<td width="72" name="col2" style="display:none"><?php
          echo "<select id=\"type\" name=\"type\" disabled>";
              
              $sql = "SELECT Libelle FROM typedemande";
              $option = mysql_query($sql) ;        
              while($row = mysql_fetch_row($option))
                  {
                   echo "\t\t<option selected=\"selected\" value='$row[0]'>".($row[0])."</option>\n";
                  }
              echo "</select>";
        ?>  </td>
<td name="col3" style="display:none"> <select id='etat' name='etat' disabled> 
										<option value="Ouverte">Ouverte</option>
                                        <option value="En cours de traitement"> En cours de traitement</option>
                                        <option value="Cloturee">Cloturée</option> 
		 								<option value="Refusee">Refusee</option> </select></td>        
<td name="col4" style="display:none"><?php
          echo "<select id=\"service\" name=\"service\" disabled><option value=\"vide\">-- Choississez --</option>";
              
              $sql = "SELECT Libelle FROM service";
              $option = mysql_query($sql) ;        
              while($row = mysql_fetch_row($option))
                  {
                   echo "\t\t<option selected=\"selected\" value='$row[0]'>".($row[0])."</option>\n";
                  }
              echo "</select>";
        ?></td>
<td name="col5" style="display:none"><?php
          echo "<select id=\"gestionnaire\" name=\"gestionnaire\" disabled><option value=\"vide\">-- Choississez --</option>";
              
              $sql = "SELECT DISTINCT gestionnaire FROM demande";
              $option = mysql_query($sql) ;        
              while($row = mysql_fetch_row($option))
                  {
					  if($row[0]<>""){echo "\t\t<option selected=\"selected\" value='$row[0]'>".($row[0])."</option>\n";}
                   
                  }
              echo "</select>";
        ?></td>
</tr></table>
        </fieldset>
</form>
<div class="btn"></div>

<br>
    <?php 
$mat=isset($_POST['matricule'])? $_POST['matricule'] : '';
$type=isset($_POST['type'])? $_POST['type'] : '';
$periode1=isset($_POST['date'])? $_POST['date'] : '';
$periode2=isset($_POST['date2'])? $_POST['date2'] : '';
$etat=isset($_POST['etat'])? $_POST['etat'] : '';
$service=isset($_POST['service'])? $_POST['service'] : '';
$gestionnaire=isset($_POST['gestionnaire'])? $_POST['gestionnaire'] : '';


if(isset($_POST['rechercher']))
{
	
	if(empty($mat) && empty($type) && empty($periode1) && empty($periode2) && empty($etat) && empty($service) && empty($gestionnaire))
	{
			echo"plz essayer de remplir les champs";
	}
	////////////////////////////////
	
	
	////////////////////////////////
	else if(empty($mat) && empty($type) && empty($periode1) && empty($periode2) && empty($etat) && !empty($service) && empty($gestionnaire))	
	{
		
		$req=mysql_query("SELECT s.libelle,a.Matricule,a.Nom,a.Prenom,d.CodeType,d.Etat,d.DateDemande,d.DateCloture,d.gestionnaire,d.remarque FROM agents as a,demande as d,service as s where (a.Matricule=d.Matricule) and (a.Code_service=s.Code_service) and s.libelle='$service'") or die (mysql_error());
		   if(mysql_num_rows($req)==0)
		  {
		        echo "aucun demande ne correspond à cet matricule";
		  }
		else
		  {   
			    echo "<table border=0><tr  bgcolor='#aacc19'><td>Service</td><td>Matricule</td><td>Nom</td><td>Prénom</td><td>TypeDemande</td><td>Etat</td><td>DateDemande</td><td>DateCloture</td><td>Responsable</td><td>Remarque</td></tr>";
				while($ligne=mysql_fetch_row($req))
				  {	echo "<tr align='center' bgcolor='#e2e2e2'><td> $ligne[0] </td><td> $ligne[1] </td><td> $ligne[2] </td><td> $ligne[3] </td><td> $ligne[4] </td><td> $ligne[5]</td><td> $ligne[6] </td><td>"; if($ligne[7]==''){echo "NULL";}else{echo $ligne[7];} echo"</td><td> $ligne[8]</td><td> $ligne[9]</td></tr>";		
				  } 
					echo "</table>";
		  }
		  
	}///////////////////////////////echo "<td>";if($ligne[7]==''){echo "NULL";}else{echo $ligne[7];}echo "</td>
	////////////////////////////////
	else if(empty($mat) && empty($type) && empty($periode1) && empty($periode2) && !empty($etat) && empty($service) && empty($gestionnaire))	
	{
		$req=mysql_query("SELECT s.libelle,a.Matricule,a.Nom,a.Prenom,d.CodeType,d.Etat,d.DateDemande,d.DateCloture,d.gestionnaire,d.remarque FROM agents as a,demande as d,service as s where (a.Matricule=d.Matricule) and (a.Code_service=s.Code_service) and d.Etat='$etat'") or die (mysql_error());
		   if(mysql_num_rows($req)==0)
		  {
		        echo "aucun demande ne correspond à cet matricule";
		  }
		else
		  {   
			     echo "<table border=0><tr  bgcolor='#aacc19'><td>Service</td><td>Matricule</td><td>Nom</td><td>Prénom</td><td>TypeDemande</td><td>Etat</td><td>DateDemande</td><td>DateCloture</td><td>Responsable</td><td>Remarque</td></tr>";
				while($ligne=mysql_fetch_row($req))
				  {	echo "<tr align='center' bgcolor='#e2e2e2'><td> $ligne[0] </td><td> $ligne[1] </td><td> $ligne[2] </td><td> $ligne[3] </td><td> $ligne[4] </td><td> $ligne[5]</td><td> $ligne[6] </td><td>"; if($ligne[7]==''){echo "NULL";}else{echo $ligne[7];} echo"</td><td> $ligne[8]</td><td> $ligne[9]</td></tr>";		
				  } 
					echo "</table>";
		  }
		  
	}///////////////////////////////
	
	else if(empty($mat) && empty($type) && empty($periode1) && empty($periode2) && !empty($etat) && !empty($service) && empty($gestionnaire))	
	{
		$req=mysql_query("SELECT s.libelle,a.Matricule,a.Nom,a.Prenom,d.CodeType,d.Etat,d.DateDemande,d.DateCloture,d.gestionnaire,d.remarque FROM agents as a,demande as d,service as s where (a.Matricule=d.Matricule) and (a.Code_service=s.Code_service) and d.Etat='$etat' and s.libelle='$service'") or die (mysql_error());
		   if(mysql_num_rows($req)==0)
		  {
		        echo "aucun demande ne correspond à cet matricule";
		  }
		else
		  {   
			    echo "<table border=0><tr  bgcolor='#aacc19'><td>Service</td><td>Matricule</td><td>Nom</td><td>Prénom</td><td>TypeDemande</td><td>Etat</td><td>DateDemande</td><td>DateCloture</td><td>Responsable</td><td>Remarque</td></tr>";
				while($ligne=mysql_fetch_row($req))
				  {	echo "<tr align='center' bgcolor='#e2e2e2'><td> $ligne[0] </td><td> $ligne[1] </td><td> $ligne[2] </td><td> $ligne[3] </td><td> $ligne[4] </td><td> $ligne[5]</td><td> $ligne[6] </td><td>"; if($ligne[7]==''){echo "NULL";}else{echo $ligne[7];} echo"</td><td> $ligne[8]</td><td> $ligne[9]</td></tr>";		
				  } 
					echo "</table>";
		  }	  
		  
	}///////////////////////////////
	
	////////////////////////////////
	else if(empty($mat) && empty($type) && !empty($periode1) && !empty($periode2) && empty($etat) && empty($service) && empty($gestionnaire))	
	{
		$req=mysql_query("SELECT s.libelle,a.Matricule,a.Nom,a.Prenom,d.CodeType,d.Etat,d.DateDemande,d.DateCloture,d.gestionnaire,d.remarque FROM agents as a,demande as d,service as s where (a.Matricule=d.Matricule) and (a.Code_service=s.Code_service) and d.DateDemande between '$periode1' and '$periode2'") or die (mysql_error());
		   if(mysql_num_rows($req)==0)
		  {
		        echo "aucun demande ne correspond à cet matricule";
		  }
		else
		  {   
			     echo "<table border=0><tr  bgcolor='#aacc19'><td>Service</td><td>Matricule</td><td>Nom</td><td>Prénom</td><td>TypeDemande</td><td>Etat</td><td>DateDemande</td><td>DateCloture</td><td>Responsable</td><td>Remarque</td></tr>";
				while($ligne=mysql_fetch_row($req))
				  {	echo "<tr align='center' bgcolor='#e2e2e2'><td> $ligne[0] </td><td> $ligne[1] </td><td> $ligne[2] </td><td> $ligne[3] </td><td> $ligne[4] </td><td> $ligne[5]</td><td> $ligne[6] </td><td>"; if($ligne[7]==''){echo "NULL";}else{echo $ligne[7];} echo"</td><td> $ligne[8]</td><td> $ligne[9]</td></tr>";		
				  } 
					echo "</table>";
		  }	  
		  
	}///////////////////////////////
	////////////////////////
	////////////////////////////////
	else if(empty($mat) && empty($type) && !empty($periode1) && !empty($periode2) && empty($etat) && !empty($service) && empty($gestionnaire))	
	{
		$req=mysql_query("SELECT s.libelle,a.Matricule,a.Nom,a.Prenom,d.CodeType,d.Etat,d.DateDemande,d.DateCloture,d.gestionnaire,d.remarque FROM agents as a,demande as d,service as s where (a.Matricule=d.Matricule) and (a.Code_service=s.Code_service) and d.DateDemande between '$periode1' and '$periode2' and s.libelle='$service'") or die (mysql_error());
		   if(mysql_num_rows($req)==0)
		  {
		        echo "aucun demande ne correspond à cet matricule";
		  }
		else
		  {   
			     echo "<table border=0><tr  bgcolor='#aacc19'><td>Service</td><td>Matricule</td><td>Nom</td><td>Prénom</td><td>TypeDemande</td><td>Etat</td><td>DateDemande</td><td>DateCloture</td><td>Responsable</td><td>Remarque</td></tr>";
				while($ligne=mysql_fetch_row($req))
				  {	echo "<tr align='center' bgcolor='#e2e2e2'><td> $ligne[0] </td><td> $ligne[1] </td><td> $ligne[2] </td><td> $ligne[3] </td><td> $ligne[4] </td><td> $ligne[5]</td><td> $ligne[6] </td><td>"; if($ligne[7]==''){echo "NULL";}else{echo $ligne[7];} echo"</td><td> $ligne[8]</td><td> $ligne[9]</td></tr>";		
				  } 
					echo "</table>";
		  }	  
		  
	}///////////////////////////////
	////////////////////////////////
	/////////////////////////
	////////////////////////////////
	else if(empty($mat) && empty($type) && !empty($periode1) && !empty($periode2) && !empty($etat) && empty($service) && empty($gestionnaire))	
	{
		$req=mysql_query("SELECT s.libelle,a.Matricule,a.Nom,a.Prenom,d.CodeType,d.Etat,d.DateDemande,d.DateCloture,d.gestionnaire,d.remarque FROM agents as a,demande as d,service as s where (a.Matricule=d.Matricule) and (a.Code_service=s.Code_service) and d.DateDemande between '$periode1' and '$periode2' and d.Etat='$etat'") or die (mysql_error());
		   if(mysql_num_rows($req)==0)
		  {
		        echo "aucun demande ne correspond à cet matricule";
		  }
		else
		  {   
			    echo "<table border=0><tr  bgcolor='#aacc19'><td>Service</td><td>Matricule</td><td>Nom</td><td>Prénom</td><td>TypeDemande</td><td>Etat</td><td>DateDemande</td><td>DateCloture</td><td>Responsable</td><td>Remarque</td></tr>";
				while($ligne=mysql_fetch_row($req))
				  {	echo "<tr align='center' bgcolor='#e2e2e2'><td> $ligne[0] </td><td> $ligne[1] </td><td> $ligne[2] </td><td> $ligne[3] </td><td> $ligne[4] </td><td> $ligne[5]</td><td> $ligne[6] </td><td>"; if($ligne[7]==''){echo "NULL";}else{echo $ligne[7];} echo"</td><td> $ligne[8]</td><td> $ligne[9]</td></tr>";		
				  } 
					echo "</table>";
		  }	  
		  
	}///////////////////////////////
	////////////////////////////////
	/////////////////
	////////////////////////////////
	else if(empty($mat) && empty($type) && !empty($periode1) && !empty($periode2) && !empty($etat) && !empty($service) && empty($gestionnaire))	
	{
		$req=mysql_query("SELECT s.libelle,a.Matricule,a.Nom,a.Prenom,d.CodeType,d.Etat,d.DateDemande,d.DateCloture,d.gestionnaire,d.remarque FROM agents as a,demande as d,service as s where (a.Matricule=d.Matricule) and (a.Code_service=s.Code_service) and d.DateDemande between '$periode1' and '$periode2' and d.Etat='$etat' and s.libelle='$service'") or die (mysql_error());
		   if(mysql_num_rows($req)==0)
		  {
		        echo "aucun demande ne correspond à cet matricule";
		  }
		else
		  {   
			     echo "<table border=0><tr  bgcolor='#aacc19'><td>Service</td><td>Matricule</td><td>Nom</td><td>Prénom</td><td>TypeDemande</td><td>Etat</td><td>DateDemande</td><td>DateCloture</td><td>Responsable</td><td>Remarque</td></tr>";
				while($ligne=mysql_fetch_row($req))
				  {	echo "<tr align='center' bgcolor='#e2e2e2'><td> $ligne[0] </td><td> $ligne[1] </td><td> $ligne[2] </td><td> $ligne[3] </td><td> $ligne[4] </td><td> $ligne[5]</td><td> $ligne[6] </td><td>"; if($ligne[7]==''){echo "NULL";}else{echo $ligne[7];} echo"</td><td> $ligne[8]</td><td> $ligne[9]</td></tr>";		
				  } 
					echo "</table>";
		  }	
	}///////////////////////////////
	////////////////////////////////
	//////////////////////////////
	////////////////////////////////
	else if(empty($mat) && !empty($type) && empty($periode1) && empty($periode2) && empty($etat) && empty($service) && empty($gestionnaire))	
	{
		$req=mysql_query("SELECT  s.libelle,a.Matricule,a.Nom,a.Prenom,d.CodeType,d.Etat,d.DateDemande,d.DateCloture,d.gestionnaire,d.remarque FROM agents as a,demande as d,service as s where (a.Matricule=d.Matricule) and (a.Code_service=s.Code_service) and d.CodeType='$type'") or die (mysql_error());
		   if(mysql_num_rows($req)==0)
		  {
		        echo "aucun demande ne correspond à cet matricule";
		  }
		else
		  {   
			     echo "<table border=0><tr  bgcolor='#aacc19'><td>Service</td><td>Matricule</td><td>Nom</td><td>Prénom</td><td>TypeDemande</td><td>Etat</td><td>DateDemande</td><td>DateCloture</td><td>Responsable</td><td>Remarque</td></tr>";
				while($ligne=mysql_fetch_row($req))
				  {	echo "<tr align='center' bgcolor='#e2e2e2'><td> $ligne[0] </td><td> $ligne[1] </td><td> $ligne[2] </td><td> $ligne[3] </td><td> $ligne[4] </td><td> $ligne[5]</td><td> $ligne[6] </td><td>"; if($ligne[7]==''){echo "NULL";}else{echo $ligne[7];} echo"</td><td> $ligne[8]</td><td> $ligne[9]</td></tr>";		
				  } 
					echo "</table>";
		  }	
	}///////////////////////////////
	
	////////////////////////////////
	else if(empty($mat) && !empty($type) && empty($periode1) && empty($periode2) && empty($etat) && !empty($service) && empty($gestionnaire))	
	{
		$req=mysql_query("SELECT s.libelle,a.Matricule,a.Nom,a.Prenom,d.CodeType,d.Etat,d.DateDemande,d.DateCloture,d.gestionnaire,d.remarque FROM agents as a,demande as d,service as s where (a.Matricule=d.Matricule) and (a.Code_service=s.Code_service) and d.CodeType='$type' and s.libelle='$service'") or die (mysql_error());
		   if(mysql_num_rows($req)==0)
		  {
		        echo "aucun demande ne correspond à cet matricule";
		  }
		else
		  {   
			     echo "<table border=0><tr  bgcolor='#aacc19'><td>Service</td><td>Matricule</td><td>Nom</td><td>Prénom</td><td>TypeDemande</td><td>Etat</td><td>DateDemande</td><td>DateCloture</td><td>Responsable</td><td>Remarque</td></tr>";
				while($ligne=mysql_fetch_row($req))
				  {	echo "<tr align='center' bgcolor='#e2e2e2'><td> $ligne[0] </td><td> $ligne[1] </td><td> $ligne[2] </td><td> $ligne[3] </td><td> $ligne[4] </td><td> $ligne[5]</td><td> $ligne[6] </td><td>"; if($ligne[7]==''){echo "NULL";}else{echo $ligne[7];} echo"</td><td> $ligne[8]</td><td> $ligne[9]</td></tr>";		
				  } 
					echo "</table>";
		  }	
	}///////////////////////////////
	////////////////////////////////
	///////////////////////////
	////////////////////////////////
	else if(empty($mat) && !empty($type) && empty($periode1) && empty($periode2) && !empty($etat) && empty($service) && empty($gestionnaire))	
	{
		$req=mysql_query("SELECT s.libelle,a.Matricule,a.Nom,a.Prenom,d.CodeType,d.Etat,d.DateDemande,d.DateCloture,d.gestionnaire,d.remarque FROM agents as a,demande as d,service as s where (a.Matricule=d.Matricule) and (a.Code_service=s.Code_service) and d.CodeType='$type' and d.Etat='$etat'") or die (mysql_error());
		   if(mysql_num_rows($req)==0)
		  {
		        echo "aucun demande ne correspond à cet matricule";
		  }
		else
		  {   
			     echo "<table border=0><tr  bgcolor='#aacc19'><td>Service</td><td>Matricule</td><td>Nom</td><td>Prénom</td><td>TypeDemande</td><td>Etat</td><td>DateDemande</td><td>DateCloture</td><td>Responsable</td><td>Remarque</td></tr>";
				while($ligne=mysql_fetch_row($req))
				  {	echo "<tr align='center' bgcolor='#e2e2e2'><td> $ligne[0] </td><td> $ligne[1] </td><td> $ligne[2] </td><td> $ligne[3] </td><td> $ligne[4] </td><td> $ligne[5]</td><td> $ligne[6] </td><td>"; if($ligne[7]==''){echo "NULL";}else{echo $ligne[7];} echo"</td><td> $ligne[8]</td><td> $ligne[9]</td></tr>";		
				  } 
					echo "</table>";
		  }	
	}///////////////////////////////
	////////////////////////////////
	//////////////////////////
	////////////////////////////////
	else if(empty($mat) && !empty($type) && empty($periode1) && empty($periode2) && !empty($etat) && !empty($service) && empty($gestionnaire))	
	{
		$req=mysql_query("SELECT s.libelle,a.Matricule,a.Nom,a.Prenom,d.CodeType,d.Etat,d.DateDemande,d.DateCloture,d.gestionnaire,d.remarque FROM agents as a,demande as d,service as s where (a.Matricule=d.Matricule) and (a.Code_service=s.Code_service) and d.CodeType='$type' and d.Etat='$etat' and s.libelle='$service'  ") or die (mysql_error());
		   if(mysql_num_rows($req)==0)
		  {
		        echo "aucun demande ne correspond à cet matricule";
		  }
		else
		  {   
			     echo "<table border=0><tr  bgcolor='#aacc19'><td>Service</td><td>Matricule</td><td>Nom</td><td>Prénom</td><td>TypeDemande</td><td>Etat</td><td>DateDemande</td><td>DateCloture</td><td>Responsable</td><td>Remarque</td></tr>";
				while($ligne=mysql_fetch_row($req))
				  {	echo "<tr align='center' bgcolor='#e2e2e2'><td> $ligne[0] </td><td> $ligne[1] </td><td> $ligne[2] </td><td> $ligne[3] </td><td> $ligne[4] </td><td> $ligne[5]</td><td> $ligne[6] </td><td>"; if($ligne[7]==''){echo "NULL";}else{echo $ligne[7];} echo"</td><td> $ligne[8]</td><td> $ligne[9]</td></tr>";		
				  } 
					echo "</table>";
		  }
	}///////////////////////////////
	////////////////////////////////
	///////////////////////////
	////////////////////////////////
	else if(empty($mat) && !empty($type) && !empty($periode1) && !empty($periode2) && empty($etat) && empty($service) && empty($gestionnaire))	
	{
		$req=mysql_query("SELECT s.libelle,a.Matricule,a.Nom,a.Prenom,d.CodeType,d.Etat,d.DateDemande,d.DateCloture,d.gestionnaire,d.remarque FROM agents as a,demande as d,service as s where (a.Matricule=d.Matricule) and (a.Code_service=s.Code_service) and d.CodeType='$type' and d.DateDemande between '$periode1' and '$periode2'") or die (mysql_error());
		   if(mysql_num_rows($req)==0)
		  {
		        echo "aucun demande ne correspond à cet matricule";
		  }
		else
		  {   
			     echo "<table border=0><tr  bgcolor='#aacc19'><td>Service</td><td>Matricule</td><td>Nom</td><td>Prénom</td><td>TypeDemande</td><td>Etat</td><td>DateDemande</td><td>DateCloture</td><td>Responsable</td><td>Remarque</td></tr>";
				while($ligne=mysql_fetch_row($req))
				  {	echo "<tr align='center' bgcolor='#e2e2e2'><td> $ligne[0] </td><td> $ligne[1] </td><td> $ligne[2] </td><td> $ligne[3] </td><td> $ligne[4] </td><td> $ligne[5]</td><td> $ligne[6] </td><td>"; if($ligne[7]==''){echo "NULL";}else{echo $ligne[7];} echo"</td><td> $ligne[8]</td><td> $ligne[9]</td></tr>";		
				  } 
					echo "</table>";
		  }
	}///////////////////////////////
	////////////////////////////////
	/////////////////////////
	////////////////////////////////
	else if(empty($mat) && !empty($type) && !empty($periode1) && !empty($periode2) && empty($etat) && !empty($service) && empty($gestionnaire))	
	{
		$req=mysql_query("SELECT s.libelle,a.Matricule,a.Nom,a.Prenom,d.CodeType,d.Etat,d.DateDemande,d.DateCloture,d.gestionnaire,d.remarque FROM agents as a,demande as d,service as s where (a.Matricule=d.Matricule) and (a.Code_service=s.Code_service) and d.CodeType='$type' and d.DateDemande between '$periode1' and '$periode2' and s.libelle='$service'") or die (mysql_error());
		   if(mysql_num_rows($req)==0)
		  {
		        echo "aucun demande ne correspond à cet matricule";
		  }
		else
		  {   
			     echo "<table border=0><tr  bgcolor='#aacc19'><td>Service</td><td>Matricule</td><td>Nom</td><td>Prénom</td><td>TypeDemande</td><td>Etat</td><td>DateDemande</td><td>DateCloture</td><td>Responsable</td><td>Remarque</td></tr>";
				while($ligne=mysql_fetch_row($req))
				  {	echo "<tr align='center' bgcolor='#e2e2e2'><td> $ligne[0] </td><td> $ligne[1] </td><td> $ligne[2] </td><td> $ligne[3] </td><td> $ligne[4] </td><td> $ligne[5]</td><td> $ligne[6] </td><td>"; if($ligne[7]==''){echo "NULL";}else{echo $ligne[7];} echo"</td><td> $ligne[8]</td><td> $ligne[9]</td></tr>";		
				  } 
					echo "</table>";
		  }
	}///////////////////////////////
	////////////////////////////////
	//////////////////////////
	////////////////////////////////
	else if(empty($mat) && !empty($type) && !empty($periode1) && !empty($periode2) && !empty($etat) && empty($service) && empty($gestionnaire))	
	{
		$req=mysql_query("SELECT s.libelle,a.Matricule,a.Nom,a.Prenom,d.CodeType,d.Etat,d.DateDemande,d.DateCloture,d.gestionnaire,d.remarque FROM agents as a,demande as d,service as s where (a.Matricule=d.Matricule) and (a.Code_service=s.Code_service) and d.CodeType='$type' and d.DateDemande between '$periode1' and '$periode2' and d.Etat='$etat'") or die (mysql_error());
		   if(mysql_num_rows($req)==0)
		  {
		        echo "aucun demande ne correspond à cet matricule";
		  }
		else
		  {   
			     echo "<table border=0><tr  bgcolor='#aacc19'><td>Service</td><td>Matricule</td><td>Nom</td><td>Prénom</td><td>TypeDemande</td><td>Etat</td><td>DateDemande</td><td>DateCloture</td><td>Responsable</td><td>Remarque</td></tr>";
				while($ligne=mysql_fetch_row($req))
				  {	echo "<tr align='center' bgcolor='#e2e2e2'><td> $ligne[0] </td><td> $ligne[1] </td><td> $ligne[2] </td><td> $ligne[3] </td><td> $ligne[4] </td><td> $ligne[5]</td><td> $ligne[6] </td><td>"; if($ligne[7]==''){echo "NULL";}else{echo $ligne[7];} echo"</td><td> $ligne[8]</td><td> $ligne[9]</td></tr>";		
				  } 
					echo "</table>";
		  }
	}///////////////////////////////
	////////////////////////////////
	////////////////////////////
	////////////////////////////////
	else if(empty($mat) && !empty($type) && !empty($periode1) && !empty($periode2) && !empty($etat) && !empty($service) && empty($gestionnaire))	
	{
		$req=mysql_query("SELECT s.libelle,a.Matricule,a.Nom,a.Prenom,d.CodeType,d.Etat,d.DateDemande,d.DateCloture,d.gestionnaire,d.remarque FROM agents as a,demande as d,service as s where (a.Matricule=d.Matricule) and (a.Code_service=s.Code_service) and d.CodeType='$type' and d.DateDemande between '$periode1' and '$periode2' and d.Etat='$etat' and s.libelle='$service'  ") or die (mysql_error());
		   if(mysql_num_rows($req)==0)
		  {
		        echo "aucun demande ne correspond à cet matricule";
		  }
		else
		  {   
			     echo "<table border=0><tr  bgcolor='#aacc19'><td>Service</td><td>Matricule</td><td>Nom</td><td>Prénom</td><td>TypeDemande</td><td>Etat</td><td>DateDemande</td><td>DateCloture</td><td>Responsable</td><td>Remarque</td></tr>";
				while($ligne=mysql_fetch_row($req))
				  {	echo "<tr align='center' bgcolor='#e2e2e2'><td> $ligne[0] </td><td> $ligne[1] </td><td> $ligne[2] </td><td> $ligne[3] </td><td> $ligne[4] </td><td> $ligne[5]</td><td> $ligne[6] </td><td>"; if($ligne[7]==''){echo "NULL";}else{echo $ligne[7];} echo"</td><td> $ligne[8]</td><td> $ligne[9]</td></tr>";		
				  } 
					echo "</table>";
		  }
	}///////////////////////////////
	////////////////////////////////
	/////////////////////////
	////////////////////////////////
	else if(!empty($mat) && empty($type) && empty($periode1) && empty($periode2) && empty($etat) && empty($service) && empty($gestionnaire))	
	{
		$req=mysql_query("SELECT s.libelle,a.Matricule,a.Nom,a.Prenom,d.CodeType,d.Etat,d.DateDemande,d.DateCloture,d.gestionnaire,d.remarque FROM agents as a,demande as d,service as s where (a.Matricule=d.Matricule) and (a.Code_service=s.Code_service) and a.Matricule='$mat'  ") or die (mysql_error());
		   if(mysql_num_rows($req)==0)
		  {
		        echo "aucun demande ne correspond à cet matricule";
		  }
		else
		  {   
			    echo "<table border=0><tr  bgcolor='#aacc19'><td>Service</td><td>Matricule</td><td>Nom</td><td>Prénom</td><td>TypeDemande</td><td>Etat</td><td>DateDemande</td><td>DateCloture</td><td>Responsable</td><td>Remarque</td></tr>";
				while($ligne=mysql_fetch_row($req))
				  {	echo "<tr align='center' bgcolor='#e2e2e2'><td> $ligne[0] </td><td> $ligne[1] </td><td> $ligne[2] </td><td> $ligne[3] </td><td> $ligne[4] </td><td> $ligne[5]</td><td> $ligne[6] </td><td>"; if($ligne[7]==''){echo "NULL";}else{echo $ligne[7];} echo"</td><td> $ligne[8]</td><td> $ligne[9]</td></tr>";		
				  } 
					echo "</table>";
		  }
	}///////////////////////////////
	////////////////////////////////
	
	////////////////////////////
	////////////////////////////////
	else if(!empty($mat) && empty($type) && empty($periode1) && empty($periode2) && empty($etat) && !empty($service) && empty($gestionnaire))	
	{
		$req=mysql_query("SELECT s.libelle,a.Matricule,a.Nom,a.Prenom,d.CodeType,d.Etat,d.DateDemande,d.DateCloture,d.gestionnaire,d.remarque FROM agents as a,demande as d,service as s where (a.Matricule=d.Matricule) and (a.Code_service=s.Code_service) and a.Matricule='$mat' and s.libelle='$service'") or die (mysql_error());
		   if(mysql_num_rows($req)==0)
		  {
		        echo "aucun demande ne correspond à cet matricule";
		  }
		else
		  {   
			     echo "<table border=0><tr  bgcolor='#aacc19'><td>Service</td><td>Matricule</td><td>Nom</td><td>Prénom</td><td>TypeDemande</td><td>Etat</td><td>DateDemande</td><td>DateCloture</td><td>Responsable</td><td>Remarque</td></tr>";
				while($ligne=mysql_fetch_row($req))
				  {	echo "<tr align='center' bgcolor='#e2e2e2'><td> $ligne[0] </td><td> $ligne[1] </td><td> $ligne[2] </td><td> $ligne[3] </td><td> $ligne[4] </td><td> $ligne[5]</td><td> $ligne[6] </td><td>"; if($ligne[7]==''){echo "NULL";}else{echo $ligne[7];} echo"</td><td> $ligne[8]</td><td> $ligne[9]</td></tr>";		
				  } 
					echo "</table>";
		  }
	}///////////////////////////////
	////////////////////////////////
	//////////////////////////
	////////////////////////////////
	else if(!empty($mat) && empty($type) && empty($periode1) && empty($periode2) && !empty($etat) && empty($service) && empty($gestionnaire))	
	{
		$req=mysql_query("SELECT s.libelle,a.Matricule,a.Nom,a.Prenom,d.CodeType,d.Etat,d.DateDemande,d.DateCloture,d.gestionnaire,d.remarque FROM agents as a,demande as d,service as s where (a.Matricule=d.Matricule) and (a.Code_service=s.Code_service) and a.Matricule='$mat' and d.Etat='$etat' ") or die (mysql_error());
		   if(mysql_num_rows($req)==0)
		  {
		        echo "aucun demande ne correspond à cet matricule";
		  }
		else
		  {   
			     echo "<table border=0><tr  bgcolor='#aacc19'><td>Service</td><td>Matricule</td><td>Nom</td><td>Prénom</td><td>TypeDemande</td><td>Etat</td><td>DateDemande</td><td>DateCloture</td><td>Responsable</td><td>Remarque</td></tr>";
				while($ligne=mysql_fetch_row($req))
				  {	echo "<tr align='center' bgcolor='#e2e2e2'><td> $ligne[0] </td><td> $ligne[1] </td><td> $ligne[2] </td><td> $ligne[3] </td><td> $ligne[4] </td><td> $ligne[5]</td><td> $ligne[6] </td><td>"; if($ligne[7]==''){echo "NULL";}else{echo $ligne[7];} echo"</td><td> $ligne[8]</td><td> $ligne[9]</td></tr>";		
				  } 
					echo "</table>";
		  }
	}///////////////////////////////
	////////////////////////////////
	///////////////////////////
	////////////////////////////////
	else if(!empty($mat) && empty($type) && empty($periode1) && empty($periode2) && !empty($etat) && !empty($service) && empty($gestionnaire))	
	{
		$req=mysql_query("SELECT s.libelle,a.Matricule,a.Nom,a.Prenom,d.CodeType,d.Etat,d.DateDemande,d.DateCloture,d.gestionnaire,d.remarque FROM agents as a,demande as d,service as s where (a.Matricule=d.Matricule) and (a.Code_service=s.Code_service) and a.Matricule='$mat' and d.Etat='$etat' and s.libelle='$service'") or die (mysql_error());
		   if(mysql_num_rows($req)==0)
		  {
		        echo "aucun demande ne correspond à cet matricule";
		  }
		else
		  {   
			     echo "<table border=0><tr  bgcolor='#aacc19'><td>Service</td><td>Matricule</td><td>Nom</td><td>Prénom</td><td>TypeDemande</td><td>Etat</td><td>DateDemande</td><td>DateCloture</td><td>Responsable</td><td>Remarque</td></tr>";
				while($ligne=mysql_fetch_row($req))
				  {	echo "<tr align='center' bgcolor='#e2e2e2'><td> $ligne[0] </td><td> $ligne[1] </td><td> $ligne[2] </td><td> $ligne[3] </td><td> $ligne[4] </td><td> $ligne[5]</td><td> $ligne[6] </td><td>"; if($ligne[7]==''){echo "NULL";}else{echo $ligne[7];} echo"</td><td> $ligne[8]</td><td> $ligne[9]</td></tr>";		
				  } 
					echo "</table>";
		  }
	}///////////////////////////////
	////////////////////////////////
	///////////////////////////
	////////////////////////////////
	else if(!empty($mat) && empty($type) && !empty($periode1) && !empty($periode2) && empty($etat) && empty($service) && empty($gestionnaire))	
	{
		$req=mysql_query("SELECT s.libelle,a.Matricule,a.Nom,a.Prenom,d.CodeType,d.Etat,d.DateDemande,d.DateCloture,d.gestionnaire,d.remarque FROM agents as a,demande as d,service as s where (a.Matricule=d.Matricule) and (a.Code_service=s.Code_service) and a.Matricule='$mat' and d.DateDemande between '$periode1' and '$periode2' ") or die (mysql_error());
		   if(mysql_num_rows($req)==0)
		  {
		        echo "aucun demande ne correspond à cet matricule";
		  }
		else
		  {   
			    echo "<table border=0><tr  bgcolor='#aacc19'><td>Service</td><td>Matricule</td><td>Nom</td><td>Prénom</td><td>TypeDemande</td><td>Etat</td><td>DateDemande</td><td>DateCloture</td><td>Responsable</td><td>Remarque</td></tr>";
				while($ligne=mysql_fetch_row($req))
				  {	echo "<tr align='center' bgcolor='#e2e2e2'><td> $ligne[0] </td><td> $ligne[1] </td><td> $ligne[2] </td><td> $ligne[3] </td><td> $ligne[4] </td><td> $ligne[5]</td><td> $ligne[6] </td><td>"; if($ligne[7]==''){echo "NULL";}else{echo $ligne[7];} echo"</td><td> $ligne[8]</td><td> $ligne[9]</td></tr>";		
				  } 
					echo "</table>";
		  }
	}///////////////////////////////		
	///////////////////////////
	else if(!empty($mat) && empty($type) && !empty($periode1) && !empty($periode2) && empty($etat) && !empty($service) && empty($gestionnaire))	
	{
		$req=mysql_query("SELECT s.libelle,a.Matricule,a.Nom,a.Prenom,d.CodeType,d.Etat,d.DateDemande,d.DateCloture,d.gestionnaire,d.remarque FROM agents as a,demande as d,service as s where (a.Matricule=d.Matricule) and (a.Code_service=s.Code_service) and a.Matricule='$mat' and d.DateDemande between '$periode1' and '$periode2' and s.libelle='$service'") or die (mysql_error());
		   if(mysql_num_rows($req)==0)
		  {
		        echo "aucun demande ne correspond à cet matricule";
		  }
		else
		  {   
			     echo "<table border=0><tr  bgcolor='#aacc19'><td>Service</td><td>Matricule</td><td>Nom</td><td>Prénom</td><td>TypeDemande</td><td>Etat</td><td>DateDemande</td><td>DateCloture</td><td>Responsable</td><td>Remarque</td></tr>";
				while($ligne=mysql_fetch_row($req))
				  {	echo "<tr align='center' bgcolor='#e2e2e2'><td> $ligne[0] </td><td> $ligne[1] </td><td> $ligne[2] </td><td> $ligne[3] </td><td> $ligne[4] </td><td> $ligne[5]</td><td> $ligne[6] </td><td>"; if($ligne[7]==''){echo "NULL";}else{echo $ligne[7];} echo"</td><td> $ligne[8]</td><td> $ligne[9]</td></tr>";		
				  } 
					echo "</table>";
		  }
	}///////////////////////////////
	///////////////////////////
	else if(!empty($mat) && empty($type) && !empty($periode1) && !empty($periode2) && !empty($etat) && empty($service) && empty($gestionnaire))	
	{
		$req=mysql_query("SELECT s.libelle,a.Matricule,a.Nom,a.Prenom,d.CodeType,d.Etat,d.DateDemande,d.DateCloture,d.gestionnaire,d.remarque FROM agents as a,demande as d,service as s where (a.Matricule=d.Matricule) and (a.Code_service=s.Code_service) and a.Matricule='$mat' and d.DateDemande between '$periode1' and '$periode2' and d.Etat='$etat' ") or die (mysql_error());
		   if(mysql_num_rows($req)==0)
		  {
		        echo "aucun demande ne correspond à cet matricule";
		  }
		else
		  {   
			     echo "<table border=0><tr  bgcolor='#aacc19'><td>Service</td><td>Matricule</td><td>Nom</td><td>Prénom</td><td>TypeDemande</td><td>Etat</td><td>DateDemande</td><td>DateCloture</td><td>Responsable</td><td>Remarque</td></tr>";
				while($ligne=mysql_fetch_row($req))
				  {	echo "<tr align='center' bgcolor='#e2e2e2'><td> $ligne[0] </td><td> $ligne[1] </td><td> $ligne[2] </td><td> $ligne[3] </td><td> $ligne[4] </td><td> $ligne[5]</td><td> $ligne[6] </td><td>"; if($ligne[7]==''){echo "NULL";}else{echo $ligne[7];} echo"</td><td> $ligne[8]</td><td> $ligne[9]</td></tr>";		
				  } 
					echo "</table>";
		  }
	}///////////////////////////////
	///////////////////////////
	else if(!empty($mat) && empty($type) && !empty($periode1) && !empty($periode2) && !empty($etat) && !empty($service) && empty($gestionnaire))	
	{
		$req=mysql_query("SELECT s.libelle,a.Matricule,a.Nom,a.Prenom,d.CodeType,d.Etat,d.DateDemande,d.DateCloture,d.gestionnaire,d.remarque FROM agents as a,demande as d,service as s where (a.Matricule=d.Matricule) and (a.Code_service=s.Code_service) and a.Matricule='$mat' and d.DateDemande between '$periode1' and '$periode2' and d.Etat='$etat' and s.libelle='$service'") or die (mysql_error());
		   if(mysql_num_rows($req)==0)
		  {
		        echo "aucun demande ne correspond à cet matricule";
		  }
		else
		  {   
			    echo "<table border=0><tr  bgcolor='#aacc19'><td>Service</td><td>Matricule</td><td>Nom</td><td>Prénom</td><td>TypeDemande</td><td>Etat</td><td>DateDemande</td><td>DateCloture</td><td>Responsable</td><td>Remarque</td></tr>";
				while($ligne=mysql_fetch_row($req))
				  {	echo "<tr align='center' bgcolor='#e2e2e2'><td> $ligne[0] </td><td> $ligne[1] </td><td> $ligne[2] </td><td> $ligne[3] </td><td> $ligne[4] </td><td> $ligne[5]</td><td> $ligne[6] </td><td>"; if($ligne[7]==''){echo "NULL";}else{echo $ligne[7];} echo"</td><td> $ligne[8]</td><td> $ligne[9]</td></tr>";		
				  } 
					echo "</table>";
		  }
	}///////////////////////////////
	////////////////////////		
	 else if(!empty($mat) && !empty($type) && empty($periode1) && empty($periode2) && empty($etat) && empty($service) && empty($gestionnaire))	
	{
		$req=mysql_query("SELECT s.libelle,a.Matricule,a.Nom,a.Prenom,d.CodeType,d.Etat,d.DateDemande,d.DateCloture,d.gestionnaire,d.remarque FROM agents as a,demande as d,service as s where (a.Matricule=d.Matricule) and (a.Code_service=s.Code_service) and a.Matricule='$mat' and  d.CodeType='$type'") or die (mysql_error());
		   if(mysql_num_rows($req)==0)
		  {
		        echo "aucun demande ne correspond à cet matricule";
		  }
		else
		  {   
			    echo "<table border=0><tr  bgcolor='#aacc19'><td>Service</td><td>Matricule</td><td>Nom</td><td>Prénom</td><td>TypeDemande</td><td>Etat</td><td>DateDemande</td><td>DateCloture</td><td>Responsable</td><td>Remarque</td></tr>";
				while($ligne=mysql_fetch_row($req))
				  {	echo "<tr align='center' bgcolor='#e2e2e2'><td> $ligne[0] </td><td> $ligne[1] </td><td> $ligne[2] </td><td> $ligne[3] </td><td> $ligne[4] </td><td> $ligne[5]</td><td> $ligne[6] </td><td>"; if($ligne[7]==''){echo "NULL";}else{echo $ligne[7];} echo"</td><td> $ligne[8]</td><td> $ligne[9]</td></tr>";		
				  } 
					echo "</table>";
		  }
	}///////////////////////////////
	////////////////////////
	else if(!empty($mat) && !empty($type) && empty($periode1) && empty($periode2) && empty($etat) && !empty($service) && empty($gestionnaire))	
	{
		$req=mysql_query("SELECT s.libelle,a.Matricule,a.Nom,a.Prenom,d.CodeType,d.Etat,d.DateDemande,d.DateCloture,d.gestionnaire,d.remarque FROM agents as a,demande as d,service as s where (a.Matricule=d.Matricule) and (a.Code_service=s.Code_service) and a.Matricule='$mat' and  d.CodeType='$type' and s.libelle='$service'") or die (mysql_error()); 
		   if(mysql_num_rows($req)==0)
		  {
		        echo "aucun demande ne correspond à cet matricule";
		  }
		else
		  {   
			     echo "<table border=0><tr  bgcolor='#aacc19'><td>Service</td><td>Matricule</td><td>Nom</td><td>Prénom</td><td>TypeDemande</td><td>Etat</td><td>DateDemande</td><td>DateCloture</td><td>Responsable</td><td>Remarque</td></tr>";
				while($ligne=mysql_fetch_row($req))
				  {	echo "<tr align='center' bgcolor='#e2e2e2'><td> $ligne[0] </td><td> $ligne[1] </td><td> $ligne[2] </td><td> $ligne[3] </td><td> $ligne[4] </td><td> $ligne[5]</td><td> $ligne[6] </td><td>"; if($ligne[7]==''){echo "NULL";}else{echo $ligne[7];} echo"</td><td> $ligne[8]</td><td> $ligne[9]</td></tr>";		
				  } 
					echo "</table>";
		  }
	}///////////////////////////////
	////////////////////////////
	else if(!empty($mat) && !empty($type) && empty($periode1) && empty($periode2) && !empty($etat) && empty($service) && empty($gestionnaire))	
	{
		$req=mysql_query("SELECT s.libelle,a.Matricule,a.Nom,a.Prenom,d.CodeType,d.Etat,d.DateDemande,d.DateCloture,d.gestionnaire,d.remarque FROM agents as a,demande as d,service as s where (a.Matricule=d.Matricule) and (a.Code_service=s.Code_service) and a.Matricule='$mat' and  d.CodeType='$type' and d.Etat='$etat' ") or die (mysql_error()); 
		   if(mysql_num_rows($req)==0)
		  {
		        echo "aucun demande ne correspond à cet matricule";
		  }
		else
		  {   
			     echo "<table border=0><tr  bgcolor='#aacc19'><td>Service</td><td>Matricule</td><td>Nom</td><td>Prénom</td><td>TypeDemande</td><td>Etat</td><td>DateDemande</td><td>DateCloture</td><td>Responsable</td><td>Remarque</td></tr>";
				while($ligne=mysql_fetch_row($req))
				  {	echo "<tr align='center' bgcolor='#e2e2e2'><td> $ligne[0] </td><td> $ligne[1] </td><td> $ligne[2] </td><td> $ligne[3] </td><td> $ligne[4] </td><td> $ligne[5]</td><td> $ligne[6] </td><td>"; if($ligne[7]==''){echo "NULL";}else{echo $ligne[7];} echo"</td><td> $ligne[8]</td><td> $ligne[9]</td></tr>";		
				  } 
					echo "</table>";
		  }
	}///////////////////////////////
	/////////////////////////
	else if(!empty($mat) && !empty($type) && empty($periode1) && empty($periode2) && !empty($etat) && !empty($service) && empty($gestionnaire))	
	{
		$req=mysql_query("SELECT s.libelle,a.Matricule,a.Nom,a.Prenom,d.CodeType,d.Etat,d.DateDemande,d.DateCloture,d.gestionnaire,d.remarque FROM agents as a,demande as d,service as s where (a.Matricule=d.Matricule) and (a.Code_service=s.Code_service) and a.Matricule='$mat' and  d.CodeType='$type' and d.Etat='$etat' and s.libelle='$service'") or die (mysql_error()); 
		   if(mysql_num_rows($req)==0)
		  { 
		        echo "aucun demande ne correspond à cet matricule";
		  }
		else
		  {   
			     echo "<table border=0><tr  bgcolor='#aacc19'><td>Service</td><td>Matricule</td><td>Nom</td><td>Prénom</td><td>TypeDemande</td><td>Etat</td><td>DateDemande</td><td>DateCloture</td><td>Responsable</td><td>Remarque</td></tr>";
				while($ligne=mysql_fetch_row($req))
				  {	echo "<tr align='center' bgcolor='#e2e2e2'><td> $ligne[0] </td><td> $ligne[1] </td><td> $ligne[2] </td><td> $ligne[3] </td><td> $ligne[4] </td><td> $ligne[5]</td><td> $ligne[6] </td><td>"; if($ligne[7]==''){echo "NULL";}else{echo $ligne[7];} echo"</td><td> $ligne[8]</td><td> $ligne[9]</td></tr>";		
				  } 
					echo "</table>";
		  }
	}///////////////////////////////
	//////////////////////////
	else if(!empty($mat) && !empty($type) && !empty($periode1) && !empty($periode2) && empty($etat) && empty($service) && empty($gestionnaire))	
	{
		$req=mysql_query("SELECT s.libelle,a.Matricule,a.Nom,a.Prenom,d.CodeType,d.Etat,d.DateDemande,d.DateCloture,d.gestionnaire,d.remarque FROM agents as a,demande as d,service as s where (a.Matricule=d.Matricule) and (a.Code_service=s.Code_service) and a.Matricule='$mat' and  d.CodeType='$type'  and d.DateDemande between '$periode1' and '$periode2' ") or die (mysql_error()); 
		   if(mysql_num_rows($req)==0) 
		  { 
		        echo "aucun demande ne correspond à cet matricule";
		  }
		else
		  {   
			     echo "<table border=0><tr  bgcolor='#aacc19'><td>Service</td><td>Matricule</td><td>Nom</td><td>Prénom</td><td>TypeDemande</td><td>Etat</td><td>DateDemande</td><td>DateCloture</td><td>Responsable</td><td>Remarque</td></tr>";
				while($ligne=mysql_fetch_row($req))
				  {	echo "<tr align='center' bgcolor='#e2e2e2'><td> $ligne[0] </td><td> $ligne[1] </td><td> $ligne[2] </td><td> $ligne[3] </td><td> $ligne[4] </td><td> $ligne[5]</td><td> $ligne[6] </td><td>"; if($ligne[7]==''){echo "NULL";}else{echo $ligne[7];} echo"</td><td> $ligne[8]</td><td> $ligne[9]</td></tr>";		
				  } 
					echo "</table>";
		  }
	}///////////////////////////////
	///////////////////////////
	else if(!empty($mat) && !empty($type) && !empty($periode1) && !empty($periode2) && empty($etat) && !empty($service) && empty($gestionnaire))	
	{
		$req=mysql_query("SELECT s.libelle,a.Matricule,a.Nom,a.Prenom,d.CodeType,d.Etat,d.DateDemande,d.DateCloture,d.gestionnaire,d.remarque FROM agents as a,demande as d,service as s where (a.Matricule=d.Matricule) and (a.Code_service=s.Code_service) and a.Matricule='$mat' and  d.CodeType='$type'  and d.DateDemande between '$periode1' and '$periode2' and s.libelle='$service'") or die (mysql_error()); 
		   if(mysql_num_rows($req)==0) 
		  { 
		        echo "aucun demande ne correspond à cet matricule";
		  }
		else
		  {   
			     echo "<table border=0><tr  bgcolor='#aacc19'><td>Service</td><td>Matricule</td><td>Nom</td><td>Prénom</td><td>TypeDemande</td><td>Etat</td><td>DateDemande</td><td>DateCloture</td><td>Responsable</td><td>Remarque</td></tr>";
				while($ligne=mysql_fetch_row($req))
				  {	echo "<tr align='center' bgcolor='#e2e2e2'><td> $ligne[0] </td><td> $ligne[1] </td><td> $ligne[2] </td><td> $ligne[3] </td><td> $ligne[4] </td><td> $ligne[5]</td><td> $ligne[6] </td><td>"; if($ligne[7]==''){echo "NULL";}else{echo $ligne[7];} echo"</td><td> $ligne[8]</td><td> $ligne[9]</td></tr>";		
				  } 
					echo "</table>";
		  }
	}///////////////////////////////
	///////////////////////////
	else if(!empty($mat) && !empty($type) && !empty($periode1) && !empty($periode2) && !empty($etat) && empty($service) && empty($gestionnaire))	
	{
		$req=mysql_query("SELECT s.libelle,a.Matricule,a.Nom,a.Prenom,d.CodeType,d.Etat,d.DateDemande,d.DateCloture,d.gestionnaire,d.remarque FROM agents as a,demande as d,service as s where (a.Matricule=d.Matricule) and (a.Code_service=s.Code_service) and a.Matricule='$mat' and  d.CodeType='$type'  and d.DateDemande between '$periode1' and '$periode2' and d.Etat='$etat'") or die (mysql_error()); 
		   if(mysql_num_rows($req)==0) 
		  { 
		        echo "aucun demande ne correspond à cet matricule";
		  }
		else
		  {   
			    echo "<table border=0><tr  bgcolor='#aacc19'><td>Service</td><td>Matricule</td><td>Nom</td><td>Prénom</td><td>TypeDemande</td><td>Etat</td><td>DateDemande</td><td>DateCloture</td><td>Responsable</td><td>Remarque</td></tr>";
				while($ligne=mysql_fetch_row($req))
				  {	echo "<tr align='center' bgcolor='#e2e2e2'><td> $ligne[0] </td><td> $ligne[1] </td><td> $ligne[2] </td><td> $ligne[3] </td><td> $ligne[4] </td><td> $ligne[5]</td><td> $ligne[6] </td><td>"; if($ligne[7]==''){echo "NULL";}else{echo $ligne[7];} echo"</td><td> $ligne[8]</td><td> $ligne[9]</td></tr>";		
				  } 
					echo "</table>";
		  }
	}///////////////////////////////
	/////////////////////////////
	else if(!empty($mat) && !empty($type) && !empty($periode1) && !empty($periode2) && !empty($etat) && !empty($service) && empty($gestionnaire))	
	{
		$req=mysql_query("SELECT s.libelle,a.Matricule,a.Nom,a.Prenom,d.CodeType,d.Etat,d.DateDemande,d.DateCloture,d.gestionnaire,d.remarque FROM agents as a,demande as d,service as s where (a.Matricule=d.Matricule) and (a.Code_service=s.Code_service) and a.Matricule='$mat' and  d.CodeType='$type'  and d.DateDemande between '$periode1' and '$periode2' and d.Etat='$etat' and s.libelle='$service'") or die (mysql_error()); 
		   if(mysql_num_rows($req)==0) 
		  { 
		        echo "aucun demande ne correspond à cet matricule";
		  }
		else
		  {   
			     echo "<table border=0><tr  bgcolor='#aacc19'><td>Service</td><td>Matricule</td><td>Nom</td><td>Prénom</td><td>TypeDemande</td><td>Etat</td><td>DateDemande</td><td>DateCloture</td><td>Responsable</td><td>Remarque</td></tr>";
				while($ligne=mysql_fetch_row($req))
				  {	echo "<tr align='center' bgcolor='#e2e2e2'><td> $ligne[0] </td><td> $ligne[1] </td><td> $ligne[2] </td><td> $ligne[3] </td><td> $ligne[4] </td><td> $ligne[5]</td><td> $ligne[6] </td><td>"; if($ligne[7]==''){echo "NULL";}else{echo $ligne[7];} echo"</td>><td> $ligne[8]</td><td> $ligne[9]</td></tr>";		
				  } 
					echo "</table>";
		  }
	}///////////////////////////////
	////////////////////////////
	
	 
	     
}
mysql_close($con);
		?>
    </div>


  </div>
			 
  <div id="footer">
    <h6 align="center"> &copy;  ocp.com | Design by <a href="">LP2I - agadir</a></h6>
  <!-- fin de #footer --></div>
<!-- fin de #container --></div>
</body>
</html>