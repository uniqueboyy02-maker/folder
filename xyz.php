<?php
function test ($x,$y)
{
    return $x==$y ? ($x+$y)*3:$x+$y;
}
echo test (4,2);
echo"<br>";
echo test (3,4);
echo"<br>";
echo test (3,3);
?>
