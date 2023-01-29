<?php
    // require 'functions.php';
    $teams = [
        "morocco" => ["point" => 0, "game" => 0, "gan" => 0, "emp" => 0, "per" => 0, "gf" => 0, "gc" => 0, "diff" => 0],
        "croitia" => ["point" => 0, "game" => 0, "gan" => 0, "emp" => 0, "per" => 0, "gf" => 0, "gc" => 0, "diff" => 0],
        "belgium" => ["point" => 0, "game" => 0, "gan" => 0, "emp" => 0, "per" => 0, "gf" => 0, "gc" => 0, "diff" => 0],
        "canada" =>  ["point" => 0, "game" => 0, "gan" => 0, "emp" => 0, "per" => 0, "gf" => 0, "gc" => 0, "diff" => 0],
    ];
    $teams = json_decode($_COOKIE['teams'], true);
    // if (isset($_COOKIE["matches"])) {
    //     $matches = json_decode($_COOKIE['matches'], true);
    // } else {
    //     $matches = array( 
    //         "morrocoVCroatia" => array("MOROCCO" => 0, "CROATIA" => 0, "Status" => false),
    //         "morrocoVSBelgium" => array("MOROCCO" => 0, "BELGium" => 0, "Status" => false),
    //         "morrocoVSCanada" => array("MOROCCO" => 0, "CANADA" => 0, "Status" => false),
    //         "belgiuVSCanada" => array("BELGium" => 0, "CANADA" => 0, "Status" => false),
    //         "belgiumVSSpain" => array("BELGium" => 0, "CROATIA" => 0, "Status" => false),
    //         "CanadaVSCroatia" => array("CANADA" => 0, "CROATIA" => 0, "Status" => false),
    //     );
    // };
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
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators ">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner slide-one">
          <div class="carousel-item active">
            <!-- <img src="images/1.jpg" class="d-block w-100" alt="..."> -->
            <!-- <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div> -->
          </div>
          <div class="carousel-item slide-two">
            <!-- <img src="images/2.jpg" class="d-block w-100" alt="..."> -->
            <!-- <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div> -->
          </div>
          <div class="carousel-item slide-three">
            <!-- <img src="images/3.jpg" class="d-block w-100" alt="..."> -->
            <!-- <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div> -->
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
    </div>

    <!-- ================================================== -->

    <div>
        <h1 class="text-center">World Cup Simulator</h1>
        <?php
        // if ($_SERVER["REQUEST_METHOD"] == 'GET' ) {

        //     // print_r($matches);
        //     setcookie('matches', json_encode($matches));
        // } elseif ($_SERVER["REQUEST_METHOD"] == 'GET' && isset($_GET['reset'])){
        //     echo "lmjeyf";
        //     $matches = array( 
        //         "morrocoVCroatia" => array("MOROCCO" => 0 , "CROATIA" => 0 , "Status" => false  ) ,
        //         "morrocoVSBelgium" => array("MOROCCO" => 0 , "BELGium" => 0   , "Status" => false )    ,
        //         "morrocoVSCanada" => array("MOROCCO" => 0 , "CANADA" => 0   , "Status" => false ) ,
        //         "belgiuVSCanada" => array("BELGium" => 0 , "CANADA" => 0   , "Status" => false ) ,
        //         "belgiumVSSpain" => array("BELGium" => 0 , "CROATIA" => 0   , "Status" => false ) ,
        //         "CanadaVSCroatia" => array("CANADA" => 0 , "CROATIA" => 0   , "Status" => false ) ,
        //     );
        // }
        setcookie('teams', json_encode($teams));
        ?>
    </div>

    <!-- ================================================== -->

    <main class="container d-flex gap-3">
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
                        <input type="number" min="0" name="inpMoroccoMatchOne" class="" width="45px" height="50px"  value="<?php echo $inpMoroccoMatchOne;?>">
                        <input type="number" min="0" name="inpCroitiaMatchOne" width="45px" height="50px"  value="<?php echo $inpCroitiaMatchOne;?>">
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
            <button type="submit" name="submit" class="btn btn-danger">Danger</button>
        </form>


    <?php
    // array for Teams
    $teams = [
        "morocco" => ["point" => 0, "game" => 0, "gan" => 0, "emp" => 0, "per" => 0, "gf" => 0, "gc" => 0, "diff" => 0],
        "croitia" => ["point" => 0, "game" => 0, "gan" => 0, "emp" => 0, "per" => 0, "gf" => 0, "gc" => 0, "diff" => 0],
        "belgium" => ["point" => 0, "game" => 0, "gan" => 0, "emp" => 0, "per" => 0, "gf" => 0, "gc" => 0, "diff" => 0],
        "canada" =>  ["point" => 0, "game" => 0, "gan" => 0, "emp" => 0, "per" => 0, "gf" => 0, "gc" => 0, "diff" => 0],
    ];
    ?>
    <!-- Create Table -->
        <table class="table w-50">
        <thead>
          <tr>
            <th class="text-bg-secondary" scope="col">#</th>
            <th class="text-bg-secondary" scope="col">Team</th>
            <th class="text-bg-secondary" scope="col">PTS.</th>
            <th class="text-bg-secondary" scope="col">MTH.</th>
            <th class="text-bg-secondary" scope="col">WIN.</th>
            <th class="text-bg-secondary" scope="col">EMP</th>
            <th class="text-bg-secondary" scope="col">PER</th>
            <th class="text-bg-secondary" scope="col">G.F.</th>
            <th class="text-bg-secondary" scope="col">G.C.</th>
            <th class="text-bg-secondary" scope="col">+/-</th>
          </tr>
        </thead>
            <tbody>
                <?php
                $i = 1;        
    // ======================= Matches are run according to goals and points ... ==============================
                if(isset($_GET['submit'])) { 
                    // click in button add result
                //===match 1
                  if ($_GET['inpMoroccoMatchOne'] != "" && $_GET['inpCroitiaMatchOne'] != "") {
                    #morocco
                    $teams["morocco"]["game"] += 1;
                    $teams["morocco"]['gf'] += $_GET['inpMoroccoMatchOne'];
                    $teams["morocco"]['gc'] += $_GET['inpCroitiaMatchOne'];
                    #Croitia
                    $teams["croitia"]['game'] += 1;
                    $teams["croitia"]['gf'] += $_GET['inpCroitiaMatchOne'];
                    $teams["croitia"]['gc'] += $_GET['inpMoroccoMatchOne'];
                    if ($_GET['inpMoroccoMatchOne'] > $_GET['inpCroitiaMatchOne'] ) {
                            $teams["morocco"]['point'] += 3;
                            $teams["morocco"]['gan'] += 1;
                            $teams["croitia"]['per'] += 1;
                    } elseif ($_GET['inpMoroccoMatchOne'] < $_GET['inpCroitiaMatchOne']) {
                            $teams["croitia"]['point'] += 3;
                            $teams["croitia"]['gan'] += 1;
                            $teams["morocco"]['per'] += 1;
                    } else {
                            $teams["croitia"]['point'] += 1;
                            $teams["croitia"]['emp'] += 1;
                            $teams["morocco"]['point'] += 1;
                            $teams["morocco"]['emp'] += 1;
                    };
                  };
                //===Match 2
                  if ($_GET['inpBelgiumMatchTwo'] != "" && $_GET['inpCanadaMatchTwo'] != "") {
                    #Belgium
                    $teams["belgium"]['game'] += 1;
                    $teams["belgium"]['gf'] += $_GET['inpBelgiumMatchTwo'];
                    $teams["belgium"]['gc'] += $_GET['inpCanadaMatchTwo'];
                    # Canada
                    $teams["canada"]['game'] += 1;
                    $teams["canada"]['gf'] += $_GET['inpCanadaMatchTwo'];
                    $teams["canada"]['gc'] += $_GET['inpBelgiumMatchTwo'];

                    if ($_GET['inpBelgiumMatchTwo'] > $_GET['inpCanadaMatchTwo'] ) {
                            $teams["belgium"]['point'] += 3;
                            $teams["belgium"]['gan'] += 1;
                            $teams["canada"]['per'] += 1;
                    } elseif ($_GET['inpBelgiumMatchTwo'] < $_GET['inpCanadaMatchTwo']) {
                            $teams["canada"]['point'] += 3;
                            $teams["canada"]['gan'] += 1;
                            $teams["belgium"]['per'] += 1;
                    } else {
                            $teams["belgium"]['point'] += 1;
                            $teams["belgium"]['emp'] += 1;
                            $teams["canada"]['point'] += 1;
                            $teams["canada"]['emp'] += 1;
                    };
                  };
                //===Match 3
                if ($_GET['inpMoroccoMatchThree'] != "" && $_GET['inpBelgiumMatchThree'] != "") {     
                  # Morocco
                  $teams["morocco"]['game'] += 1;
                  $teams["morocco"]['gf'] += $_GET['inpMoroccoMatchThree'];
                  $teams["morocco"]['gc'] += $_GET['inpBelgiumMatchThree'];
                  #Belgium
                  $teams["belgium"]['game'] += 1;
                  $teams["belgium"]['gf'] += $_GET['inpBelgiumMatchThree'];
                  $teams["belgium"]['gc'] += $_GET['inpMoroccoMatchThree'];
                  if ($_GET['inpMoroccoMatchThree'] > $_GET['inpBelgiumMatchThree'] ) {
                          $teams["morocco"]['point'] += 3;
                          $teams["morocco"]['gan'] += 1;
                          $teams["belgium"]['per'] += 1;
                  } elseif ($_GET['inpMoroccoMatchThree'] < $_GET['inpBelgiumMatchThree']) {
                          $teams["belgium"]['point'] += 3;
                          $teams["belgium"]['gan'] += 1;
                          $teams["morocco"]['per'] += 1;
                  } else {
                          $teams["morocco"]['point'] += 1;
                          $teams["morocco"]['emp'] += 1;
                          $teams["belgium"]['point'] += 1;
                          $teams["belgium"]['emp'] += 1;
                  };
                };
                //=== Match 4
                if ($_GET['inpCroitiaMatchFoor'] != "" && $_GET['inpCanadaMatchFoor'] != "") {
                  #Croitia
                  $teams["croitia"]['game'] += 1;
                  $teams["croitia"]['gf'] += $_GET['inpCroitiaMatchFoor'];
                  $teams["croitia"]['gc'] += $_GET['inpCanadaMatchFoor'];
                  #Cnada
                  $teams["canada"]['game'] += 1;
                  $teams["canada"]['gf'] += $_GET['inpCanadaMatchFoor'];
                  $teams["canada"]['gc'] += $_GET['inpCroitiaMatchFoor'];
                  if ($_GET['inpCroitiaMatchFoor'] > $_GET['inpCanadaMatchFoor'] ) {
                          $teams["croitia"]['point'] += 3;
                          $teams["croitia"]['gan'] += 1;
                          $teams["canada"]['per'] += 1;
                  } elseif ($_GET['inpCroitiaMatchFoor'] < $_GET['inpCanadaMatchFoor']) {
                          $teams["canada"]['point'] += 3;
                          $teams["canada"]['gan'] += 1;
                          $teams["croitia"]['per'] += 1;
                  } else {
                          $teams["croitia"]['point'] += 1;
                          $teams["croitia"]['emp'] += 1;
                          $teams["canada"]['point'] += 1;
                          $teams["canada"]['emp'] += 1;
                  };
                };
                //=== Match 5
                if ($_GET['inpBelgiumMatchFive'] != "" && $_GET['inpCroitiaMatchFive'] != "") {
                  #Belgium
                  $teams["belgium"]['game'] += 1;
                  $teams["belgium"]['gf'] += $_GET['inpBelgiumMatchFive'];
                  $teams["belgium"]['gc'] += $_GET['inpCroitiaMatchFive'];
                  #Croitia
                  $teams["croitia"]['game'] += 1;
                  $teams["croitia"]['gf'] += $_GET['inpCroitiaMatchFive'];
                  $teams["croitia"]['gc'] += $_GET['inpBelgiumMatchFive'];
                  if ($_GET['inpBelgiumMatchFive'] > $_GET['inpCroitiaMatchFive'] ) {
                          $teams["belgium"]['point'] += 3;
                          $teams["belgium"]['gan'] += 1;
                          $teams["croitia"]['per'] += 1;
                  } elseif ($_GET['inpBelgiumMatchFive'] < $_GET['inpCroitiaMatchFive']) {
                          $teams["croitia"]['point'] += 3;
                          $teams["croitia"]['gan'] += 1;
                          $teams["belgium"]['per'] += 1;
                  } else {
                          $teams["belgium"]['point'] += 1;
                          $teams["belgium"]['emp'] += 1;
                          $teams["croitia"]['point'] += 1;
                          $teams["croitia"]['emp'] += 1;
                      };
                };
                //=== Match 6  
                // function matches($inpOne, $inpTwo, $contryOne, $contryTwo, $teams) {
                //     if ($inpOne !== "" && $inpTwo !== "") {
                //         #Moroco 
                //         $teams[$contryOne]['gan'] += 1;
                //         $teams[$contryOne]['gf'] += $inpTwo;
                //         $teams[$contryOne]['gc'] += $contryTwo;
                //         #Canada
                //         $teams[$contryTwo]['gan'] += 1;
                //         $teams[$contryTwo]['gf'] += $inpOne;
                //         $teams[$contryTwo]['gc'] += $inpTwo;
                //         if ($inpTwo > $inpOne ) {
                //            $teams[$contryOne]['point'] += 3;
                //            $teams[$contryOne]['gan'] += 1;
                //            $teams[$contryTwo]['per'] += 1;
                //         } elseif ($inpTwo < $inpOne) {
                //            $teams[$contryTwo]['point'] += 3;
                //            $teams[$contryTwo]['gan'] += 1;
                //            $teams[$contryOne]['per'] += 1;
                //         } else {
                //            $teams[$contryOne]['point'] += 1;
                //            $teams[$contryOne]['emp'] += 1;
                //            $teams[$contryTwo]['point'] += 1;
                //            $teams[$contryTwo]['emp'] += 1;
                //         };
                //       };
                // };

                function matches($inpOne, $inpTwo, $contryOne, $contryTwo) {
                    if ($inpOne != "" && $inpTwo != "") {
                        #contryOne
                        $contryOne['game'] += 1;
                        $contryOne['gf'] += $inpOne;
                        $contryOne['gc'] += $inpTwo;
                        #contryTwo
                        $contryTwo['game'] += 1;
                        $contryTwo['gf'] += $inpTwo;
                        $contryTwo['gc'] += $inpOne;
                        if ($inpOne > $inpTwo ) {
                           $contryOne['point'] += 3;
                           $contryOne['gan'] += 1;
                           $contryTwo['per'] += 1;
                        } elseif ($inpOne < $inpTwo) {
                           $contryTwo['point'] += 3;
                           $contryTwo['gan'] += 1;
                           $contryOne['per'] += 1;
                        } else {
                           $contryOne['point'] += 1;
                           $contryOne['emp'] += 1;
                           $contryTwo['point'] += 1;
                           $contryTwo['emp'] += 1;
                        };
                    };
                };
            echo matches($_GET['inpMoroccoMatchSix'], $_GET['inpCanadaMatchSix'], $teams["morocco"], $teams["canada"]);
                // matches($_GET['inpMoroccoMatchSix'], $_GET['inpCanadaMatchSix'], "morocco", "canada", $teams);


                // if ($_GET['inpMoroccoMatchSix'] != "" && $_GET['inpCanadaMatchSix'] != "") {
                //   #Moroco 
                //   $teams["morocco"]['game'] += 1;
                //   $teams["morocco"]['gf'] += $_GET['inpMoroccoMatchSix'];
                //   $teams["morocco"]['gc'] += $_GET['inpCanadaMatchSix'];
                //   #Canada
                //   $teams["canada"]['game'] += 1;
                //   $teams["canada"]['gf'] += $_GET['inpCanadaMatchSix'];
                //   $teams["canada"]['gc'] += $_GET['inpMoroccoMatchSix'];
                //   if ($_GET['inpMoroccoMatchSix'] > $_GET['inpCanadaMatchSix'] ) {
                //      $teams["morocco"]['point'] += 3;
                //      $teams["morocco"]['gan'] += 1;
                //      $teams["canada"]['per'] += 1;
                //   } elseif ($_GET['inpMoroccoMatchSix'] < $_GET['inpCanadaMatchSix']) {
                //      $teams["canada"]['point'] += 3;
                //      $teams["canada"]['gan'] += 1;
                //      $teams["morocco"]['per'] += 1;
                //   } else {
                //      $teams["morocco"]['point'] += 1;
                //      $teams["morocco"]['emp'] += 1;
                //      $teams["canada"]['point'] += 1;
                //      $teams["canada"]['emp'] += 1;
                //   };
                // };
                // matchOne($_GET['inpMoroccoMatchSix'], $_GET['inpCanadaMatchSix'], "morocco", "canada", $key, $teams["morocco"]);
                # +/-
                // $diffzz = ($teams["morocco"]['gf'] - $teams["morocco"]['gc']);
/*
=============================== Sort  ==========================================
*/   
    // $columns = array_column($teams, 'point');
    // array_multisort($columns, SORT_DESC, $teams);



    function sort_point($team_One, $team_Two, $teams) {
        if ($team_One == $team_Two) {
            $columns = array_column($teams, 'diff');
            array_multisort($columns, SORT_DESC, $teams);
        };
    };
    sort_point( $teams["morocco"]['point'], $teams["croitia"]['point'], $teams );
    sort_point( $teams["morocco"]['point'], $teams["belgium"]['point'], $teams );
    sort_point( $teams["morocco"]['point'], $teams["canada"]['point'], $teams );
    sort_point( $teams["belgium"]['point'], $teams["canada"]['point'], $teams );
    sort_point( $teams["belgium"]['point'], $teams["croitia"]['point'], $teams );
    sort_point( $teams["canada"]['point'], $teams["croitia"]['point'], $teams );

    if ($teams["morocco"]['point'] == $teams["croitia"]['point'] && $teams["belgium"]['point'] == $teams["canada"]['point'] && $teams["morocco"]['point'] == $teams["canada"]['point']) {
        $columns = array_column($teams, 'gf');
        array_multisort($columns, SORT_DESC, $teams);
    } else {
        // if ($teams["morocco"]['point'] == $teams["croitia"]['point']) {
        // $columns = array_column($teams, 'diff');
        // array_multisort($columns, SORT_DESC, $teams);
        // };
        $columns = array_column($teams, 'point');
        array_multisort($columns, SORT_DESC, $teams);
    }


/*
=============================== shw data in table (tbody) ==========================================
*/   
$i;
foreach ($teams as $key => $value) :
    $diffzz = ($value['gf'] - $value['gc']); // Goal difference calculation
    // show row in table (tbody)
            echo 
            "<tr>
                <th>" . $i . "</th>     
                <th>" . $key . "</th>
                <td>" . $value['point'] . "</td>
                <td>" . $value['game'] . "</td>
                <td>" . $value['gan'] . "</td>
                <td>" . $value['emp'] . "</td>
                <td>" . $value['per'] . "</td>
                <td>" .$value['gf'] . "</td>
                <td>" .$value['gc'] . "</td>
                <td>" .$diffzz . "</td>
            </tr>";
            $i++;
        endforeach;
};
?>
            </tbody>
        </table>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>