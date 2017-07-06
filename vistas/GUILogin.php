<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pagina de Login</title>
<link rel="stylesheet" type="text/css" href="Utilitarios/Maqueta.css" />
</head>

<body >
<div>
 <center>
 <center><img src="../Imagenes/1.jpg" style="width:20%; height:20%;"/></center>
 <form action="GUILogin.php" method='post'>
  <BR /><BR /><BR /><BR /><BR /><BR /><BR /><BR />
  
  <table class='gridtable' type='text/css' href='Utilitarios/Maqueta.css'>

     <tr><th bgcolor=#6699FF>SISTEMA</th><th bgcolor=#6699FF>Duralex</th></tr>
     <tr><th bgcolor=#6699FF>rut</th><td><input type=text name=rut></td> &nbsp;<td><input type=text name=numero_verificador></tr>
	 <tr><th bgcolor=#6699FF>clave</th>  <td><input type=password name=password></td></tr>
     <tr><th bgcolor=#6699FF>INGRESO A PAGINA</th><td><input type=submit name="OK"  value="Entrar"></td></tr>
	 <tr><td><a href="Vista/GUIRegistrar.php">REGISTRARSE</a></td></tr>
	 
</table></form></center>	 
</div>
</body>
</html>
<?php

if(isset($_POST["OK"]) && $_POST["OK"]=="Entrar")
{ $rut="";
  $numero_verificador="";
  $password="";
if(isset($_POST["rut"]) && $_POST["rut"]!="" )
{ $rut=$_POST["rut"];}
if(isset($_POST["numero_verificador"]) && $_POST["numero_verificador"]!="" )
{ $numero_verificador=$_POST["numero_verificador"];}
if(isset($_POST["password"]) & $_POST["password"]!="" )
{ $password=$_POST["password"];}
  if($rut!=""&& $numero_verificador!="" && $password!="")  include("session/TLogin.php");
}
  
if(isset($_POST["OK1"]) && $_POST["OK1"]=="Salir") 
{exit();}
   
?>
