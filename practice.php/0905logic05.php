<pre>
<?php

$a = 5 || 7; //true
var_dump($a);

$b =5 or 7;
var_dump($b); #or,and 的優先權比 = 還低

$c = 5 and 7; // 5
var_dump($c);

$d = (5 and 7); 
var_dump($d); //true


?>
</pre>