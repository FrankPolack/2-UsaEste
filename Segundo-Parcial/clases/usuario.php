<?php
 
 
  class usuario
  {
  	public $id;
  	public $nombre;
  	public $foto;


  		public static function TraerFoto()
		{
			$objetoAccesoDatos = AccesoDatos::dameUnObjetoAcceso();
			$consulta = $objetoAccesoDatos->RetornarConsulta("SELECT * from usuario");
			$consulta->execute();
			return $consulta->fetchAll(PDO::FETCH_CLASS, 'usuario');
		}

		 public function Insertar() 
		 {
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("INSERT into usuario (nombre,foto)
													values('$this->nombre','$this->foto')");
			$consulta->execute();
			return $objetoAccesoDato->RetornarUltimoIdInsertado();
		 }

		public function Modificar()
		{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta(
			   "UPDATE usuario 
				set 
				nombre='$this->nombre',
				foto='$this->foto'
				WHERE id='$this->id'");
			return $consulta->execute();
		 } 	
		
		public function GuardarFoto()
		{
			 if ($this->id>0)
			 {
			 	$this->Modificar(); 
			 }
			 else
			 {
			 	echo "ins";
			 	$this->Insertar();
			 }
		}  	

		public function BorrarFoto()
		{
	 		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta(
			   "DELETE 
				from usuario 				
				WHERE id=:id");	
			$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);		
			$consulta->execute();
			return $consulta->rowCount();
		}

  }

?>
