<?php

/**
 * Created by PhpStorm.
 * User: stas
 * Date: 21.05.16
 * Time: 12:53
 */
class Lozenge extends Square
{
 public function area($side_a, $side_b)
 {
     if (isset($side_a) && isset($side_b)) {
         $area_squre = 0.5*$side_b * $side_a;
         return "Area  = {$area_squre} </br> ";
     } else {
         return "incorrectly entered data";
     }
     return parent::area($side_a, $side_b); // TODO: Change the autogenerated stub
 }
}