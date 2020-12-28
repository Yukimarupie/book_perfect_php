
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
$a = 10;

echo --$a, PHP_EOL; //9
echo ++$a, PHP_EOL; //10
echo $a++, PHP_EOL; //10
echo $a, PHP_EOL; //11
?>





