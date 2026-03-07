if( 条件 ){
// 真の時に実行される処理
}else{
// 偽の時に実行される処理
}
<?php
echo "<br />"?>

<?php
$a = 5;

if ($a === 5) {
echo "\$aは5です";
}
echo "<br />"?>

<?php
$a = 7;

if ($a === 5) {
echo "\$aは5です";
}else{
echo "\$aは5以外です";
}
echo "<br />";?>

<!-- $7をそのまま使用 -->
<?php
if ($a === 10) {
echo "\$aは10です";
}elseif($a === 7) {
echo "\$aは7です";
}elseif($a === 5) {
echo "\$aは5です";
}
echo "<br />";?>

switch (値) {
    case 条件1:
        // 条件1が真の時に実行される処理
        break;
    case 条件2:
        // 条件2が真の時に実行される処理
        break;
    default:
        // どの条件にも当てはまらない時に実行される処理
        break;
}
<?php
echo "<br />";?>

<?php
$people = "Saburo";

switch ($people) {
    case "Jiro":
    echo "次郎です";
    break;
    case "Saburo":
    echo "三郎です";
    break;
    case "Taro":
    echo "太郎です";
    break;
}
echo "<br />";?>

$result = (条件式) ? "TRUE時の値" : "FALSE時の値";
<?php
echo "<br />";?>

<?php
$a = 7;

$result = ($a == 7) ? "TRUE" : "FALSE";
echo $result;
echo "<br />";?>

<?php
$a = 7;

$b = ($a > 5) ? "TRUE" : "FALSE";
echo $b;
