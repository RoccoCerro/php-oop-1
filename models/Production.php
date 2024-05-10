<?php
require_once __DIR__ ."/Genre.php";
class Production
{
  
  function __construct(public string $title, public string $language, public int $vote, public Genre $genre)
  {
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