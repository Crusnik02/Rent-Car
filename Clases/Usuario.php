<?php

Class Usuario
{
	protected $_nombre1;
	protected $_nombre2;
	protected $_apellido1;
	protected $_apellido2;
	protected $_correo;
	protected $_dui;
	protected $_nit;
	protected $_fechaNac;
	protected $_nickName;
	public function Usuario()
	{
		
	}
	
	public function getNombre1()
	{
		return $this->_nombre;
	}
	public function setNombre1($_nombre1)
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