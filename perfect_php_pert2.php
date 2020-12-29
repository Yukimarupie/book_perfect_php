
<?php 
/*
const BOOK = 'Perfect PHP';
echo BOOK, PHP_EOL;

?>

<?php
define('THIS_BOOK', 'perfect phpをdefineしたよ！');

$value = "THIS_BOOK";
echo constant($value), PHP_EOL;

?>

<?php

var_dump(get_defined_constants());
*/
?>

<?php
/*
$float1 = floatval("1.2");
$float2 = (float)"0.1";

$string = "Hi, あいうえお";
echo "${float1}, ${float2}", PHP_EOL;
echo "${string}", PHP_EOL;
*/

/*
//以下ヒアドキュメント
$age = 15;

$foo = <<<EOI
ヒアドキュメントではこんな感じで
複数行にわたる
文章をそのまま表記できるよ

Tomの年齢は${age}才です。
EOI;

echo "${foo}", PHP_EOL;
*/

//以下Nowdoc ヒアドキュメントと違って変数を出力できない

/*
$age = 15;

$foo = <<<'EOI'
ヒアドキュメントではこんな感じで
複数行にわたる
文章をそのまま表記できるよ

Tomの年齢は${age}才です。
EOI;

class NowDocTest
{
    const DOCUMENT1 = <<<'EOI'
    変数やエスケープ文字を展開しないため、文字列がパースされない。
    なのでconstに指定できる
    EOI;

        const DOCUMENT2 = <<<EOI
        変数を含まない、ドル文字が適切にエスケープされてれば、
        ヒアドキュメントもconstに指定できる。
        ドルを含む文章は、\$foo のようにドル文字をエスケープする
        EOI;
}

*/


//===文字列とキャスト

/*
echo 15.0, PHP_EOL; //これは15で出力される

printf('%.1f', 15.0); //printf()関数で15.0で出力可能
*/

//文字列の連結を行うドット演算子
/*
$age = 23;
$yuki = 'Yuki is ' . $age . ' years old';

echo $yuki, PHP_EOL;

$tom = 'Tom is ' . 15 . 'yrs old';
$bob = 'Bob is ' . 16. 'yrs old'; //これは不動小数点扱いされてエラーに。

echo $tom, PHP_EOL, $bob;
*/

//===加算子・減算子 後ろにつけるか先につけるかで、返される値が違うよ！
/*
$a = 10;

echo --$a, PHP_EOL; //9
echo ++$a, PHP_EOL; //10
echo $a++, PHP_EOL; //10
echo $a, PHP_EOL; //11
*/

//===論理演算子
/*
if (isset($argv[1]) && $argv[1]) {
    echo '与えられた引数は真です', PHP_EOL;
}
else {
    echo '引数が与えられていないか、与えられた引数が真ではありません', PHP_EOL;
}
*/

//配列の初期化
/*
//$fruits = 1;
//echo $fruits;

//$fruits[] = 'apple'; //空のブラケットを用いた配列の初期化。
//echo $fruits; //1が返る

$vegetable = array(
    'onion',
    'cabetsu',
    'tomato',
);

echo $vegetable[2], PHP_EOL; //tomato が返る。引数なしはFatal errorに。
*/

//===3.3.3 連想配列
/*
$fruits_color = array(
    'apple' => 'red',
    'banana' => 'yellow',
    'peach',
    1, //キーが0
);

echo $fruits_color['apple'], PHP_EOL; //red
echo $fruits_color[0], PHP_EOL; //何も返らない 
echo $fruits_color[2], PHP_EOL; //peach
echo $fruits_color[3], PHP_EOL; //何も返らない 

var_dump($array); //NULL
*/

//===3.3.4 多次元配列
$fruits = array(
    'apple' => array(
        'price' => 100,
        'count' => 5,
    ),
    'banana' => array(
        'price' => 80,
        'count' => 2,        
    ),
    'orange' => array(
        'price' => 120,
        'count' => 9,        
    ),

);

foreach ($fruits as $name => $value) {
    echo "$name は1つ {$value['price']}円で、{$value['count']}個です", PHP_EOL;
}

//出力結果↓
//apple は1つ 100円で、5個です
//banana は1つ 80円で、2個です
//orange は1つ 120円で、9個です


?>





