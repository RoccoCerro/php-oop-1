<?php

require_once __DIR__ . "/models/Production.php";
require_once __DIR__ . "/models/Genre.php";
require_once __DIR__ . "/db.php";
require_once __DIR__ . "/models/TVSerie.php";
require_once __DIR__ . "/models/Movie.php";

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

        <!-- General -->
        <h1 class="text-center p-4">Production</h1>
        <section>
          <div class="container">
            <div class="row">
              <?php
                for($i = 0; $i < count($general); $i++){
                  $el = $general[$i];
                ?>
                <div class="col-4">
                  <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">
                    <?php
                      if($el->identifier() === "SerieTv"){
                        ?>
                        SerieTv
                        <?php
                      }else{
                        ?>
                        Film
                        <?php
                      }
                    ?>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Title: <?= $el->title ?></h5>
                      <p class="card-text">
                        <ul class="list-group list-unstyled">
                          <li class="">Language: <?= $el->language ?></li>
                          <li class="">Vote: <?= $el->vote ?></li>
                          <li class="">Genre: 
                          <?php
                          foreach($el->genres as $key => $element){
                            if($key < count($el->genres)-1){
                              echo $element->name . ", ";
                            }else{
                              echo $element->name;
                            }
                          }
                          ?>
                          </li>
                          <li>
                          <?php
                          if($el->identifier() === "SerieTv"){
                            echo "N.Season: ".$el->numero_di_stagioni;
                          }else{
                            echo "Profits: ".$el->profits;
                          }
                          ?>
                          </li>
                          <li>
                          <?php
                          if($el->identifier() === "Film"){
                            echo "Duration: ".$el->duration;
                          }
                          ?>
                          </li>
                        </ul>
                      </p>
                    </div>
                  </div>
                </div>
                <?php
              }
              ?>
              </div>
            </div>
          </div>
        </section>
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