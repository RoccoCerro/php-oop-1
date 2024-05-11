<?php
require_once __DIR__ . "/models/Movie.php";
require_once __DIR__ . "/models/TVSerie.php";
require_once __DIR__ . "/models/Genre.php";

$romantic = new Genre("Romantic", "Passion, love, art, seduction");
$action = new Genre("Action", "Adrenalina, suspanse");
$commedy = new Genre("Romantic");
$fantasy = new Genre();

$genres = [
  $romantic,
  $action,
  $commedy
];

var_dump($genres);

$general = [
  new Movie("Fast and furious", "ita", 3, [$romantic, $action], 355000,"2:20':22\""),
  new Movie("La vita è bella", "ita", 3, $genres, 355000,"2:20':22\""),
  new Movie("Tornado", "ita", 3, $genres, 355000,"2:20':22\""),
  new Movie("Bornaut", "ita", 3, $genres, 355000,"2:20':22\""),
  new Movie("Terminator", "ita", 3, $genres, 355000,"2:20':22\""),
  new TvSerie ("La casa di carta", "ita", 3, $genres, 34),
  new TvSerie ("Simpson", "ita", 3, $genres, 34),
  new TvSerie ("Berlino", "ita", 3, $genres, 34),
  new TvSerie ("Fiodena", "ita", 3, $genres, 34)
  
];
