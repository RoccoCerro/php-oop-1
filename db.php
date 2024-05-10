<?php
require_once __DIR__ . "/models/Movie.php";
require_once __DIR__ . "/models/TVSerie.php";

$romantic = new Genre();
$romantic->name = "Romantic";
$romantic->description = "Passion, love, art, seduction";

$general = [
  new Movie("Fast and furious", "ita", 3, $romantic, 355000,"2:20':22\""),
  new Movie("La vita è bella", "ita", 3, $romantic, 355000,"2:20':22\""),
  new Movie("Tornado", "ita", 3, $romantic, 355000,"2:20':22\""),
  new Movie("Bornaut", "ita", 3, $romantic, 355000,"2:20':22\""),
  new Movie("Terminator", "ita", 3, $romantic, 355000,"2:20':22\""),
  new TvSerie ("La casa di carta", "ita", 3, $romantic, 34),
  new TvSerie ("Simpson", "ita", 3, $romantic, 34),
  new TvSerie ("Berlino", "ita", 3, $romantic, 34),
  new TvSerie ("Fiodena", "ita", 3, $romantic, 34)
  
];
