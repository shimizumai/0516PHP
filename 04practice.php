<?php
$weekday = "月曜";
switch ($weekday) {
    case "月曜":
        echo "可燃ごみの日です";
    case "水曜":
        echo "資源ごみの日です";
    default:
        echo "回収はありません"."\n";
        break;
        
}
//=> 可燃ごみの日です。資源ごみの日です。回収はありません。と表示されてしまう。

for($i = 0; $i <10; $i++){
    echo $i;
}

$total = 0;
echo $total."\n";

for ($i = 0; $i <= 100; $i++) {
    $total += $i;
}
echo $total."\n";

$name = "mai";
if ($name === "mai") {
    echo "私は" . $name . "です" ."\n";
} else {
    echo $name . "ではありません";
}

$start = 1;
$end = 10000;
$total = 0;
for($i = $start; $i <= $end; $i++){
    $total += $i;
}
echo $total ."\n"; //50005000

$fruits = array("apple", "orange", "lemon", "meron", "momo");
foreach($fruits as $fruit){
    echo "要素は" . $fruit;
    echo "\n";
}

//for文の始めの値を定義する
$start = 1;
// for文の終わりの値を定義する
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 === 0){
    echo $i . "\n";
  }
}

//https://github.com/shimizumai/php_practice04.git
  