<?php
$perfil="";
if(isset($_POST["rut"]) && $_POST["rut"]!="" )
{ $rut=$_POST["rut"];}
if(isset($_POST["numero_verificador"]) && $_POST["numero_verificador"]!="" )
{ $numero_verificador=$_POST["numero_verificador"];}
if(isset($_POST["password"]) & $_POST["password"]!="" )
{ $password=$_POST["password"];}
  
  if(isset($_POST["OK"]) && $_POST["OK"]=="Entrar")
  { $val=0;
    $val=evaluarUsuario($rut,$numero_verificador,$password);
    if ($val==1) 
	{  session_start();
       $_SESSION['rut']=$rut;
	   //$_SESSION['perfil']=$perfil;
	   header("Location:Vista/Home.php");
	}  
	else         header("Location:GUIRegistrar.php");
  }
  
  function evaluarUsuario($rut,$numero_verificador,$password)
  { include("datos/Conexion.php");
    $objConex=new Conexion();
    $objConex->abrirConexion();
    $sql="SELECT * FROM Usuario WHERE(rut='".$rut."' && numero_verificador='".$numero_verificador."'&& password='".$password."')";
	$datos=$objConex->generarTransaccion($sql);
    $reg=$reg=mysql_fetch_row($datos);
	if($reg[1]==$login_usuario && $reg[2]==$pass_usuario) 
	{   $perfil=$reg[7];
        echo "PERFIL RESCATADO :".$reg[7];
        echo "PERFIL :".$perfil;
		return 1;
	}
	else return 0;  
  }

?>