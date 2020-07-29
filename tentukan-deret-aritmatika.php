<?php
function tentukan_deret_aritmatika($arr) {
    $delta = $arr[1] - $arr[0];
    for($index=0; $index<sizeof($arr)-1; $index++)
     {
         if (($arr[$index + 1] - $arr[$index]) != $delta)
         {
              return "false <br>";
         }       
     }
     return "true <br>";
}


// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>