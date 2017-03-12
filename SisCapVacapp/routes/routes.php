<?php

Class route{
	private $ruta;
	function ruta(){
		if ($this->ruta = "index")
		include '/views/header.php';
	}
	function nosostros(){
		if ($this->ruta = "nosotros")
			include '/views/nosotros.php';
	}
}