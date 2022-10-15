<pre>
<?php
$ar1 = array(2,4,6,8);
$ar2 = [2,4,6,8];

var_dump($ar1);
print_r($ar2);

$ar3 = array(
    'name' => 'shasha', // key一定要用字串 value 可以是任何類型
    'age' => 28,  // js 是 用冒號 php是用胖箭頭
);
print_r($ar3);

$ar4 = [
    'name' => 'shasha', //新寫法
    'age' => 25,
];
print_r($ar4);

$ar5 = [
    'cat',
    'name' => 'shasha', //新寫法
    'age' => 25,
    'dog',
];
print_r($ar5);

echo "<br>".count($ar5)."<br>"
?>
</pre>