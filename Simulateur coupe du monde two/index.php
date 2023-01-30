<?php
    // require 'functions.php';
    if (isset($_COOKIE["teams"])) {
        $teams = json_decode($_COOKIE['teams'], true);
    } else {
        $teams = [
            "morocco" => ["POINTS" => 0, "played" => 0, "GAMES_WON" => 0, "GAMES_EQUAL" => 0, "GAMES_LOSTS" => 0, "GOALS_SCORED" => 0, "GOALS_RECEIVED" => 0, "DIFF" => 0],
            "croitia" => ["POINTS" => 0, "played" => 0, "GAMES_WON" => 0, "GAMES_EQUAL" => 0, "GAMES_LOSTS" => 0, "GOALS_SCORED" => 0, "GOALS_RECEIVED" => 0, "DIFF" => 0],
            "belgium" => ["POINTS" => 0, "played" => 0, "GAMES_WON" => 0, "GAMES_EQUAL" => 0, "GAMES_LOSTS" => 0, "GOALS_SCORED" => 0, "GOALS_RECEIVED" => 0, "DIFF" => 0],
            "canada" =>  ["POINTS" => 0, "played" => 0, "GAMES_WON" => 0, "GAMES_EQUAL" => 0, "GAMES_LOSTS" => 0, "GOALS_SCORED" => 0, "GOALS_RECEIVED" => 0, "DIFF" => 0],
        ];
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulateur coupe du monde</title>
    <!-- link bootsrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- link CSS -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="test.css">
</head>
<body>
    <!-- NAV -->
    <nav id="nav">
        <div class="logo">
            <img src="images/logo.png" width="100px" height="80px" >
        </div>
    </nav>
    <!-- slider -->
    <!-- <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators ">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner slide-one">
          <div class="carousel-item active">
          </div>
          <div class="carousel-item slide-two">
          </div>
          <div class="carousel-item slide-three">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div> -->
    <!-- ================================================== -->
    
    <!-- ================================================== -->
    <div>
        <h1 class="text-center">World Cup Simulator</h1>
    </div>

    <main class="m-5 d-flex gap-3">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
            <div class=" d-flex justify-content-between mb-3 card-color">
                <div class="w-100">
                    <h3 class="bg-dark text-light text-aligne-center d-flex justify-content-center">23 NOV 11:00 H</h3>
                    <div class="d-flex  align-items-center justify-content-end m-2">
                        <img src="images/morocco.jfif" alt="" class="rounded-circle" width="90px" height="80px">
                        <h2>MOROCCO</h2>
                    </div>
                </div>
                <div class="w-100">
                    <h3 class="bg-dark text-light d-flex justify-content-center">FINAL</h3>
                    <div class="d-flex">
                        <input type="number" min="0" name="inpMoroccoMatchOne" class="" width="45px" height="50px"  value="<?php echo $inpOne;?>">
                        <input type="number" min="0" name="inpCroitiaMatchOne" width="45px" height="50px"  value="">
                    </div>
                </div>
                <div class="w-100">
                    <h3 class="bg-dark text-light text-aligne-center d-flex justify-content-center">MATCH 1</h3>
                    <div class="d-flex  align-items-center justify-content-end m-2">
                        <h2>CROITIA</h2>
                        <img src="images/croitia.png" alt="" class="rounded-circle" width="90px" height="80px">
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mb-3 card-color">
                <div class="w-100">
                    <h3 class="bg-dark text-light text-aligne-center d-flex justify-content-center">23 NOV 11:00 H</h3>
                    <div class="d-flex  align-items-center justify-content-end m-2">
                        <img src="images/Belgium.png" alt="" class="rounded-circle" width="90px" height="80px">
                        <h2>Belgium</h2>
                    </div>
                </div>
                <div class="w-100">
                    <h3 class="bg-dark text-light d-flex justify-content-center">FINAL</h3>
                    <div class="d-flex">
                        <input type="number" min="0" name="inpBelgiumMatchTwo" class="" width="45px" height="50px">
                        <input type="number" min="0" name="inpCanadaMatchTwo" width="45px" height="50px">
                    </div>
                </div>
                <div class="w-100">
                    <h3 class="bg-dark text-light text-aligne-center d-flex justify-content-center">MATCH 2</h3>
                    <div class="d-flex  align-items-center justify-content-end m-2">
                        <h2>CANADA</h2>
                        <img src="images/canada.png" alt="" class="rounded-circle" width="90px" height="80px">
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mb-3 card-color">
                <div class="w-100">
                    <h3 class="bg-dark text-light text-aligne-center d-flex justify-content-center">23 NOV 11:00 H</h3>
                    <div class="d-flex  align-items-center justify-content-end m-2">
                        <img src="images/morocco.jfif" alt="" class="rounded-circle" width="90px" height="80px">
                        <h2>MOROCCO</h2>
                    </div>
                </div>
                <div class="w-100">
                    <h3 class="bg-dark text-light d-flex justify-content-center">FINAL</h3>
                    <div class="d-flex">
                        <input type="number" min="0" name="inpMoroccoMatchThree" class="" width="45px" height="50px">
                        <input type="number" min="0" name="inpBelgiumMatchThree" width="45px" height="50px">
                    </div>
                </div>
                <div class="w-100">
                    <h3 class="bg-dark text-light text-aligne-center d-flex justify-content-center">MATCH 3</h3>
                    <div class="d-flex  align-items-center justify-content-end m-2">
                        <h2>BELGIUM</h2>
                        <img src="images/Belgium.png" alt="" class="rounded-circle" width="90px" height="80px">
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mb-3 card-color">
                <div class="w-100">
                    <h3 class="bg-dark text-light text-aligne-center d-flex justify-content-center">23 NOV 11:00 H</h3>
                    <div class="d-flex  align-items-center justify-content-end m-2">
                        <img src="images/croitia.png" alt="" class="rounded-circle" width="90px" height="80px">
                        <h2>CROITIA</h2>
                    </div>
                </div>
                <div class="w-100">
                    <h3 class="bg-dark text-light d-flex justify-content-center">FINAL</h3>
                    <div class="d-flex">
                        <input type="number" name="inpCroitiaMatchFoor" min="0" class="" width="45px" height="50px">
                        <input type="number" name="inpCanadaMatchFoor" min="0" width="45px" height="50px">
                    </div>
                </div>
                <div class="w-100">
                    <h3 class="bg-dark text-light text-aligne-center d-flex justify-content-center">MATCH 4</h3>
                    <div class="d-flex  align-items-center justify-content-end m-2">
                        <h2>CANADA</h2>
                        <img src="images/canada.png" alt="" class="rounded-circle" width="90px" height="80px">
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mb-3 card-color">
                <div class="w-100">
                    <h3 class="bg-dark text-light text-aligne-center d-flex justify-content-center">23 NOV 11:00 H</h3>
                    <div class="d-flex  align-items-center justify-content-end m-2">
                        <img src="images/canada.png" alt="" class="rounded-circle" width="90px" height="80px">
                        <h2>CANADA</h2>
                    </div>
                </div>
                <div class="w-100">
                    <h3 class="bg-dark text-light d-flex justify-content-center">FINAL</h3>
                    <div class="d-flex">
                        <input type="number" min="0" name="inpBelgiumMatchFive" class="" width="45px" height="50px">
                        <input type="number" min="0" name="inpCroitiaMatchFive" width="45px" height="50px">
                    </div>
                </div>
                <div class="w-100">
                    <h3 class="bg-dark text-light text-aligne-center d-flex justify-content-center">MATCH 5</h3>
                    <div class="d-flex  align-items-center justify-content-end m-2">
                        <h2>CROITIA</h2>
                        <img src="images/croitia.png" alt="" class="rounded-circle" width="90px" height="80px">
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mb-3 card-color">
                <div class="w-100">
                    <h3 class="bg-dark text-light d-flex justify-content-center">23 NOV 11:00 H</h3>
                    <div class="d-flex  align-items-center justify-content-end m-2">
                        <img src="images/morocco.jfif" alt="" class="rounded-circle" width="90px" height="80px">
                        <h2>MOROCCO</h2>
                    </div>
                </div>
                <div class="w-100">
                    <h3 class="bg-dark text-light d-flex justify-content-center">FINAL</h3>
                    <div class="d-flex">
                        <input type="number" min="0" name="inpMoroccoMatchSix" class="" width="45px" height="50px">
                        <input type="number" min="0" name="inpCanadaMatchSix" width="45px" height="50px">
                    </div>
                </div>
                <div class="w-100">
                    <h3 class="bg-dark text-light text-aligne-center d-flex justify-content-center">MATCH 6</h3>
                    <div class="d-flex  align-items-center justify-content-end m-2">
                        <h2>CANADA</h2>
                        <img src="images/canada.png" alt="" class="rounded-circle" width="90px" height="80px">
                    </div>
                </div>
            </div>
            <!-- <button >ADD</button> -->
            <button type="submit" name="submit" class="btn btn-danger ml-5 container w-50 h-15 h1 d-flex justify-content-center">Simulateur</button>
        </form>
    <!-- Create Table -->
      <table class="table w-50">
        <thead>
          <tr>
            <th class="text-bg-secondary" scope="col">#</th>
            <th class="text-bg-secondary" scope="col">Team</th>
            <th class="text-bg-secondary" scope="col">PTS.</th>
            <th class="text-bg-secondary" scope="col">MTH.</th>
            <th class="text-bg-secondary" scope="col">WIN.</th>
            <th class="text-bg-secondary" scope="col">GAMES_EQUAL</th>
            <th class="text-bg-secondary" scope="col">GAMES_LOSTS</th>
            <th class="text-bg-secondary" scope="col">G.F.</th>
            <th class="text-bg-secondary" scope="col">G.C.</th>
            <th class="text-bg-secondary" scope="col">+/-</th>
          </tr>
        </thead>
            <tbody>
             <?php
                $i = 1;        
                // ======================= Matches are run according to goals and POINTSs ... ==============================
              if(isset($_GET['submit'])) { 
                // click in button add result
                //===match 1
                if ($_GET['inpMoroccoMatchOne'] != "" && $_GET['inpCroitiaMatchOne'] != "") {
                  #morocco
                  $teams["morocco"]["played"] += 1;
                  $teams["morocco"]['GOALS_SCORED'] += $_GET['inpMoroccoMatchOne'];
                  $teams["morocco"]['GOALS_RECEIVED'] += $_GET['inpCroitiaMatchOne'];
                  #Croitia
                  $teams["croitia"]['played'] += 1;
                  $teams["croitia"]['GOALS_SCORED'] += $_GET['inpCroitiaMatchOne'];
                  $teams["croitia"]['GOALS_RECEIVED'] += $_GET['inpMoroccoMatchOne'];
                  if ($_GET['inpMoroccoMatchOne'] > $_GET['inpCroitiaMatchOne'] ) {
                          $teams["morocco"]['POINTS'] += 3;
                          $teams["morocco"]['GAMES_WON'] += 1;
                          $teams["croitia"]['GAMES_LOSTS'] += 1;
                  } elseif ($_GET['inpMoroccoMatchOne'] < $_GET['inpCroitiaMatchOne']) {
                          $teams["croitia"]['POINTS'] += 3;
                          $teams["croitia"]['GAMES_WON'] += 1;
                          $teams["morocco"]['GAMES_LOSTS'] += 1;
                  } else {
                          $teams["croitia"]['POINTS'] += 1;
                          $teams["croitia"]['GAMES_EQUAL'] += 1;
                          $teams["morocco"]['POINTS'] += 1;
                          $teams["morocco"]['GAMES_EQUAL'] += 1;
                  };
                };
                //===Match 2
                if ($_GET['inpBelgiumMatchTwo'] != "" && $_GET['inpCanadaMatchTwo'] != "") {
                  #Belgium
                  $teams["belgium"]['played'] += 1;
                  $teams["belgium"]['GOALS_SCORED'] += $_GET['inpBelgiumMatchTwo'];
                  $teams["belgium"]['GOALS_RECEIVED'] += $_GET['inpCanadaMatchTwo'];
                  # Canada
                  $teams["canada"]['played'] += 1;
                  $teams["canada"]['GOALS_SCORED'] += $_GET['inpCanadaMatchTwo'];
                  $teams["canada"]['GOALS_RECEIVED'] += $_GET['inpBelgiumMatchTwo'];
                  if ($_GET['inpBelgiumMatchTwo'] > $_GET['inpCanadaMatchTwo'] ) {
                          $teams["belgium"]['POINTS'] += 3;
                          $teams["belgium"]['GAMES_WON'] += 1;
                          $teams["canada"]['GAMES_LOSTS'] += 1;
                  } elseif ($_GET['inpBelgiumMatchTwo'] < $_GET['inpCanadaMatchTwo']) {
                          $teams["canada"]['POINTS'] += 3;
                          $teams["canada"]['GAMES_WON'] += 1;
                          $teams["belgium"]['GAMES_LOSTS'] += 1;
                  } else {
                          $teams["belgium"]['POINTS'] += 1;
                          $teams["belgium"]['GAMES_EQUAL'] += 1;
                          $teams["canada"]['POINTS'] += 1;
                          $teams["canada"]['GAMES_EQUAL'] += 1;
                  };
                };
                //===Match 3
                if ($_GET['inpMoroccoMatchThree'] != "" && $_GET['inpBelgiumMatchThree'] != "") {     
                  # Morocco
                  $teams["morocco"]['played'] += 1;
                  $teams["morocco"]['GOALS_SCORED'] += $_GET['inpMoroccoMatchThree'];
                  $teams["morocco"]['GOALS_RECEIVED'] += $_GET['inpBelgiumMatchThree'];
                  #Belgium
                  $teams["belgium"]['played'] += 1;
                  $teams["belgium"]['GOALS_SCORED'] += $_GET['inpBelgiumMatchThree'];
                  $teams["belgium"]['GOALS_RECEIVED'] += $_GET['inpMoroccoMatchThree'];
                  if ($_GET['inpMoroccoMatchThree'] > $_GET['inpBelgiumMatchThree'] ) {
                          $teams["morocco"]['POINTS'] += 3;
                          $teams["morocco"]['GAMES_WON'] += 1;
                          $teams["belgium"]['GAMES_LOSTS'] += 1;
                  } elseif ($_GET['inpMoroccoMatchThree'] < $_GET['inpBelgiumMatchThree']) {
                          $teams["belgium"]['POINTS'] += 3;
                          $teams["belgium"]['GAMES_WON'] += 1;
                          $teams["morocco"]['GAMES_LOSTS'] += 1;
                  } else {
                          $teams["morocco"]['POINTS'] += 1;
                          $teams["morocco"]['GAMES_EQUAL'] += 1;
                          $teams["belgium"]['POINTS'] += 1;
                          $teams["belgium"]['GAMES_EQUAL'] += 1;
                  };
                };
                //=== Match 4
                if ($_GET['inpCroitiaMatchFoor'] != "" && $_GET['inpCanadaMatchFoor'] != "") {
                  #Croitia
                  $teams["croitia"]['played'] += 1;
                  $teams["croitia"]['GOALS_SCORED'] += $_GET['inpCroitiaMatchFoor'];
                  $teams["croitia"]['GOALS_RECEIVED'] += $_GET['inpCanadaMatchFoor'];
                  #Cnada
                  $teams["canada"]['played'] += 1;
                  $teams["canada"]['GOALS_SCORED'] += $_GET['inpCanadaMatchFoor'];
                  $teams["canada"]['GOALS_RECEIVED'] += $_GET['inpCroitiaMatchFoor'];
                  if ($_GET['inpCroitiaMatchFoor'] > $_GET['inpCanadaMatchFoor'] ) {
                          $teams["croitia"]['POINTS'] += 3;
                          $teams["croitia"]['GAMES_WON'] += 1;
                          $teams["canada"]['GAMES_LOSTS'] += 1;
                  } elseif ($_GET['inpCroitiaMatchFoor'] < $_GET['inpCanadaMatchFoor']) {
                          $teams["canada"]['POINTS'] += 3;
                          $teams["canada"]['GAMES_WON'] += 1;
                          $teams["croitia"]['GAMES_LOSTS'] += 1;
                  } else {
                          $teams["croitia"]['POINTS'] += 1;
                          $teams["croitia"]['GAMES_EQUAL'] += 1;
                          $teams["canada"]['POINTS'] += 1;
                          $teams["canada"]['GAMES_EQUAL'] += 1;
                  };
                };
                //=== Match 5
                if ($_GET['inpBelgiumMatchFive'] != "" && $_GET['inpCroitiaMatchFive'] != "") {
                  #Belgium
                  $teams["belgium"]['played'] += 1;
                  $teams["belgium"]['GOALS_SCORED'] += $_GET['inpBelgiumMatchFive'];
                  $teams["belgium"]['GOALS_RECEIVED'] += $_GET['inpCroitiaMatchFive'];
                  #Croitia
                  $teams["croitia"]['played'] += 1;
                  $teams["croitia"]['GOALS_SCORED'] += $_GET['inpCroitiaMatchFive'];
                  $teams["croitia"]['GOALS_RECEIVED'] += $_GET['inpBelgiumMatchFive'];
                  if ($_GET['inpBelgiumMatchFive'] > $_GET['inpCroitiaMatchFive'] ) {
                          $teams["belgium"]['POINTS'] += 3;
                          $teams["belgium"]['GAMES_WON'] += 1;
                          $teams["croitia"]['GAMES_LOSTS'] += 1;
                  } elseif ($_GET['inpBelgiumMatchFive'] < $_GET['inpCroitiaMatchFive']) {
                          $teams["croitia"]['POINTS'] += 3;
                          $teams["croitia"]['GAMES_WON'] += 1;
                          $teams["belgium"]['GAMES_LOSTS'] += 1;
                  } else {
                          $teams["belgium"]['POINTS'] += 1;
                          $teams["belgium"]['GAMES_EQUAL'] += 1;
                          $teams["croitia"]['POINTS'] += 1;
                          $teams["croitia"]['GAMES_EQUAL'] += 1;
                      };
                };
                //=== Match 6  
                if ($_GET['inpMoroccoMatchSix'] != "" && $_GET['inpCanadaMatchSix'] != "") {
                    #Moroco 
                    $teams["morocco"]['played'] += 1;
                    $teams["morocco"]['GOALS_SCORED'] += $_GET['inpMoroccoMatchSix'];
                    $teams["morocco"]['GOALS_RECEIVED'] += $_GET['inpCanadaMatchSix'];
                    #Canada
                    $teams["canada"]['played'] += 1;
                    $teams["canada"]['GOALS_SCORED'] += $_GET['inpCanadaMatchSix'];
                    $teams["canada"]['GOALS_RECEIVED'] += $_GET['inpMoroccoMatchSix'];
                    if ($_GET['inpMoroccoMatchSix'] > $_GET['inpCanadaMatchSix'] ) {
                        $teams["morocco"]['POINTS'] += 3;
                        $teams["morocco"]['GAMES_WON'] += 1;
                        $teams["canada"]['GAMES_LOSTS'] += 1;
                    } elseif ($_GET['inpMoroccoMatchSix'] < $_GET['inpCanadaMatchSix']) {
                        $teams["canada"]['POINTS'] += 3;
                        $teams["canada"]['GAMES_WON'] += 1;
                        $teams["morocco"]['GAMES_LOSTS'] += 1;
                    } else {
                             $teams["morocco"]['POINTS'] += 1;
                             $teams["morocco"]['GAMES_EQUAL'] += 1;
                             $teams["canada"]['POINTS'] += 1;
                             $teams["canada"]['GAMES_EQUAL'] += 1;
                            };
                };
                /*
                =============================== Sort  ==========================================
                */   
                $columns = array_column($teams, 'POINTS');
                array_multisort($columns, SORT_DESC, $teams);
                
                // foreach ($teams as $keyTeams => $valueTeams) {
                //     if ($valueTeams["POINTS"] == $valueTeams["POINTS"]) {
                //         $columns = array_column($teams, 'DIFF');
                //         array_multisort($columns, SORT_DESC, $teams);
                //     }
                // }
                
                
                if ($teams["morocco"]['POINTS'] == $teams["croitia"]['POINTS'] && $teams["belgium"]['POINTS'] == $teams["canada"]['POINTS'] && $teams["morocco"]['POINTS'] == $teams["canada"]['POINTS']) {
                    $columns = array_column($teams, 'GOALS_SCORED');
                    array_multisort($columns, SORT_DESC, $teams);
                } else {
                    $columns = array_column($teams, 'POINTS');
                    array_multisort($columns, SORT_DESC, $teams);
                }
              }; // close button submite

                // setcookie('teams', json_encode($teams));
                /*
                =============================== shw data in table (tbody) ==========================================
                */   
                $i;
                foreach ($teams as $key => $value) :
                    $DIFFzz = ($value['GOALS_SCORED'] - $value['GOALS_RECEIVED']); // Goal DIFFerence calculation
                    // show row in table (tbody)
                            echo 
                            "<tr>
                                <th>" . $i . "</th>     
                                <th>" . $key . "</th>
                                <td>" . $value['POINTS'] . "</td>
                                <td>" . $value['played'] . "</td>
                                <td>" . $value['GAMES_WON'] . "</td>
                                <td>" . $value['GAMES_EQUAL'] . "</td>
                                <td>" . $value['GAMES_LOSTS'] . "</td>
                                <td>" .$value['GOALS_SCORED'] . "</td>
                                <td>" .$value['GOALS_RECEIVED'] . "</td>
                                <td>" .$DIFFzz . "</td>
                            </tr>";
                            $i++;
                endforeach; 
                ?>
            </tbody>
      </table>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>