<?php

//include  "../include/interface.php";

namespace Controller;


interface Figure {
    public function area($side_a, $side_b);
}
class Square implements Figure
{
    public function area($side_a, $side_b)
    {
        if (isset($side_a) && isset($side_b)) {
            $area_squre = $side_b * $side_a;
            return "Area = {$area_squre} </br> ";
        } else {
            return "incorrectly entered data";
        }
        // TODO: Implement area() method.
    }
}



