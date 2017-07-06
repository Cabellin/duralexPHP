<?php
require_once("../negocio/Usuario.php");

if(isset($_POST["rut"]) && $_POST["rut"]!="" )
{ $rut=$_POST["rut"];}
if(isset($_POST["numero_verificador"]) && $_POST["numero_verificador"]!="" )
{ $numero_verificador=$_POST["numero_verificador"];}
if(isset($_POST["nombre_completo"]) && $_POST["nombre_completo"]!="" )
{ $nombre_completo=$_POST["nombre_completo"];}
if(isset($_POST["fecha_incorporacion"]) && $_POST["fecha_incorporacion"]!="" )
{ $fecha_incorporacion=$_POST["fecha_incorporacion"];}
if(isset($_POST["telefono"]) && $_POST["telefono"]!="" )
{ $telefono=$_POST["telefono"];}
if(isset($_POST["password"]) && $_POST["password"]!="" )
{ $password=$_POST["password"];}
if(isset($_POST["tipo_usuario"]) && $_POST["tipo_usuario"]!="" )
{ $tipo_usuario=$_POST["tipo_usuario"];}
if(isset($_POST["tipo_usuario_id_tipo_usuario"]) && $_POST["tipo_usuario_id_tipo_usuario"]!="" )
{ $tipo_usuario_id_tipo_usuario=$_POST["tipo_usuario_id_tipo_usuario"];}


if(isset($_POST["OK"]) && $_POST["OK"]=="Ingresar")
{ $objRec=new Usuario();
  $objRec->Usuario($rut,$numero_verificador,$nombre_completo,$fecha_incorporacion,$telefono,$password,$tipo_usuario,$tipo_usuario_id_tipo_usuario);
  $resul=$objRec->ingresarUsuario();
  if ($resul!="") header("Location:../vista/GUIUsuario.php");
  else   echo "<script language='javascript'>alert('ERROR:DATOS PERDIDOS, NO ALMACENADOS');
                window.location='../Vista/GUIUsuario.php'</script>";         
}
if(isset($_POST["OK1"]) && $_POST["OK1"]=="Modificar")
{ $objRec=new Usuario();
  $objRec->Usuario($nombre_completo,$fecha_incorporacion,$telefono,$password,$tipo_usuario,$tipo_usuario_id_tipo_usuario);
  $resul=$objRec->modificarUsuario();
  if ($resul!="") header("Location:../vista/GUIUsuario.php");
  else   echo "<script language='javascript'>alert('ERROR:DATOS PERDIDOS, NO ALMACENADOS');
                window.location='../vista/GUIUsuario.php'</script>";            
}
if(isset($_POST["OK2"]) && $_POST["OK2"]=="Eliminar")
{ $objRec=new Usuario();
  $objRec->Usuario($rut,$numero_verificador);;
  $resul=$objRec->eliminarUsuario();
  if ($resul!="") header("Location:../vista/GUIUsuario.php");
  else   echo "<script language='javascript'>alert('ERROR:DATOS PERDIDOS, NO ALMACENADOS');
                window.location='../vista/GUIUsuario.php'</script>";          
}
///////////////////
if(isset($_POST["OK"]) && $_POST["OK"]=="Buscar")
	{buscarVector($rut,$numero_verificador);}
	
function buscarVector($rut,$numero_verificador)
{ $objRec=new Usuario();
  $objRec->Usuario($rut,$numero_verificador);//Datos a memoria
  $resul=$objRec->buscarUsuario();
  if($vector!="") return $vector;
  else	{		 echo "<script language='javascript'>
                      alert('ERROR...Usuario PERDIDO EN LIMBUS');
					   window.location='../vista/GUIUsuario.php'</script>";}
}
///////////////////
if(isset($_POST["OK"]) && $_POST["OK"]=="Listar")
	{buscarMatrix();}
	
function buscarMatrix()
{ $objRec=new Usuario();
  $matrix=$objRec->listarUsuario();
  if($matrix!="") return $matrix;
  else	{		 echo "<script language='javascript'>
                      alert('ERROR...Usuario PERDIDO EN LIMBUS');
					  window.location='../vista/GUIUsuario.php'</script>";}
}
?>