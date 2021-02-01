<?php
function dosum(...$arr){
    $sum = 0;
    foreach($arr as $v){
        $sum += $v;
    }
    return $sum;
}

$arr = [1, 2, 3, 4, 5];
echo dosum(...$arr);   // 输出15
echo '<br>';
echo dosum(1,2,3,4,5,6); //输出21


function app(...$num) {
    var_dump($num); //输出为一个索引数组
}
$arr1 = [1, 2, 3, 4];
echo app('/admin/login/index');



function app2($a, $b,$c)
{
    echo $a + $b+$c; //输出3
}

$arr = [1, 2,3];
app2(...$arr);