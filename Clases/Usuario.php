<?php

Class Usuario
{
	private $_nombre;
	private $_apellido;
	private $_edad;
	private $_dui;
	private $_nit;
	private $_direccion;
	private $_correo;
	private $_fechaNac;
	private $_id;
	private $_nickname;
	public function Usuario()
	{
		
	}
	
	public function getNombre()
	{
		return $this->_nombre;
	}
	public function setNombre($_nombre)
	{
		$this->_nombre=$_nombre;
	}
	public function getApellido()
	{
		return $this->_nombre;
	}
	public function setApellido($_apellido)
	{
		$this->_apellido=$_apellido;
	}
	public function getEdad()
	{
		return $this->_edad;
	}
	public function setEdad($_edad)
	{
		$this->_edad=$_edad;
	}
	public function getDui()
	{
		return $this->_dui;
	}
	public function setDui($_dui)
	{
		$this->_dui=$_dui;
	}
	public function getNit()
	{
		return $this->_dui;
	}
	public function setNit($_nit)
	{
		$this->_dui=$_dui;
	}
	public function getDireccion()
	{
		return $this->_direccion;
	}
	public function setDireccion($_direccion)
	{
		$this->_direccion=$_direccion;
	}
	public function getCorreo()
	{
		return $this->_correo;
	}
	public function setCorreo($_correo)
	{
		$this->_correo=$_correo;
	}
	public function getFechaNac()
	{
		return $this->_fechaNac;
	}
	public function setFechaNac($_fechaNac)
	{
		$this->_fechaNac;
	}
	
	public function setId($_id)
	{
		$this->_id;
	}
		public function getNickname()
	{
		return $this->_nickname;
	}
	public function setNickname($_nickname)
	{
		$this->_nickname;
	}
}	
?>