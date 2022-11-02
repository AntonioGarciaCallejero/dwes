<?php

class Persona  
{
  // con sus atributos
  public $nombre;
  public $apellido;
  public $edad;

  //un metodo consctructor
  public function __construct($nombre, $apellido, $edad)
  {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->edad = $edad;
  }
  
  public function saludar()
  {
    echo "Buenos días!";
  }

  public function __toString()
  {
    return $this->nombre;
  }
}
