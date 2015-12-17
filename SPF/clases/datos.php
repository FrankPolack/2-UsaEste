<?php
class datos
{
	public $id;
	public $localidad;
	public $num;
	public $calle;
	

	public static function TraerDatos()
	{
		$objetoAccesoDatos = AccesoDatos::dameUnObjetoAcceso();
		$consulta=$objetoAccesoDatos->RetornarConsulta("SELECT * from datos");
		$consulta->execute();
		return $consulta->fetchAll(PDO::FETCH_CLASS,'datos'); 
	}

    public function InsertarDatos()
	{
		$objetoAccesoDatos = AccesoDatos::dameUnObjetoAcceso();
		$consulta = $objetoAccesoDatos->RetornarConsulta("INSERT INTO datos (localidad,num,calle) values('$this->localidad','$this->num','$this->calle')");				
		$consulta->execute();

	}

	public function ModificarDatos()
	{
		$objetoAccesoDatos = AccesoDatos::dameUnObjetoAcceso();
		$consulta = $objetoAccesoDatos->RetornarConsulta("UPDATE datos set localidad='$this->localidad',
				num='$this->num',
				calle='$this->calle'
				WHERE id='$this->id'");
		
		
		$consulta->execute();
	}

    public function BorrarDatos()
	{
		$objetoAccesoDatos = AccesoDatos::dameUnObjetoAcceso();
		$consulta = $objetoAccesoDatos->RetornarConsulta("DELETE from datos where id=:paramId");
		$consulta->bindValue(':paramId', $this->id, PDO::PARAM_INT);				
		$consulta->execute();
	}

	public static function TraerUnDato($id) 
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("SELECT * FROM datos where id=$id");
		$consulta->execute();				 
		$datoBuscado= $consulta->fetchObject('datos');
		return $datoBuscado;
					
	}
}
?>