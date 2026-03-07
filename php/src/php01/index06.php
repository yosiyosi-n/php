<!-- for ($i = 初期値; $i <= 回数; 増減式) {
処理 } -->

<?php
for ($i = 0; $i < 4; $i++) {
    echo $i;
}
echo "<br />";?>

<?php
for ($i = 2; $i < 12; $i += 2) {
    echo "<br />";
    echo $i;
}
echo "<br />";?>

<?php
for ($i = 1; $i <= 5; $i++) {
    echo $i * 2 . '<br />';
}?>

<!-- while (条件) {
// 真の時に実行
// 繰り返しの処理の中で変数の値を変化させる
} -->

<?php
$i = 0;

while ($i < 3) {
    echo 'i = ' . $i . '<br />';
    $i += 1;
}?>

<?php
$count = 0;

while ($count < 20) {
    $count += 1;
    echo "$count" . "<br />";
}?>

<!-- AI生成 -->
<?php
$count = 0;

while ($count <= 100) {
    if ($count === 21) {
    break;
    }
    if ($count % 3 === 0) {
    $count++;
    continue;
    }
    echo $count . '<br />';
    $count++;
}?>

<?php
$i = 0;
while ($i < 10) {
    if ($i == 5) {
    break;
    // $iが5の時、ループから抜ける。
    }
    echo $i . "<br />";
    $i++;
}
echo "<br />";?>

<?php
$i = 0;
while ($i < 10) {
    if ($i == 5) {
    $i++;
    continue;
    // $iが5の時、$iに1を足す処理をし、スキップをする。
    }
    echo $i . "<br />";
    $i++;
}
echo "<br />";?>

<?php
$count = 0;

while ($count <= 100) {
    if ($count === 20) {
        break;
    }
    if ($count % 3 === 0) {
        $count++;
        continue;
    }
    echo $count . "<br />";
    $count++;
}
echo "<br />";?>

<!-- do{
// whileの条件式が真の時に実行
}while (条件式);
-->

<?php
$i = 0;
do {
    echo $i . '<br />';
    $i++;
} while ($i < 5);?>

<?php
$num = 0;

do {
    echo "num = $num" . "<br />";
    $num++;
} while ($num < 3);
echo "<br />";
?>

<!--
for ($i = 0; $i < 4; $i++) {
echo $i;
} -->
<!-- if ($count === 20) {
        break;
    }
    if ($count % 3 === 0) {
        $count++;
        continue;
    } -->

<?php
$a = 0;

for ($a = 0; $a <= 50; $a++) {
    if ($a % 15 === 0) {
        echo "FizzBuzz<br />";
    } elseif ($a % 3 === 0) {
        echo "Fizz<br />";
    } elseif ($a % 5 === 0) {
        echo "Buzz<br />";
    } else {
        echo $a . "<br />";
    }
}
echo "<br />";
?>



<?php
for ($s = 1; $s <= 5; $s++) {

    for ($j = 1; $j <= 5; $j++) {
        echo "⚪️";
    }
    echo "<br />";
}
?>

<?php
    for ($s = 1; $s <= 5; $s++) {
        for ($j = 1; $j <= 5; $j++) {
            if (($s + $j) % 2 === 0) {
                echo "🔴";
            } else {
                echo "⚪️";
            }
        }
        echo "<br />";
    }