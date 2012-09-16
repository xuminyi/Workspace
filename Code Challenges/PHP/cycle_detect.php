<?php

 function cycle_length ( $A ) {
	 $first = $A[0];
     $second = $A[$A[0]];
     while ($first <> $second) {
         $first = $A[$first];
         $second = $A[$A[$second]];
  	 }

    $len = 0;
     $first = 0;
     while ($first <> $second) {
         $first = $A[$first];
         $second = $A[$second];
         $len += 1;
  	}

     $len = 1;
     $second = $A[$first];
     while ($first <> $second) {
         $second = $A[$second];
         $len += 1;
  	 }
     echo $len;

    }

    $A = array(2, 3, 1,1, 3);
	cycle_length ( $A ) ;
?>