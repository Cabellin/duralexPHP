<?php
require_once("../negocio/Atencion.php");

if(isset($_POST["id_atencion"]) && $_POST["id_atencion"]!="" )
{ $id_atencion=$_POST["id_atencion"];}
if(isset($_POST["fecha_atencion"]) && $_POST["fecha_atencion"]!="" )
{ $fecha_atencion=$_POST["fecha_atencion"];}
if(isset($_POST["estado"]) && $_POST["estado"]!="" )
{ $estado=$_POST["estado"];}
if(isset($_POST["usuario_rut"]) && $_POST["usuario_rut"]!="" )
{ $usuario_rut=$_POST["usuario_rut"];}
if(isset($_POST["abogado_rut_abogado"]) && $_POST["abogado_rut_abogado"]!="" )
{ $abogado_rut_abogado=$_POST["abogado_rut_abogado"];}


if(isset($_POST["OK"]) && $_POST["OK"]=="Ingresar")
{ $objRec=new Atencion();
  $objRec->Atencion($id_atencion,$fecha_atencion,$estado,$usuario_rut,$abogado_rut_abogado);
  $resul=$objRec->ingresarAtencion();
  if ($resul!="") header("Location:../vista/GUIAtencion.php");
  else   echo "<script language='javascript'>alert('ERROR:DATOS PERDIDOS, NO ALMACENADOS');
                window.location='../Vista/GUIAtencion.php'</script>";         
}
if(isset($_POST["OK1"]) && $_POST["OK1"]=="Modificar")
{ $objRec=new Atencion();
  $objRec->Atencion($id_atencion,$fecha_atencion,$estado,$usuario_rut,$abogado_rut_abogado);
  $resul=$objRec->modificarAtencion();
  if ($resul!="") header("Location:../vista/GUIAtencion.php");
  else   echo "<script language='javascript'>alert('ERROR:DATOS PERDIDOS, NO ALMACENADOS');
                window.location='../vista/GUIAtencion.php'</script>";            
}
if(isset($_POST["OK2"]) && $_POST["OK2"]=="Eliminar")
{ $objRec=new Atencion();
  $objRec->Atencion($id_atencion);
  $resul=$objRec->eliminarAtencion();
  if ($resul!="") header("Location:../vista/GUIAtencion.php");
  else   echo "<script language='javascript'>alert('ERROR:DATOS PERDIDOS, NO ALMACENADOS');
                window.location='../vista/GUIAtencion.php'</script>";          
}
///////////////////
if(isset($_POST["OK"]) && $_POST["OK"]=="Buscar")
	{buscarVector($rut,$numero_verificador);}
	
function buscarVector($rut,$numero_verificador)
{ $objRec=new Atencion();
  $objRec->Atencion($id_atencion);//Datos a memoria
  $resul=$objRec->buscarAtencion($id_atencion);
  if($vector!="") return $vector;
  else	{		 echo "<script language='javascript'>
                      alert('ERROR...Atencion PERDIDO EN LIMBUS');
					   window.location='../vista/GUIAtencion.php'</script>";}
}
///////////////////
if(isset($_POST["OK"]) && $_POST["OK"]=="Listar")
	{buscarMatrix();}
	
function buscarMatrix()
{ $objRec=new Atencion();
  $matrix=$objRec->listarAtencion();
  if($matrix!="") return $matrix;
  else	{		 echo "<script language='javascript'>
                      alert('ERROR...Atencion PERDIDO EN LIMBUS');
					  window.location='../vista/GUIAtencion.php'</script>";}
}
?>