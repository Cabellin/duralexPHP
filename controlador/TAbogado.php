<?php
require_once("../negocio/Abogado.php");

if(isset($_POST["rut_abogado"]) && $_POST["rut_abogado"]!="" )
{ $rut_abogado=$_POST["rut_abogado"];}
if(isset($_POST["numero_verificador"]) && $_POST["numero_verificador"]!="" )
{ $numero_verificador=$_POST["numero_verificador"];}
if(isset($_POST["nombre_abogado"]) && $_POST["nombre_abogado"]!="" )
{ $nombre_abogado=$_POST["nombre_abogado"];}
if(isset($_POST["fecha_contratacion"]) && $_POST["fecha_contratacion"]!="" )
{ $fecha_contratacion=$_POST["fecha_contratacion"];}
if(isset($_POST["especialidad"]) && $_POST["especialidad"]!="" )
{ $especialidad=$_POST["especialidad"];}
if(isset($_POST["valor_hora"]) && $_POST["valor_hora"]!="" )
{ $valor_hora=$_POST["valor_hora"];}
if(isset($_POST["pasword"]) && $_POST["pasword"]!="" )
{ $password=$_POST["pasword"];}

if(isset($_POST["OK"]) && $_POST["OK"]=="Ingresar")
{ $objRec=new Abogado();
  $objRec->Abogado($nombre_abogado,$fecha_contratacion,$especialidad,$valor_hora,$pasword);
  $resul=$objRec->ingresarAbogado();
  if ($resul!="") header("Location:../vista/GUIAbogado.php");
  else   echo "<script language='javascript'>alert('ERROR:DATOS PERDIDOS, NO ALMACENADOS');
                window.location='../Vista/GUIAbogado.php'</script>";         
}
if(isset($_POST["OK1"]) && $_POST["OK1"]=="Modificar")
{ $objRec=new Abogado();
  $objRec->Abogado($rut_abogado,$numero_verificador,$nombre_abogado,$fecha_contratacion,$especialidad,$valor_hora,$pasword);
  $resul=$objRec->modificarAbogado();
  if ($resul!="") header("Location:../vista/GUIAbogado.php");
  else   echo "<script language='javascript'>alert('ERROR:DATOS PERDIDOS, NO ALMACENADOS');
                window.location='../vista/GUIAbogado.php'</script>";            
}
if(isset($_POST["OK2"]) && $_POST["OK2"]=="Eliminar")
{ $objRec=new Abogado();
  $objRec->Abogado($rut_abogado,$numero_verificador);
  $resul=$objRec->eliminarAbogado();
  if ($resul!="") header("Location:../vista/GUIAbogado.php");
  else   echo "<script language='javascript'>alert('ERROR:DATOS PERDIDOS, NO ALMACENADOS');
                window.location='../vista/GUIAbogado.php'</script>";          
}
///////////////////
if(isset($_POST["OK"]) && $_POST["OK"]=="Buscar")
	{buscarVector($rut_abogado,$numero_verificador);}
	
function buscarVector($rut_abogado,$numero_verificador)
{ $objRec=new Abogado();
  $objRec->Abogado($rut_abogado,$numero_verificador);//Datos a memoria
  $resul=$objRec->buscarAbogado();
  if($vector!="") return $vector;
  else	{		 echo "<script language='javascript'>
                      alert('ERROR...Abogado PERDIDO EN LIMBUS');
					   window.location='../vista/GUIAbogado.php'</script>";}
}
///////////////////
if(isset($_POST["OK"]) && $_POST["OK"]=="Listar")
	{buscarMatrix();}
	
function buscarMatrix()
{ $objRec=new Abogado();
  $matrix=$objRec->listarAbogado();
  if($matrix!="") return $matrix;
  else	{		 echo "<script language='javascript'>
                      alert('ERROR...Abogado PERDIDO EN LIMBUS');
					  window.location='../vista/GUIAbogado.php'</script>";}
}
?>