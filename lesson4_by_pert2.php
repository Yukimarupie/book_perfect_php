<?php

//===4.1.4 while
$i = 111;
echo 'これは、while構文の出力結果です', PHP_EOL;
while ($i < 10) {
    echo $i;
    $i++;
}

echo PHP_EOL;
/* 出力結果
0123456789
*/

//=== 4.1.5 do-while
$a = 210;
echo 'これは、do-while構文の出力結果です', PHP_EOL;
do {
    echo $a;
    $a++;
} while ($a < 10);

echo PHP_EOL;
echo PHP_EOL;
//出力結果は変わらないが、条件式が評価される前に必ずdoブロックが実行される
//初期値を11にした時、do-while構文なら11が出力されるが、while構文なら何も出力されない



//=== 4.1.6 for
// for (初期化式; 条件式; 反復式)
// 文
echo 'これは、for構文の出力結果です', PHP_EOL;
$array = array(1,2,3,4,5,);
for ($i = 0, $end = count($array); $i < $end; ++$i) {
    echo $array[$i];
}
echo PHP_EOL;

//これは、for構文の出力結果です
//12345


//＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
//=== 4.1.7 foreach
// foreach (反復可能なデータ構造 as 要素 ) 
// 初期化した変数$array_foreach を、先頭から要素の最後になるまで繰り返し、$valueに格納して出力される
//＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝

echo 'これは、foreach構文の出力結果です', PHP_EOL;
$array_foreach = array(1,2,3,4,5,);
foreach ($array_foreach as $value) {
    echo $value;
}
echo PHP_EOL;

echo 'これはforeach構文の書式を用いて、連想配列のキーを取り出す例題です', PHP_EOL;
$fruits_color = array(
    'apple' => 'red',
    'orange' => 'orange',
    'banana' => 'yellow',
);

foreach ($fruits_color as $name => $color) {
    echo "$name is $color", PHP_EOL;
}
echo PHP_EOL;

/*これは、foreach構文の出力結果です
12345
これはforeach構文の書式を用いて、連想配列のキーを取り出す例題です
apple is red
orange is orange
banana is yellow */


echo 'これはforeach構文が、反復時に参照を用いることを示す例題です', PHP_EOL;
$fruits_color_2 = array(
    'apple' => 'red',
    'orange' => 'orange',
    'banana' => 'yellow',
);

foreach ($fruits_color_2 as &$color) {
    $color = 'black';
}
var_dump($fruits_color_2);
echo PHP_EOL;
/*これはforeach構文が、反復時に参照を用いることを示す例題です
array(3) {
  ["apple"]=>
  string(5) "black"
  ["orange"]=>
  string(5) "black"
  ["banana"]=>
  &string(5) "black"
}*/


//=== 4.1.8 break
//繰り返しのブロックから抜けるために使う
echo PHP_EOL, 'これはbreakの出力結果の確認です', PHP_EOL;
$dice = range(1,6);
shuffle($dice);
foreach ($dice as $value) {
    echo $value, PHP_EOL;
    if ($value === 6) {
        break;
    }
}

/*これはbreakの出力結果の確認です
2
6*/


//=== 4.1.9 continue
echo PHP_EOL, 'これはcontinueの出力結果の確認です', PHP_EOL;
$dice_for_continue = range(1,6);
shuffle($dice_for_continue);
foreach ($dice_for_continue as $value) {
    if ($value % 2 !== 0) {
        continue;
    }
    echo $value, PHP_EOL;
}

?>

