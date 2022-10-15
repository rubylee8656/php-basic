<?php


$a = isset($_GET['a']) ? intval($_GET['a']) : 0 ;

$b = empty($_GET['b']) ? 0 : intval($_GET['b']) ;

echo $a +$b;