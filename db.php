<?php

$romantic = new Genre();
$romantic->name = "Romantic";
$romantic->description = "Passion, love, art, seduction";

$genre = [
  $romantic
];

$movie = [
  new Production("Fast and furious 5", "ita", 10, $romantic),
  new Production("La vita è bella", "eng", 5, $romantic)
  
];

