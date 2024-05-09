<?php

// class Production
// {

//   public $title;
//   public $language;
//   public $vote;

//   function __construct(string $_title, string $_language, int $_vote)
//   {
//     $this->setTitle($_title);
//     $this->language = $_language;
//     $this->vote = $_vote;
//   }

//   public function setTitle(string $_title)
//   {
//     $this->title = $_title;
//   }

//   public function getTitle()
//   {
//     return $this->title;
//   }
// }

require_once __DIR__ . "/models/Production.php";
require_once __DIR__ ."/db.php";

// $movie = new Production("Fast and furious 5", "ita", 10);
// var_dump($movie);

// $movie2 = new Production("La vita è bella", "eng", 5);
// var_dump($movie2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

  <div id="app">

    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Language</th>
            <th scope="col">Vote</router-link></th>
          </tr>
        </thead>
        <tbody>
          <?php
            for($i = 0; $i < count($movie); $i++){
              $el = $movie[$i];
              ?>
              <tr>
                <th scope="row">1</th>
                <td><?= $el->title ?></td>
                <td><?= $el->language ?></td>
                <td><?= $el->vote ?></td>
              </tr>
              <?php
            }
          ?>
        </tbody>
      </table>
    </div>

  </div>

  <script src="./js/app.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>