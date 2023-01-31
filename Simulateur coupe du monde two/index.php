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
    <!-- ================================================== -->
    <div>
        <h1 class="text-center">World Cup Simulator</h1>
    </div>

    <?php
                        $i = 1;        
                // ======================= Matches are run according to goals and POINTSs ... ==============================
              if(isset($_POST['submit'])) { 
                // click in button add result
                //===match 1
                if ($_POST['inpMoroccoMatchOne'] != "" && $_POST['inpCroitiaMatchOne'] != "") {
                  #morocco
                  $teams["morocco"]["played"] += 1;
                  $teams["morocco"]['GOALS_SCORED'] += $_POST['inpMoroccoMatchOne'];
                  $teams["morocco"]['GOALS_RECEIVED'] += $_POST['inpCroitiaMatchOne'];
                  #Croitia
                  $teams["croitia"]['played'] += 1;
                  $teams["croitia"]['GOALS_SCORED'] += $_POST['inpCroitiaMatchOne'];
                  $teams["croitia"]['GOALS_RECEIVED'] += $_POST['inpMoroccoMatchOne'];
                  if ($_POST['inpMoroccoMatchOne'] > $_POST['inpCroitiaMatchOne'] ) {
                          $teams["morocco"]['POINTS'] += 3;
                          $teams["morocco"]['GAMES_WON'] += 1;
                          $teams["croitia"]['GAMES_LOSTS'] += 1;
                  } elseif ($_POST['inpMoroccoMatchOne'] < $_POST['inpCroitiaMatchOne']) {
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
                if ($_POST['inpBelgiumMatchTwo'] != "" && $_POST['inpCanadaMatchTwo'] != "") {
                  #Belgium
                  $teams["belgium"]['played'] += 1;
                  $teams["belgium"]['GOALS_SCORED'] += $_POST['inpBelgiumMatchTwo'];
                  $teams["belgium"]['GOALS_RECEIVED'] += $_POST['inpCanadaMatchTwo'];
                  # Canada
                  $teams["canada"]['played'] += 1;
                  $teams["canada"]['GOALS_SCORED'] += $_POST['inpCanadaMatchTwo'];
                  $teams["canada"]['GOALS_RECEIVED'] += $_POST['inpBelgiumMatchTwo'];
                  if ($_POST['inpBelgiumMatchTwo'] > $_POST['inpCanadaMatchTwo'] ) {
                          $teams["belgium"]['POINTS'] += 3;
                          $teams["belgium"]['GAMES_WON'] += 1;
                          $teams["canada"]['GAMES_LOSTS'] += 1;
                  } elseif ($_POST['inpBelgiumMatchTwo'] < $_POST['inpCanadaMatchTwo']) {
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
                if ($_POST['inpMoroccoMatchThree'] != "" && $_POST['inpBelgiumMatchThree'] != "") {     
                  # Morocco
                  $teams["morocco"]['played'] += 1;
                  $teams["morocco"]['GOALS_SCORED'] += $_POST['inpMoroccoMatchThree'];
                  $teams["morocco"]['GOALS_RECEIVED'] += $_POST['inpBelgiumMatchThree'];
                  #Belgium
                  $teams["belgium"]['played'] += 1;
                  $teams["belgium"]['GOALS_SCORED'] += $_POST['inpBelgiumMatchThree'];
                  $teams["belgium"]['GOALS_RECEIVED'] += $_POST['inpMoroccoMatchThree'];
                  if ($_POST['inpMoroccoMatchThree'] > $_POST['inpBelgiumMatchThree'] ) {
                          $teams["morocco"]['POINTS'] += 3;
                          $teams["morocco"]['GAMES_WON'] += 1;
                          $teams["belgium"]['GAMES_LOSTS'] += 1;
                  } elseif ($_POST['inpMoroccoMatchThree'] < $_POST['inpBelgiumMatchThree']) {
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
                if ($_POST['inpCroitiaMatchFoor'] != "" && $_POST['inpCanadaMatchFoor'] != "") {
                  #Croitia
                  $teams["croitia"]['played'] += 1;
                  $teams["croitia"]['GOALS_SCORED'] += $_POST['inpCroitiaMatchFoor'];
                  $teams["croitia"]['GOALS_RECEIVED'] += $_POST['inpCanadaMatchFoor'];
                  #Cnada
                  $teams["canada"]['played'] += 1;
                  $teams["canada"]['GOALS_SCORED'] += $_POST['inpCanadaMatchFoor'];
                  $teams["canada"]['GOALS_RECEIVED'] += $_POST['inpCroitiaMatchFoor'];
                  if ($_POST['inpCroitiaMatchFoor'] > $_POST['inpCanadaMatchFoor'] ) {
                          $teams["croitia"]['POINTS'] += 3;
                          $teams["croitia"]['GAMES_WON'] += 1;
                          $teams["canada"]['GAMES_LOSTS'] += 1;
                  } elseif ($_POST['inpCroitiaMatchFoor'] < $_POST['inpCanadaMatchFoor']) {
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
                if ($_POST['inpBelgiumMatchFive'] != "" && $_POST['inpCroitiaMatchFive'] != "") {
                  #Belgium
                  $teams["belgium"]['played'] += 1;
                  $teams["belgium"]['GOALS_SCORED'] += $_POST['inpBelgiumMatchFive'];
                  $teams["belgium"]['GOALS_RECEIVED'] += $_POST['inpCroitiaMatchFive'];
                  #Croitia
                  $teams["croitia"]['played'] += 1;
                  $teams["croitia"]['GOALS_SCORED'] += $_POST['inpCroitiaMatchFive'];
                  $teams["croitia"]['GOALS_RECEIVED'] += $_POST['inpBelgiumMatchFive'];
                  if ($_POST['inpBelgiumMatchFive'] > $_POST['inpCroitiaMatchFive'] ) {
                          $teams["belgium"]['POINTS'] += 3;
                          $teams["belgium"]['GAMES_WON'] += 1;
                          $teams["croitia"]['GAMES_LOSTS'] += 1;
                  } elseif ($_POST['inpBelgiumMatchFive'] < $_POST['inpCroitiaMatchFive']) {
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
                if ($_POST['inpMoroccoMatchSix'] != "" && $_POST['inpCanadaMatchSix'] != "") {
                    #Moroco 
                    $teams["morocco"]['played'] += 1;
                    $teams["morocco"]['GOALS_SCORED'] += $_POST['inpMoroccoMatchSix'];
                    $teams["morocco"]['GOALS_RECEIVED'] += $_POST['inpCanadaMatchSix'];
                    #Canada
                    $teams["canada"]['played'] += 1;
                    $teams["canada"]['GOALS_SCORED'] += $_POST['inpCanadaMatchSix'];
                    $teams["canada"]['GOALS_RECEIVED'] += $_POST['inpMoroccoMatchSix'];
                    if ($_POST['inpMoroccoMatchSix'] > $_POST['inpCanadaMatchSix'] ) {
                        $teams["morocco"]['POINTS'] += 3;
                        $teams["morocco"]['GAMES_WON'] += 1;
                        $teams["canada"]['GAMES_LOSTS'] += 1;
                    } elseif ($_POST['inpMoroccoMatchSix'] < $_POST['inpCanadaMatchSix']) {
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
 
                uasort($teams, function ($a, $b) {
                    if ($a["POINTS"] === $b["POINTS"]) {
                        if ($a["DIFF"] === $b["DIFF"]) {
                            if ($a["GOALS_SCORED"] === $b["GOALS_SCORED"]) {
                                return 0;
                            } else if ($a["GOALS_SCORED"] < $b["GOALS_SCORED"]) {
                                return 1;
                            } else if ($a["GOALS_SCORED"] > $b["GOALS_SCORED"]) {
                                return -1;
                            }
                        } else if ($a["DIFF"] < $b["DIFF"]) {
                            return 1;
                        } else if ($a["DIFF"] > $b["DIFF"]) {
                            return -1;
                        }
                    } else if ($a["POINTS"] < $b["POINTS"]) {
                        return 1;
                    } else if ($a["POINTS"] > $b["POINTS"]) {
                        return -1;
                    }
                });
              }; // close button submite

            if($_SERVER["REQUEST_METHOD"] == "POST" && isset( $_POST["RESET"])){
            $teams = [
                "morocco" => ["POINTS" => 0, "played" => 0, "GAMES_WON" => 0, "GAMES_EQUAL" => 0, "GAMES_LOSTS" => 0, "GOALS_SCORED" => 0, "GOALS_RECEIVED" => 0, "DIFF" => 0],
                "croitia" => ["POINTS" => 0, "played" => 0, "GAMES_WON" => 0, "GAMES_EQUAL" => 0, "GAMES_LOSTS" => 0, "GOALS_SCORED" => 0, "GOALS_RECEIVED" => 0, "DIFF" => 0],
                "belgium" => ["POINTS" => 0, "played" => 0, "GAMES_WON" => 0, "GAMES_EQUAL" => 0, "GAMES_LOSTS" => 0, "GOALS_SCORED" => 0, "GOALS_RECEIVED" => 0, "DIFF" => 0],
                "canada" =>  ["POINTS" => 0, "played" => 0, "GAMES_WON" => 0, "GAMES_EQUAL" => 0, "GAMES_LOSTS" => 0, "GOALS_SCORED" => 0, "GOALS_RECEIVED" => 0, "DIFF" => 0],
            ];
            };
    ?>

    <main class="m-5 d-flex gap-5">
        <section class="w-50">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

                 <!-- <button >ADD</button> -->
                <button type="submit" name="submit" class="btn btn-danger ml-5 container w-50 h-15 h1 d-flex justify-content-center">Simulateur</button>
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
                            <input type="number" min="0" name="inpMoroccoMatchOne" class="" width="45px" height="50px"  value="<?php if (isset( $_POST['inpMoroccoMatchOne']))  echo $_POST['inpMoroccoMatchOne']; ?>">
                            <input type="number" min="0" name="inpCroitiaMatchOne" width="45px" height="50px"  value="<?php if (isset($_POST['inpCroitiaMatchOne'])) echo $_POST['inpCroitiaMatchOne']; ?>">
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
                            <input type="number" min="0" name="inpBelgiumMatchTwo" class="" width="45px" height="50px" value="<?php if (isset( $_POST['inpBelgiumMatchTwo']))  echo $_POST['inpBelgiumMatchTwo']; ?>">
                            <input type="number" min="0" name="inpCanadaMatchTwo" width="45px" height="50px" value="<?php if (isset( $_POST['inpCanadaMatchTwo']))  echo $_POST['inpCanadaMatchTwo']; ?>">
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
                            <input type="number" min="0" name="inpMoroccoMatchThree" class="" width="45px" height="50px" value="<?php if (isset( $_POST['inpMoroccoMatchThree']))  echo $_POST['inpMoroccoMatchThree']; ?>">
                            <input type="number" min="0" name="inpBelgiumMatchThree" width="45px" height="50px" value="<?php if (isset( $_POST['inpBelgiumMatchThree']))  echo $_POST['inpBelgiumMatchThree']; ?>">
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
                            <input type="number" name="inpCroitiaMatchFoor" min="0" class="" width="45px" height="50px" value="<?php if (isset( $_POST['inpCroitiaMatchFoor']))  echo $_POST['inpCroitiaMatchFoor']; ?>">
                            <input type="number" name="inpCanadaMatchFoor" min="0" width="45px" height="50px" value="<?php if (isset( $_POST['inpCanadaMatchFoor']))  echo $_POST['inpCanadaMatchFoor']; ?>">
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
                            <input type="number" min="0" name="inpBelgiumMatchFive" class="" width="45px" height="50px" value="<?php if (isset( $_POST['inpBelgiumMatchFive']))  echo $_POST['inpBelgiumMatchFive']; ?>">
                            <input type="number" min="0" name="inpCroitiaMatchFive" width="45px" height="50px" value="<?php if (isset( $_POST['inpCroitiaMatchFive']))  echo $_POST['inpCroitiaMatchFive']; ?>">
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
                            <input type="number" min="0" name="inpMoroccoMatchSix" class="" width="45px" height="50px" value="<?php if (isset( $_POST['inpMoroccoMatchSix']))  echo $_POST['inpMoroccoMatchSix']; ?>">
                            <input type="number" min="0" name="inpCanadaMatchSix" width="45px" height="50px" value="<?php if (isset( $_POST['inpCanadaMatchSix']))  echo $_POST['inpCanadaMatchSix']; ?>">
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
                
            </form>
        </section>
        <section class="w-50">
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
            
        <form method='POST' action="<?php echo $_SERVER['PHP_SELF']; ?>" class="w-100">
            <input type="hidden" name="reset" value="reset">
            <input type="submit"  class="btn text-center mx-auto btn-danger w-25 d-flex justify-content-center"  value="RESET ALL VALUES">
        </form>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>