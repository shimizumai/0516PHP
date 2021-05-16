<?php
echo 'hello php!'."\n";
$a= 3;
$b= 7;
echo $a + $b."\n";

$array_month = ["1月","2月","3月","4月","5月","6月","7月","8月"];
echo $array_month[7]."\n";

$hello = 'Hello';
$name = 'mai';
$world = "'s World!";
echo $hello.$name.$world."\n";

$tech_boost = 'techboost';
echo $tech_boost;


$a2018_calendar = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $a2018_calendar[December];