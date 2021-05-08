<?php
function exe($num)
    { 
       for ($i = 1; $i < sizeof($num) - 1; $i++)
          {
             if ($num[$i + 1] < $num[$i]) 
             return false;
          }
        return true;
    }
echo "Output:";
echo "<br/>";
var_dump(exe([5, 5, 1, 5, 5]));
echo "<br/>";
var_dump(exe([1, 2, 3, 4]));
echo "<br/>";
var_dump(exe([3, 3, 5, 5, 5, 5]));
echo "<br/>";
var_dump(exe([1, 5, 5, 7, 8, 10]));
echo "<br/>";

?>