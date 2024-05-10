<?php

class Genre 
{
  public $name;
  public $description;

  public function __construct($name = "Nessun genere", $description = "Nessuna descrizione"){
    $this->name = $name;
    $this->description = $description;
  }
}