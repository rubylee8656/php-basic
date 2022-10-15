<pre>
<?php
# php 是程序導向??
# $br = []; 不用初始化就可以push 可省略不寫 有說明的功能
# $br[] = 123;

for($i=1; $i<=42; $i++){
    $br[] = $i;
}

#echo ($br); notice echo要輸出字串但只會拿到array

#print_r($br);

echo implode('@',$br)."<br>";
?>
</pre>