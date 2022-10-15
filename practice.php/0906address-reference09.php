<pre>
<?php
$ar1 = [1,2,3];

#$ar2 = $ar1; // 設定值, 複製一份新的再設定

$ar2 = &$ar1; //設定位址 前面接 &

array_pop($ar2);

print_r($ar1);

$a = 10;
$b = &$a;
$b = 88;
echo $a;
?>
</pre>