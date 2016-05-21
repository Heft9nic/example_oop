<?php

require_once 'vendor/autoload.php';




use Controller\Square;
use Controller\Lozenge;
use Controller\Rectangle;


$a = new Rectangle();
$b = new Lozenge();
$c = new Square();

echo $a->area(3,4);
echo $b->area(4,4);
echo $c->area(4,4);

