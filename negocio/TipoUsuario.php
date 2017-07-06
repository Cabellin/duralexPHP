<?php
require_once("../datos/Conexion.php");
class TipoUsuario
{  private $id_tipo_usuario;
   private $titulo;
   private $descripcion;
 
   public function __construct(){}
   
   public function TipoUsuario($id_tipo_usuario,$titulo,$descripcion)
   { $this->id_tipo_usuario=$id_tipo_usuario;
     $this->titulo=$titulo;
     $this->descripcion=$descripcion;
   }
   //ACCESADORES
   public function getId_tipo_usuario() {return $this->id_tipo_usuario;}
   public function getTitulo()			{return $this->titulo;}
   public function getDescripcion()	    {return $this->descripcion;}

   //MUTANTES
   public function setId_tipo_usuario($id_tipo_usuario)		{$this->id_tipo_usuario=$id_tipo_usuario;}
   public function setTitulo($titulo)						{$this->titulo=$titulo;}
   public function setDescripcion($descripcion)         	{$this->descripcion=$descripcion;}

   //NEGOCIO
public function ingresarTipoUsuario()
   { $objConex=new Conexion();
     $sql="INSERT INTO Tipo_Usuario VALUES('".$this->id_tipo_usuario."','".$this->titulo."','".$this->descripcion."')";
     $resul=$objConex->generarTransaccion($sql);
     return $resul;
   }
   
public function modificarTipoUsuario()
   { $objConex=new Conexion();
     $sql="UPDATE Tipo_Usuario SET titulo='".$this->titulo."', descripcion ='".$this->descripcion."' WHERE(id_tipo_usuario ='".$this->id_tipo_usuario."')";
     $resul=$objConex->generarTransaccion($sql);
     return $resul;
   } 
    
public function eliminarTipoUsuario()
   { $objConex=new Conexion();//Instanciar clase Conexion
     $sql="DELETE FROM Tipo_Usuario WHERE(id_tipo_usuario='".$this->id_tipo_usuario."')";
     $resul=$objConex->generarTransaccion($sql);
     return $resul;
   } 
public function buscarTipoUsuario()
   { $objConex=new Conexion();//Instanciar clase Conexion
     $sql="SELECT * FROM Tipo_Usuario WHERE(id_tipo_usuario='".$this->id_tipo_usuario."')";
     $vector=$objConex->generarTransaccion($sql);
     return $vector;
   } 
public function listarTipoUsuario()
   { $objConex=new Conexion();
     $sql="SELECT * FROM Tipo_Usuario";
     $matrix=$objConex->generarTransaccion($sql);
     return $matrix;
   } 
    
}//clase   
?>