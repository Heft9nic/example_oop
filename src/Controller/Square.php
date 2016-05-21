<?php



namespace Controller;

interface Figure {
    public function area($side_a, $side_b);
}

trait definitions {
    public function type_figure($side_a, $side_b) {
        if (isset($side_b) && $side_a) {
            if ($side_a == $side_b) {
                echo "SQUARE </br>";
            } else {
                echo "SQUARE or RESTANGLE </br>";
            }
        } else {
            echo "incorrectly entered data </br>";
        }
    }
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
    use definitions;
}



