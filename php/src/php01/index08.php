<?php
$people = array('Taro', 'Jiro', 'Saburo');

var_dump($people);

echo $people[0];
?>

<?php
$people = array(
    'person1' => 'Taro',
    'person2'  => 'Jiro',
    'person3'  => 'Saburo'
);

var_dump($people);

$people = [
    'person1' => 'taro',
    'person2' => 'jiro',
];

echo $people['person1'];
?>

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
echo $people[0]["last_name"];
echo "<br />";
echo $people[2]["gender"];
echo "<br />";
?>

<?php
$people = array('Taro', 'Jiro', 'Saburo');

foreach ($people as $person) {
    echo $person;
    echo '<br />';
}
?>

<?php
$people = array(
    'person1' => 'Taro',
    'person2'  => 'Jiro',
    'person3'  => 'Saburo'
);

foreach ($people as $person => $name) {
    print $person . "は" . $name . "です" . '<br />';
}
?>

<?php
$people1 = [
    [
        "name1" => "Taro",
        "age_gender" => "(25歳men)",
    ],
    [
        "name1" => "Jiro",
        "age_gender" => "(20歳men)",
    ],
    [
        "name1" => "Hanamo",
        "age_gender" => "(16歳women)",
    ]
];
echo $people1[0]["name1"] . $people1[0]["age_gender"];
echo "<br />";
echo $people1[1]["name1"] . $people1[1]["age_gender"];
echo "<br />";
echo $people1[2]["name1"] . $people1[2]["age_gender"];
echo "<br />";
?>


<?php
$people2 = array(
    "(25歳men)" => "Taro",
    "(20歳men)" => "Jiro",
    "(16歳women)" => "Hanako"
);

foreach ($people2 as $person => $name) {
    print $name . $person . "<br />";
}
?>

<?php

$people = [
  ['Taro', 25, 'men'],
  ['Jiro', 20, 'men'],
  ['hanako', 16, 'women']
];

foreach ($people as $person) {
  echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')'. '<br />';
}
// $person[0](名前) . $person[1](年齢) . $person[2](性別)