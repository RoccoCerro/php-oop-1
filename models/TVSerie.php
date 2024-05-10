<?php
Class TvSerie extends Production
{
  public $numero_di_stagioni;

  function __construct(string $_title, string $_language, int $_vote, Genre $_genre, int $_numero_di_stagioni){

    parent::__construct($_title, $_language, $_vote, $_genre);
    $this->numero_di_stagioni = $_numero_di_stagioni;
  }
}

$x = new TvSerie("Fast and furious", "ita", 3, $romantic, 34);