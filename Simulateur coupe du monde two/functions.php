<?php
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
?>