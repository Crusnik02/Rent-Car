<?php

Class Vehiculo
{
	private $_tipo;
	private $_marca;
	private $_modelo;
	private $_año;
	
	Public function Vehiculo()
	{
		
	}
	public function getMarca()
	{
		return $this->_marca;
	}
	public function setMarca()
	{
		$this->_marca=$_marca;
	}
	public function getModelo()
	{
		return $this->_modelo;
	}
	public function setModelo()
	{
		$this->_modelo=$_modelo;
	}
	
	public function getAño()
	{
		return $this->_año;
	}
	public function setAño()
	{
		$this->_año=$_año;
	}
	public function getTipo()
	{
		return $this->_tipo;
	}
	public function setTipo($_tipo)
	{
		$this->_tipo=$_tipo;
	}
}
?>
