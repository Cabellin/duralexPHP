<?php
require_once("../datos/Conexion.php");
class Atencion
{  private $id_atencion;
   private $fecha_atencion;
   private $estado;
   private $usuario_rut;
   private $abogado_rut_abogado;


 
   public function __construct(){}
   
   public function Atencion($id_atencion,$fecha_atencion,$estado,$usuario_rut,$abogado_rut_abogado)
   { $this->id_atencion=$id_atencion;
     $this->fecha_atencion=$fecha_atencion;
     $this->estado=$estado;
     $this->usuario_rut=$usuario_rut;
     $this->abogado_rut_abogado=$abogado_rut_abogado;

   }
   //ACCESADORES
   public function getId_atencion()                 {return $this->id_atencion;}
   public function getFecha_atencion()              {return $this->fecha_atencion;}
   public function getEstado()			            {return $this->estado;}
   public function getUsuario_rut()	                {return $this->usuario_rut;}
   public function getAbogado_rut_abogado()         {return $this->abogado_rut_abogado;}

   //MUTANTES
   public function setId_atencion($id_atencion)		                {$this->id_atencion=$id_atencion;}   
   public function setFecha_atencion($fecha_atencion)		        {$this->fecha_atencion=$fecha_atencion;}
   public function setEstado($estado)		                        {$this->estado=$estado;}
   public function setUsuario_rut($usuario_rut)         	        {$this->usuario_rut=$usuario_rut;}
   public function setAbogado_rut_abogado($abogado_rut_abogado)	    {$this->abogado_rut_abogado=$abogado_rut_abogado;}

   //NEGOCIO
public function ingresarAtencion()
   { $objConex=new Conexion();
     $sql="INSERT INTO Atencion VALUES('".$this->id_atencion."','".$this->fecha_atencion."','".$this->estado."','".$this->usuario_rut."','".$this->abogado_rut_abogado."')";
     $resul=$objConex->generarTransaccion($sql);
     return $resul;
   }
   
public function modificarAtencion()
   { $objConex=new Conexion();
     $sql="UPDATE Atencion SET fecha_atencion='".$this->fecha_atencion."', estado ='".$this->estado."' WHERE (id_atencion ='".$this->id_atencion."')";
     $resul=$objConex->generarTransaccion($sql);
     return $resul;
   } 
    
public function eliminarAtencion()
   { $objConex=new Conexion();//Instanciar clase Conexion
     $sql="DELETE FROM Atencion WHERE(id_atencion ='".$this->id_atencion."')";
     $resul=$objConex->generarTransaccion($sql);
     return $resul;
   } 
public function buscarAtencion()
   { $objConex=new Conexion();//Instanciar clase Conexion
     $sql="SELECT * FROM Atencion WHERE(id_atencion ='".$this->id_atencion."')";
     $vector=$objConex->generarTransaccion($sql);
     return $vector;
   } 
public function listarAtencion()
   { $objConex=new Conexion();
     $sql="SELECT * FROM Atencion";
     $matrix=$objConex->generarTransaccion($sql);
     return $matrix;
   } 
    
}//clase   
?>