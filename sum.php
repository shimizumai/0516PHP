<?php
//　1~10 までを足した値を返す関数
function sum(){
    
    //$result は結果を保存する変数
    $result = 0;
    
    //$iは1からはじまり、10より大きくなるまでループする
    for($i = 1; $i <= 10; $i++){
        
        //$resultに　$i　を順番に足していく
        $result += $i;
}
//result を結果として返す
return $result;
}
echo sum();
?>

<?php
//引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

function bai($max)	{
	return $max*2;
}
echo bai(9)."\n";

function add($a,$b){
    return $a+$b;
}
echo add(1,2) . "\n";

/*3.$arr という配列の仮引数を持ち、
数値が入った配列array(1, 3, 5 ,7, 9) を渡すと
その要素をすべてかけた結果を返す関数を作成してください */

function kakeru($arr){
    $result = 1;
    foreach($arr as $a) {
        $result *= $a;
    }
    return $result;
}
echo kakeru(array(1, 3, 5, 7, 9)) . "\n";

/*4.【応用】　下記のプログラムは配列の中で1番大きい値を返す
max_array という関数を実装しようとしています。
途中の部分を完成させてください*/

 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
    $result = $max_number;
 }

    return $max_number;
 }
echo max_array(array( 1, 3, 4, 5));



//●strip_tagsはHTMLタグや、PHPタグを取り除いてくれる関数.
//取り除く必要のないタグは第二引数で指定可能
$html_code = "<p>課題</p>";
$html_code = strip_tags($html_code);
echo $html_code ."\n";

//array_pushは、一つ以上の要素を配列の最後に追加する
//array_push(追加先の配列,追加する値1,追加する値2,…)
$fluets = array("meron", "lemon", "momo");
array_push($fluets, "ringo", "mikan") ."\n";
//print_r($fluets);で出力

//array_merge関数は配列の要素の最後に、一つまたは複数の配列を結合する時に使用
//配列を作成
$fluets1 = ['momo', 'mikan'];
$fluets2 = ['meron', 'ringo']; 
$array = array_merge($fluets1, $fluets2);

print_r($array) ."\n";

//現在の日時をUnixタイムスタンプへと変換する
//Unixタイムスタンプとはコンピューターシステム上での時刻表現の一種
echo time() ."\n";
//1970年1月1日から今日まで経過した秒数が出力される。
//引数は不要

//mktime関数は指定した日時のUNIXタイムスタンプを取得する

$time = mktime(18, 51, 10, 5, 25, 2020);
echo date("Y/m/d/ H:i:s", $time) ."\n";

//dateはローカルの日付・時刻を書式化します。
//書式　変数　=　date(書式[,タイムスタンプ])
$time = date("Y/m/d/I H:i:s");
echo $time;
