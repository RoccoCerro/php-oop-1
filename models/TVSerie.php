<?php
require_once __DIR__ . "/Production.php";
require_once __DIR__ ."/Genre.php";
Class TvSerie extends Production
{
  public $numero_di_stagioni;

  function __construct(string $_title, string $_language, int $_vote, $_genre, int $_numero_di_stagioni){

    parent::__construct($_title, $_language, $_vote, $_genre);
    $this->numero_di_stagioni = $_numero_di_stagioni;
  }

  public function identifier(){
    return "SerieTv";
  }
}
