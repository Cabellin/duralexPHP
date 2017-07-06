<?php
require_once("../negocio/TipoUsuario.php");

if(isset($_POST["id_tipo_usuario"]) && $_POST["id_tipo_usuario"]!="" )
{ $id_tipo_usuario=$_POST["id_tipo_usuario"];}
if(isset($_POST["titulo"]) && $_POST["titulo"]!="" )
{ $titulo=$_POST["titulo"];}
if(isset($_POST["descripcion"]) && $_POST["descripcion"]!="" )
{ $descripcion=$_POST["descripcion"];}


if(isset($_POST["OK"]) && $_POST["OK"]=="Ingresar")
{ $objRec=new TipoUsuario( $id_tipo_usuario,$titulo,$descripcion);
  $objRec->TipoUsuario();
  $resul=$objRec->ingresarTipoUsuario();
  if ($resul!="") header("Location:../vista/GUITipoUsuario.php");
  else   echo "<script language='javascript'>alert('ERROR:DATOS PERDIDOS, NO ALMACENADOS');
                window.location='../Vista/GUITipoUsuario.php'</script>";         
}
if(isset($_POST["OK1"]) && $_POST["OK1"]=="Modificar")
{ $objRec=new TipoUsuario();
  $objRec->TipoUsuario($titulo,$descripcion);
  $resul=$objRec->modificarTipoUsuario();
  if ($resul!="") header("Location:../vista/GUITipoUsuario.php");
  else   echo "<script language='javascript'>alert('ERROR:DATOS PERDIDOS, NO ALMACENADOS');
                window.location='../vista/GUITipoUsuario.php'</script>";            
}
if(isset($_POST["OK2"]) && $_POST["OK2"]=="Eliminar")
{ $objRec=new TipoUsuario();
  $objRec->TipoUsuario($id_tipo_usuario);
  $resul=$objRec->eliminarTipoUsuario();
  if ($resul!="") header("Location:../vista/GUITipoUsuario.php");
  else   echo "<script language='javascript'>alert('ERROR:DATOS PERDIDOS, NO ALMACENADOS');
                window.location='../vista/GUITipoUsuario.php'</script>";          
}
///////////////////
if(isset($_POST["OK"]) && $_POST["OK"]=="Buscar")
	{buscarVector($id_tipo_usuario);}
	
function buscarVector($id_tipo_usuario)
{ $objRec=new TipoUsuario();
  $objRec->TipoUsuario($id_tipo_usuario);//Datos a memoria
  $resul=$objRec->buscarTipoUsuario();
  if($vector!="") return $vector;
  else	{		 echo "<script language='javascript'>
                      alert('ERROR...Usuario PERDIDO EN LIMBUS');
					   window.location='../vista/GUITipoUsuario.php'</script>";}
}
///////////////////
if(isset($_POST["OK"]) && $_POST["OK"]=="Listar")
	{buscarMatrix();}
	
function buscarMatrix()
{ $objRec=new Usuario();
  $matrix=$objRec->listarUsuario();
  if($matrix!="") return $matrix;
  else	{		 echo "<script language='javascript'>
                      alert('ERROR... tipo de Usuario PERDIDO EN LIMBUS');
					  window.location='../vista/GUITipoUsuario.php'</script>";}
}
?>