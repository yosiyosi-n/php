<?php
// 1. まずは届いたデータ全体をデバッグ表示で確認
echo "<pre>";
var_dump($_POST);
echo "</pre>";

// 2. 届いたデータを変数に代入
$name   = htmlspecialchars($_POST['name'], ENT_QUOTES);
$mer    = htmlspecialchars($_POST['mer'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);

// 3. 画面に表示
echo "<p>私の名前は、：{$name} </p>";
echo "<p>ご希望の商品は、：{$mer}セット</p>";
echo "<p>注文数は、：{$number} 個</p>";
