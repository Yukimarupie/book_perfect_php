<?php

// 関数のお勉強
echo "これは、引数のデフォルト値についてだよ", PHP_EOL;
function hello ($name, $greeting = 'Hello!') //こんなふうに初期値を与えられる
{
    echo $greeting, $name, PHP_EOL;
}

hello('Bob', 'Good morning'); //=> Good morningBob
hello('Tom'); //=> Hello!Tom 引数の指定がないため、デフォルトのHelloに。


echo PHP_EOL;


echo "関数に渡す引数の型を限定する、タイプヒンディングについてだよ", PHP_EOL;

function array_output (array $var)
{
    if (is_array($var)) foreach ($var as $v) {
        echo $v;
    }
    echo PHP_EOL;
}

$array = array(1,2,3,);
array_output($array); //=> 123
//array_output(1); //=> Fatal errorに
echo PHP_EOL;


//==== コールバック関数
echo "コールバック関数についてだよ。全く分からないよ。", PHP_EOL;
$array = array(1, 1.5, "2", true,);
$new_array = array_map('strval', $array);
echo PHP_EOL;

//==== 可変関数
echo "引数に与えられた名前をもつ関数が存在すれば呼び出せる可変関数だよ。これまた分からなかったよ", PHP_EOL;
function func_caller($name)
{
    if (function_exists($name)) {
        echo "function_exists関数で、その関数が存在するかチェックしてるよ", PHP_EOL;
        $name(); //可変関数として関数の呼び出し
    }
}

function foo()
{
    echo 'foo called', PHP_EOL;
}
func_caller('foo');

echo PHP_EOL;


//==call_user_funcとcall_user_func_array より高度な関数呼び出しパターンだよ
function add($v1, $v2)
{
    return $v1 + $v2;
}

class Math
{
    public function sub($v1, $v2)
    {
        return $v1 + $v2;
    }
}

$bc = call_user_func('add', 1, 2);
echo $bc, PHP_EOL;

//==== 4.2.4 参照による引数と返り値

function add_one(&$value)
{
    $value += 1;
}
$a = 10;
add_one($a);
echo $a, PHP_EOL; // => 11

//=== 4.2.5 無名関数
echo "無名関数だよ", PHP_EOL;
$add = function($v1, $v2)
{
    return $v1 + $v2;
};
echo $add(1,6), PHP_EOL;
echo PHP_EOL;

/*よく分からないよ〜ーー
$array_for_noname = array(
    '"ダブルクォーと"',
    '<tag>',
    '\'シングルクォート\'',
);

$escaped = array_map(function($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}, $array_for_noname);

echo $array_for_noname(3);
*/

//クロージャ
echo "クロージャだよ", PHP_EOL;
$my_pow = function($times = 2)
{
    return function ($v) use (&$times)
    {
        return pow($v, $times);
    };
};

$cube = $my_pow(3); //３乗を行う関数が定義される
echo $cube(2), PHP_EOL;
echo $cube(5), PHP_EOL;
echo PHP_EOL;
?>