<?php

include "include/Abstract.php";

 
class Triangle extends Treatment  
{
	public function deducting_area($a, $b, $c) {
		if (($a == $b)&&($a != $c)) {
			$area = ($a*$b*0.9)/2;
			$perimeter = 2*$a+$c;
			$type_triangle = "isosceles";
			return "{$type_triangle } a = {$a} b = {$b} c = {$c} area = {$area} perimeter = {$perimeter} </br>";
		}else{
			if (($a == $b)&&($b == $c)){
				$perimeter = 3*$a;
				$piv_perimeter = $perimeter/2;
				$area = sqrt($piv_perimeter*($piv_perimeter-$a)*($piv_perimeter-$b)*($piv_perimeter-$c));
				$type_triangle = "correct";
				return "{$type_triangle } a = {$a} b = {$b} c = {$c} area = {$area} perimeter = {$perimeter} </br>";
			}else{
				$perimeter = $a+$b+$c;
				$piv_perimeter = $perimeter/2;
				$area = sqrt($piv_perimeter*($piv_perimeter-$a)*($piv_perimeter-$b)*($piv_perimeter-$c));
				$type_triangle = "classic";
				return "{$type_triangle } a = {$a} b = {$b} c = {$c} area = {$area} perimeter = {$perimeter}";
			}
		}

	}

}

$class = new Triangle;
echo $class->deducting_area(7,7,9);
echo $class->deducting_area(5,5,5);
echo $class->deducting_area(4,5,6);
?>