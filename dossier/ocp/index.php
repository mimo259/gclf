<?php session_start(); 
 $id=mysql_connect('localhost','root','');
	     mysql_select_db('ocp',$id);
?>		 
	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="default.css" media="screen"/>
<title>Document sans titre</title>
<style type="text/css">
#l_col {
	padding: 0px;
	float: left;
	width: 21%;}
	#r_col {
	padding:  10px;
	float: left;
	width: 68%;
	border-left: 1px solid #eee;
	font: 80%/160% Verdana, Arial, Helvetica, sans-serif;
}
#header img { width : 100%;}

.fieldset1
{
    border:2px solid green;
    -moz-border-radius:8px;
    -webkit-border-radius:8px;	
    border-radius:8px;
	background:#9C6
}
.div3{
	position:absolute;
	top:136px;
	left:399px;
	width:436px;
	height:168px;
	margin-left: auto;
	margin-right: auto;
}

.div4{
	position:absolute;
	top:138px;
	left:896px;
	width:248px;
	height:204px;
	margin-left: auto;
	margin-right: auto;
}

</style>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
</head>

<body class="oneColLiqCtrHdr">

<div id="container">
  <div id="header">
    <img src="header.JPG" width="970" height="111" />
    <!-- fin de #header -->
  </div>
  <div id="content">
         <div id="l_col">     
		          	
        <div class="lien">
         <form name="form1" method="post" action="">
          <fieldset class="fieldset1">
    <legend>Identification : </legend>
         
  <table width="201" border="0">
    <tr>
      <td width="97">Login</td>
      <td width="125"><input name="login" type="text" id="login" size="12" ></td>
    </tr>
    <tr>
      <td>password:</td>
      <td><input name="pass" type="password" id="pass" size="12" ></td>
    </tr>
    <tr>
      <td colspan="2">
        <div align="center">
        <input name="envoyer" type="submit" id="envoyer" value="Se connecter" class="button">
    </div></td>
    </tr>
  </table>

<?php if (isset($_POST['envoyer'])) 
{ // récupération des données
		$login=$_POST['login'];
		$pass=$_POST['pass'];
		// Récupération de la valeur du champ actif pour le login $login
		
		$req="select * from utilisateur where Nom ='$login' && Motpasse ='$pass'";
	
		$result=mysql_query($req) or die(mysql_error());
		
		$_SESSION['user']=$login;
		
		if(mysql_num_rows($result)==0)
		{
		echo "Login ou mot de passe incorrect";
		
		}
		else
		{	
		$row=mysql_fetch_row($result);
		$_SESSION['sexe']=$row[0];
		if ($row[3]=="gestionnaire"){header('location:gestionnaire.php');}
		elseif($row[3]=="secretaire"){header('location:secretaria.php');}
		elseif($row[3]=="chef_personnel"){header('location:chef_personnel.php');}
		else{header('location:admin.php');}
	    }
		
		mysql_close(); 
	}
		?>
		  </form></div>
          <BR /><BR /><BR /><BR /><BR /><BR /><BR /><BR />
    </div>
       
                         
		             
		  
         <div id="r_col" align="justify"><div class="div3"><font size="-2">&nbsp;&nbsp;&nbsp;Leader mondial sur le marché du phosphate et des produits dérivés, et première entreprise du Royaume, le Groupe OCP opère sur les cinq continents. Son ouverture traditionnelle sur l'international, depuis sa création en 1920, le pousse tout naturellement à développer, en permanence, des capacités d'adaptation, de flexibilité et d'anticipation pour pouvoir répondre aux exigences de plus en plus fortes des clients dans un marché très concurrentiel.<br />
Une culture d'entreprise forte et des valeurs partagées au sein du Groupe constituent des atouts importants pour appréhender, avec sérénité et dynamisme, les réalités changeantes du marché et progresser dans une perspective de développement durable. </div><div class="div4">
           <!--URL utilisées dans l'animation-->
<!--texte utilisé dans l'animation-->
<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0" width="246" height="197" id="Sans nom-3" align="middle">
  <param name="allowScriptAccess" value="sameDomain" />
  <param name="movie" value="animation.swf" />
  <param name="quality" value="high" />
  <param name="bgcolor" value="#ffffff" />
  <embed src="animation.swf" quality="high" bgcolor="#ffffff" width="246" height="197" name="Sans nom-3" align="middle" allowscriptaccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object
               >
<div>
  
</div>
             
           </object>
</div></div>

        </div>
			 
  <div id="footer">
    <h6 align="center"> &copy; ocp.com | Design by <a href="">LP2I - agadir</a></h6>
  <!-- fin de #footer --></div>
<!-- fin de #container --></div>
<script type="text/javascript">
<!--
swfobject.registerObject("FlashID");
//-->
</script>
</body>
</html>