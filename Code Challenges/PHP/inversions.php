<?php

function array_inversion_count ( $A ) {

    if (sizeof($A) < 2)
        return 0;

    $middle = floor((sizeof($A) + 1) / 2);

    $leftA = array();
    for ($i = 0; $i < $middle; $i++) {
        $leftA[$i] = $A[$i];
    }
    $rightA = array();
    for ($i = $middle; $i<sizeof($A); $i++) {
        $rightA[$i-$middle] = $A[$i];
    }

    return array_inversion_count($leftA) + array_inversion_count($rightA)
            + merge($A, $leftA, $rightA);
}

function merge($A, $leftA, $rightA) {
        $i = 0;
        $j = 0;
        $count = 0;
        $sizeLeft = sizeof($leftA);
        $sizeRight = sizeof($rightA);
       while ($i < $sizeLeft  || $j < $sizeRight ) {
            if ($i == $sizeLeft) {
                $A[$i+$j] = $rightA[$j];
                $j++;
            } else if ($j == $sizeRight ) {
                $A[$i+$j] = $leftA[$i];
                $i++;
            } else if ($leftA[$i] <= $rightA[$j]) {
                $A[$i+$j] = $leftA[$i];
                $i++;
            } else {
              $A[$i+$j] = $rightA[$j];
                $count += $sizeLeft -$i;
               $j++;
            }
        }
        return $count;
    }

	$A = array(-1,6,3,4,7,4);
	echo array_inversion_count($A );
?>