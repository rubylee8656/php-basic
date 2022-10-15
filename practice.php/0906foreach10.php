<pre>
<?php
// $ar5 = [
//     'cat',
//     'name' => 'shinder',
//     'age' => 30,
//     'dog',
// ];

// foreach($ar5 as $k=>$v){
//     #echo"<p>$v</p>";
//     echo"<p>$k : $v</p>";
// }

$ar6 = [
    'a' => 10,
    'b' => 20,
    'c' => 30,
    'd' => 40,
];

foreach($ar6 as $k=>&$v){
    $v++;
}
print_r($ar6);
?>
</pre>