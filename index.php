<?php

require_once __DIR__ . "/models/Production.php";
require_once __DIR__ . "/models/Genre.php";
require_once __DIR__ . "/db.php";

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

    <!-- Header -->
    <header>
        
    </header>

    <!-- Main -->
    <main>
      <div class="container">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Language</th>
              <th scope="col">Vote</th>
              <th scope="col">Genre</th>
            </tr>
          </thead>
          <tbody>
            <?php
              for($i = 0; $i < count($movie); $i++){
                $el = $movie[$i];
                ?>
                <tr>
                  <th scope="row"><?= $i +1 ?></th>
                  <td><?= $el->title ?></td>
                  <td><?= $el->language ?></td>
                  <td><?= $el->vote ?></td>
                  <td><?= $el->genre->name ?></td>
                </tr>
                <?php
              }
            ?>
          </tbody>
        </table>
      </div>
    </main>

    <!-- Footer -->
    <footer>

    </footer>

  </div>

  <script src="./js/app.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>