
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
?>


