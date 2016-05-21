<?php

require_once 'vendor/autoload.php';


use Controller\Square;
use Controller\Lozenge;
use Controller\Rectangle;


$object_R = new Rectangle();
$object_L = new Lozenge();
$object_S = new Square();

echo $object_R->area(3,4);
echo $object_R->type_figure(3,4);

echo $object_L->area(4,4);
echo $object_L->type_figure(5,4);

echo $object_S->area(4,4);
echo $object_S->type_figure(3,3);
