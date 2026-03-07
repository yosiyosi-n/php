<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./001.css" />
</head>
<body>
<?php
$people = [
  [
    "last_name" => "山田",
    "first_name" => "太郎",
    "age" => 29,
    "gender" => "男性"
  ],
  [
    "last_name" => "鈴木",
    "first_name" => "次郎",
    "age" => 25,
    "gender" => "男性"
  ],
  [
    "last_name" => "佐藤",
    "first_name" => "花子",
    "age" => 20,
    "gender" => "女性"
  ]
];
// HTMLで記述した段落は反映される。
echo "<p class = 'item'> {$people[0]["last_name"]}</p>";
echo $people[2]["first_name"];
// "<br />";で記述すると反映されない。
echo "<br />";
echo $people[0]["first_name"];

?>
</body>
</html>