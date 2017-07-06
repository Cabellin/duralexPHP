<?php
require_once("../datos/Conexion.php");
class Usuario
{  private $rut;
   private $numero_verificador;
   private $nombre_completo;
   private $fecha_incorporacion;
   private $telefono;
   private $password;
   private $tipo_usuario;
   private $tipo_usuario_id_tipo_usario;

 
   public function __construct(){}
   
   public function Usuario($rut,$numero_verificador,$nombre_completo,$fecha_incorporacion,$telefono,$password,$tipo_usuario,$tipo_usuario_id_tipo_usario)
   { $this->rut=$rut;
     $this->numero_verificador=$numero_verificador;
     $this->nombre_completo=$nombre_completo;
     $this->fecha_incorporacion=$fecha_incorporacion;
     $this->telefono=$telefono;
     $this->password=$password;
     $this->tipo_usuario=$tipo_usuario;
     $this->tipo_usuario_id_tipo_usario=$tipo_usuario_id_tipo_usario;

   }
   //ACCESADORES
   public function getRut()                         {return $this->rut;}
   public function getNumero_verificador()			{return $this->numero_verificador;}
   public function getNombre_completo()	            {return $this->nombre_completo;}
   public function getFecha_incorporacion()         {return $this->fecha_incorporacion;}
   public function getTelefono()                    {return $this->telefono;}   
   public function getPassword()                    {return $this->password;}
   public function getTipo_usuario()                {return $this->tipo_usuario;} 
   public function getTipo_usuario_id_tipo_usario() {return $this->tipo_usuario_id_tipo_usario;} 

   //MUTANTES
   public function setRut($rut)		                                {$this->rut=$rut;}
   public function setNumero_verificador($numero_verificador)		{$this->numero_verificador=$numero_verificador;}
   public function setNombre_completo($nombre_completo)         	{$this->nombre_completo=$nombre_completo;}
   public function setFecha_incorporacion($fecha_incorporacion)	    {$this->fecha_incorporacion=$fecha_incorporacion;}
   public function setTelefono($telefono)		                    {$this->telefono=$telefono;}
   public function setPassword($password)		                    {$this->password=$password;}
   public function setTipo_usuario($tipo_usuario)		            {$this->tipo_usuario=$tipo_usuario;}   
   public function setTipo_usuario_id_tipo_usario($tipo_usuario_id_tipo_usario) {$this->tipo_usuario_id_tipo_usario=$tipo_usuario_id_tipo_usario;}     

   //NEGOCIO
public function ingresarUsuario()
   { $objConex=new Conexion();
     $sql="INSERT INTO Usuario VALUES('".$this->rut."','".$this->numero_verificador."','".$this->nombre_completo."','".$this->fecha_incorporacion."','".$this->telefono."','".$this->password."','".$this->tipo_usuario."','".$this->tipo_usuario_id_tipo_usario."')";
     $resul=$objConex->generarTransaccion($sql);
     return $resul;
   }
   
public function modificarUsuario()
   { $objConex=new Conexion();
     $sql="UPDATE Usuario SET nombre_completo='".$this->nombre_completo."', fecha_incorporacion ='".$this->fecha_incorporacion."', telefono ='".$this->telefono."', password ='".$this->password."' WHERE (rut ='".$this->rut."' && numero_verificador ='".$this->numero_verificador."')";
     $resul=$objConex->generarTransaccion($sql);
     return $resul;
   } 
    
public function eliminarUsuario()
   { $objConex=new Conexion();//Instanciar clase Conexion
     $sql="DELETE FROM Usuario WHERE(rut ='".$this->rut."' && numero_verificador ='".$this->numero_verificador."')";
     $resul=$objConex->generarTransaccion($sql);
     return $resul;
   } 
public function buscarUsuario()
   { $objConex=new Conexion();//Instanciar clase Conexion
     $sql="SELECT * FROM Usuario WHERE(rut ='".$this->rut."' && numero_verificador ='".$this->numero_verificador."')";
     $vector=$objConex->generarTransaccion($sql);
     return $vector;
   } 
public function listarUsuario()
   { $objConex=new Conexion();
     $sql="SELECT * FROM Usuario";
     $matrix=$objConex->generarTransaccion($sql);
     return $matrix;
   } 
    
}//clase   
?>