<?php
$a = 15;
$b = 3;
$c = 10;

echo $a + $b;
echo "<br />";
echo $a - $b;
echo "<br />";
echo $a * $b;
echo "<br />";
echo $a - $c;
echo "<br />";
echo $a % $c;?>

<?php
echo $a + $b . "\n";?>


<?php
$a = 15; $b = 3; $c = 10;

// <pre>タグで囲むことで、タブ(\t)や改行(\n)がそのまま表示されます
echo "<pre>";
echo "足し算:\t" . ($a + $b) . "\n";
echo "引き算:\t" . ($a - $b) . "\n";
echo "掛け算:\t" . ($a * $b) . "\n";
echo "変数引:\t" . ($a - $c) . "\n";
echo "余り:\t" . ($a % $c) . "\n";
echo "</pre>";
?>

<?php
$a = 15;
$b = 3;
$c = 10;
$d = 5;

echo $a /=$d;
echo "<br />";
echo $c +=$d;
echo "<br />";?>

<?php
$a = 20;
$b = 5;

echo $a >= $b;
echo "<br />";
echo ($a > $b);
echo "<br />";?>

<?php
$a = 20;
$b =5;

echo ($a > 10 && $a < 30);
echo "<br />";?>

<?php
$a = 10;
$b = 10;
$c = 5;
$d = 5;

echo ++$a;
echo "<br />";
echo $b++;
echo "<br />";
echo --$c;
echo "<br />";
echo $d--;
echo "<br />";