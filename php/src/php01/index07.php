<!-- function 関数名(){
処理内容
return 返り値
} -->


<?php
function outputNumber($a)
{
    echo "引数の値は" . $a . "です";
    return;
}

outputNumber(2);
echo "<br />";?>

<?php
function outputHello()
{
    echo "Hello world";
}

outputHello(); // ①
    echo "<br />";?>

    <?php
function text($number1, $number2)
{
    $value = $number1 + $number2;
    return $value;
}

$total = text(2, 4);
echo $total;
echo "<br />";?>


<?php
function text1($number3, $number4)
{
    $value1 = $number3 + $number4;
    return $value1;
}

$total1 = text1(1,4);
echo $total1; // print $totalでも可。
echo "<br />";?>

<?php
function score($score1,$score2,$score3)
{
    $value2 = $score1 + $score2 + $score3;
    return $value2;
}
    $total2 = score(70,70,80,);
    if ($total2 >= 210) {
        echo "合計点は210点以上なので合格です";
    }else {
        echo "合計点は210点未満なので不合格です";
    }
echo "<br />";
?>

<?php

function exam($score4, $score5, $score6)
{
    $total3 = $score4 + $score5 + $score6;
    if ($total3 > 210) {
        echo $total3 . "点なので合格です";
    } else {
        echo $total3 . "点なので不合格です";
    }
}
echo (exam(80, 60, 90));
echo "<br />";
?>

<?php
function triangle($height, $bottom) {
    return $height * $bottom / 2;
}
function square($height, $bottom) {
    return $height * $bottom;
}
function trapezoid($top,$height, $bottom) {
    return ($top + $bottom) * $height / 2;
}
echo "三角形 :" . triangle(8,10) . "<br />";
echo "四角形 :" . square(8,10) . "<br />";
echo "台形 :" . trapezoid(5,8,10) . "<br />";
?>


<?php

function getSquareArea($base, $height1)
{
  return $base * $height1;
}
function getTriangleArea($base, $height1)
{
  return $base * $height1 / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height1)
{
  return ($upperBase + $lowerBase) * $height1 / 2;
}

echo getSquareArea(5, 5) . "\n";
echo getTriangleArea(7, 8) . "\n";
echo getTrapezoidArea(4, 5, 4);

