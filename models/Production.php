<?php
require_once __DIR__ ."/Genre.php";
class Production
{

  public $title;
  public $language;
  public $vote; 
  public $genres = [];
  
  function __construct(string $_title, string $_language, int $_vote, $_genre)
  {
    $this->title = $_title;
    $this->language = $_language;
    $this->vote = $_vote;
    // $this->genres = $_genre;

    foreach ($_genre as $key => $el) {
      $this->genres[$key] = $el;
    } 

  }

  public function setTitle(string $_title)
  {
    $this->title = $_title;
  }

  public function getTitle()
  {
    return $this->title;
  }


}