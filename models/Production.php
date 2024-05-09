<?php
class Production
{

  public $title;
  public $language;
  public $vote;

  function __construct(string $_title, string $_language, int $_vote)
  {
    $this->setTitle($_title);
    $this->language = $_language;
    $this->vote = $_vote;
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