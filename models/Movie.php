<?php
require_once __DIR__ . "/Production.php";
require_once __DIR__ ."/Genre.php";
class Movie extends Production
{

  public $profits;
  public $duration;

  function __construct(string $_title, string $_language, int $_vote, $_genre, int $_profits, string $_duration){
    parent::__construct($_title, $_language, $_vote, $_genre);
    $this->profits = $_profits;
    $this->duration = $_duration;
  }
}

// $y = new Movie("Fast and furious", "ita", 3, $romantic, 355000,"2:20':22\"");
