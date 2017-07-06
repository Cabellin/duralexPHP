<?php
require_once("../datos/Conexion.php");
class Abogado
{  private $rut_abogado;
   private $numero_verificador;
   private $nombre_abogado;
   private $fecha_contratacion;
   private $especialidad;
   private $valor_hora;
   private $pasword;

   public function __construct(){}
   
   public function Abogado($rut_abogado,$numero_verificador,$nombre_abogado,$fecha_contratacion,$especialidad,$valor_hora,$pasword)
   { $this->rut_abogado=$rut_abogado;
     $this->numero_verificador=$numero_verificador;
     $this->nombre_abogado=$nombre_abogado;
     $this->fecha_contratacion=$fecha_contratacion;
     $this->especialidad=$especialidad;
     $this->valor_hora=$valor_hora;
     $this->pasword=$pasword;

   }
   //ACCESADORES
   public function getRut_abogado()            {return $this->rut_abogado;}
   public function getNumero_verificador()	   {return $this->numero_verificador;}
   public function getNombre_abogado()	       {return $this->nombre_abogado;}
   public function getFecha_contratacion()     {return $this->fecha_contratacion;}
   public function getEspecialidad()           {return $this->especialidad;}   
   public function getValor_hora()             {return $this->valor_hora;}
   public function getPasword()                {return $this->pasword;} 

   //MUTANTES
   public function setRut_abogado($rut_abogado)	                {$this->rut_abogado=$rut_abogado;}
   public function setNumero_verificador($numero_verificador)   {$this->numero_verificador=$numero_verificador;}
   public function setNombre_abogado($nombre_abogado)         	{$this->nombre_abogado=$nombre_abogado;}
   public function setFecha_contratacion($fecha_contratacion)	{$this->fecha_contratacion=$fecha_contratacion;}
   public function setEspecialidad($especialidad)	            {$this->especialidad=$especialidad;}
   public function setValor_hora($valor_hora)		            {$this->valor_hora=$valor_hora;}
   public function setPasword($pasword)		                    {$this->pasword=$pasword;}   

   //NEGOCIO
public function ingresarAbogado()
   { $objConex=new Conexion();
     $sql="INSERT INTO Abogado VALUES('".$this->rut_abogado."','".$this->numero_verificador."','".$this->nombre_abogado."','".$this->fecha_contratacion."','".$this->especialidad."','".$this->valor_hora."','".$this->pasword."')";
     $resul=$objConex->generarTransaccion($sql);
     return $resul;
   }
   
public function modificarAbogado()
   { $objConex=new Conexion();
     $sql="UPDATE Abogado SET nombre_abogado='".$this->nombre_abogado."', fecha_contratacion ='".$this->fecha_contratacion."', especialidad ='".$this->especialidad."', valor_hora ='".$this->valor_hora."' WHERE (rut_abogado ='".$this->rut_abogado."' && numero_verificador ='".$this->numero_verificador."')";
     $resul=$objConex->generarTransaccion($sql);
     return $resul;
   } 
    
public function eliminarAbogado()
   { $objConex=new Conexion();//Instanciar clase Conexion
     $sql="DELETE FROM Abogado WHERE(rut_abogado ='".$this->rut_abogado."' && numero_verificador ='".$this->numero_verificador."')";
     $resul=$objConex->generarTransaccion($sql);
     return $resul;
   } 
public function buscarAbogado()
   { $objConex=new Conexion();//Instanciar clase Conexion
     $sql="SELECT * FROM Abogado WHERE(rut_abogado ='".$this->rut_abogado."' && numero_verificador ='".$this->numero_verificador."')";
     $vector=$objConex->generarTransaccion($sql);
     return $vector;
   } 
public function listarAbogado()
   { $objConex=new Conexion();
     $sql="SELECT * FROM Abogado";
     $matrix=$objConex->generarTransaccion($sql);
     return $matrix;
   } 
    
}//clase   
?>