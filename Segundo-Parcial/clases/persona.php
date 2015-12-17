<?php

class persona
{
	public $id;
	public $localidad;
 	public $calle;
  	public $numCasa;
  	
		public static function TraerUsuario()
		{
			$objetoAccesoDatos = AccesoDatos::dameUnObjetoAcceso();
			$consulta = $objetoAccesoDatos->RetornarConsulta("SELECT * from persona");
			$consulta->execute();
			return $consulta->fetchAll(PDO::FETCH_CLASS, 'persona');
		}

		public function Borrar()
		{
	 		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta(
			   "DELETE 
				from persona 				
				WHERE id=:id");	
			$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);		
			$consulta->execute();
			return $consulta->rowCount();
		}


		 public function InsertarUsuarios() //si le pongo static no hace falta poner this
		 {
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("INSERT into persona (localidad,calle,numCasa)
													values('$this->localidad','$this->calle','$this->numCasa')");
			$consulta->execute();
			return $objetoAccesoDato->RetornarUltimoIdInsertado();
		 }

		public function ModificarUsuarios()
		{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta(
			   "UPDATE usuario 
				set 
				localidad='$this->localidad',
				calle='$this->calle',
				numCasa='$this->numCasa'
				WHERE id='$this->id'");
			return $consulta->execute();
			// 	return true;
			// else
			// 	return false;
		 }

}

?>
