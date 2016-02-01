<?php session_start();
   unset($_SESSION['user']);
   session_destroy ();
	     if (isset($_POST['en'])) {
	   header('location:index.php');
	 } else {}
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
	width: 20%;}
	#r_col {
	padding:  10px;
	float: left;
	width: 68%;
	border-left: 1px solid #eee;
	font: 80%/160% Verdana, Arial, Helvetica, sans-serif;
}
#header img { width : 100%;}
</style></head>

<body class="oneColLiqCtrHdr">

<div id="container">
  <div id="header">
    <img src="header.JPG" width="970" height="111" />
    <!-- fin de #header -->
  </div>
  <div id="content">
         <div id="l_col">     
		          	 <div class="ali">&nbsp;</div>
		 </div>
         <div id="r_col">
           <form id="form1" name="form1" method="post" action="">
                  <table  border="0" >
				 
				    <tr>
				      <td align="center"><div align="center" >
				        <h3>Session Ferm&eacute;e :</h3>
				      </div></td>   
			        </tr>
				    <tr>
				      <td colspan="3">
				        Vous avez ferm&eacute; votre session. Vous pouvez laisser votre ordinateur allum&eacute; sans risque d'utilisation de votre compte.<br />
				       
				        Votre Modification en cours &agrave; &eacute;t&eacute; sauvegard&eacute;, ses information vous seront propos&eacute;s lors de votre prochaine ouverture de session.</td>
			        </tr>
				    <tr>
				      <td>&nbsp;</td>
				      <td></td>
				      <td>
				        <label>
				          <input name="en" type="submit" class="button" id="en" value="continuer">
			            </label>
				        <div align="right"></div>
				       </td>
			        </tr>
			      </table>
           </form>
     </div>

        </div>
			 
  <div id="footer">
   <h6 align="center"> &copy; ocp.com | Design by <a href="">LP2I - agadir</a></h6>
  <!-- fin de #footer --></div>
<!-- fin de #container --></div>
</body>
</html>