<?

$arr = [11, 12, 456, 45, 84]; // Задание 1

echo count($arr) . "<br>";


$arr = [15, 90, 64 ,654, 87]; // Задание 2
$count = $arr[count($arr) - 1];

echo $count . "<br>";


$arr = [23, 54, 89, 98, 67, 56, 12, 3]; // Задание 3
var_dump(in_array(3, $arr));

echo "<br>";


$arr = [1, 2, 3, 4, 5]; // Задание 4

echo array_sum($arr) . "<br>";


$arr = [1, 2, 3, 4, 5]; // Задание 5

echo array_product($arr) . "<br>";


$arr = [12, 13, 54, 225, 28, 69]; // Задание 6
$count =  count($arr);
$sum = array_sum($arr);

echo $sum / $count . "<br>";


$arr = range(1,100); // Задание 7
var_dump($arr);

echo "<br>";


$arr = range("a","z"); // Задание 8
var_dump($arr);

echo "<br>";


$arr = range(1, 9); // Задание 9

echo implode("-", $arr) . "<br>";


$arr = range(1, 100); // Задание 10

echo array_sum($arr) . "<br>";


$arr = range(1, 10); // Задание 11

echo array_product($arr) . "<br>";


$arr1 = [1, 2, 3]; // Задание 12
$arr2 = ['a', 'b', 'c'];
$res = array_merge($arr1, $arr2);

var_dump($res);

echo "<br>";


$arr = [1, 2, 3, 4, 5]; // Задание 13
var_dump(array_slice($arr, 1, 3));

echo "<br>";


$arr = [1, 2, 3, 4, 5]; // Задание 14

array_splice($arr, 1, 2);
var_dump($arr); 

echo "<br>";


$arr = [1, 2, 3, 4, 5]; // Задание 15

array_splice($arr, 0, 0,[2, 3, 4]);
var_dump($arr); 

echo "<br>";


$arr = [1, 2, 3, 4, 5]; // Задание 16

array_splice($arr, 3, 0,["a", "b", "c"]);
var_dump($arr); 

echo "<br>";


$arr = [1, 2, 3, 4, 5]; // Задание 17

array_splice($arr, 1, 0,["a", "b"]);
array_splice($arr, 6, 0,["c"]);
array_splice($arr, 8, 0,["e"]);
var_dump($arr); 

echo "<br>";


$arr = ["a" => 1, "b" => 2, "c" => 3]; // Задание 18
$keys = array_keys($arr);
$values = array_values($arr);

var_dump($keys);
echo "<br>";

var_dump($values);
echo "<br>";


$arr1 = ["a", "b", "c"]; // Задание 19
$arr2 = [1, 2, 3];
$arr3 = array_combine($arr1, $arr2);

var_dump($arr3);

echo "<br>";

$arr = ["a" => 1, "b" => 2, "c" => 3]; // Задание 20
$res = array_flip($arr);

var_dump($res);

echo "<br>";


$arr = [1, 2, 3, 4, 5]; // Задание 21
$arr = array_reverse($arr);

var_dump($arr);

echo "<br>";


$arr = ["a", "-", "b", "-", "c", "-", "d"]; // Задание 22

echo array_search("-", $arr) . "<br>";


$arr = ["a", "-", "b", "-", "c", "-", "d"]; // Задание 23
$splice = array_search("-", $arr);

var_dump(array_splice($arr, $splice));

echo "<br>";


$arr = ["a", "b", "c", "d", "e"]; // Задание 24

var_dump(array_replace($arr, [0 => '!', 2 => '!!']));

echo "<br>";


$arr = ['3' => 'a', '1' => 'c', '2' => 'e', '4' => 'b']; // Задание 25.1 

sort($arr);

var_dump($arr);

echo "<br>";


$arr = ['3' => 'a', '1' => 'c', '2' => 'e', '4' => 'b']; // Задание 25.2 

rsort($arr);

var_dump($arr);

echo "<br>";


$arr = ['a' => 1, 'b' => 2, 'c' =>3 ]; // Задание 26
$key = array_rand($arr);

var_dump($key);

echo "<br>";


$arr = ['a' => 1, 'b' => 2, 'c' => 3]; // Задание 27
$key = array_rand($arr);

var_dump($arr[$key]);

echo "<br>";


$arrs = range(1, 5); // Задание 28
shuffle($arrs);

foreach ($arrs as $arr) {
    echo "$arr";
}

echo "<br>";


$arrs = range(1, 25); // Задание 29
shuffle($arrs);

foreach ($arrs as $arr) {
    echo "$arr";
}

echo "<br>";


$arrs = range('a', 'z'); // Задание 30
shuffle($arrs);

foreach ($arrs as $arr) {
    echo "$arr";
}

echo "<br>";


$arrs = range('a', 'f'); // Задание 31
shuffle($arrs);

foreach ($arrs as $arr) {
    echo "$arr";
}

echo "<br>";


$arr = ['a', 'b', 'c', 'b', 'a']; // Задание 32
$arr = array_unique($arr);

var_dump($arr);

echo "<br>";


$arr = [1, 2, 3, 4, 5]; // Задание 33

echo array_shift($arr);
echo array_pop($arr);

var_dump($arr);

echo "<br>";


$arr = [1, 2, 3, 4, 5]; // Задание 34
$num1 = array_unshift($arr, 0);
$num2 = array_push($arr, 6);

var_dump($arr);

echo "<br>";


$arr = [1, 2, 3, 4, 5, 6, 7, 8]; // Задание 35
$str = '';

while (count($arr) > 0) {
    $str .= array_shift($arr);
    $str .= array_pop($arr);
}

echo $str . "<br>";


$arr = ['a', 'b', 'c']; // Задание 36
$arr = array_pad($arr, 6, '-');

var_dump($arr);

echo "<br>";


$arr = array_fill(0, 10, 'x'); // Задание 37

var_dump($arr);

echo "<br>";


$arr = range(1, 20); // Задание 38

var_dump(array_chunk($arr, 4));

echo "<br>";


$arr = ['a', 'b', 'c', 'b', 'a']; // Задание 39

var_dump(array_count_values($arr));

echo "<br>";


$arr = [1, 2, 3, 4, 5]; // Задание 40
$result = array_map('sqrt', $arr);

var_dump($result);

echo "<br>";


$arr = ['<b>php</b>', '<i>html</i>']; // Задание 41
$result = array_map('strip_tags', $arr);

var_dump($result);

echo "<br>";

/*$arr = [' a ', ' b ', ' с ']; Задание 42
var_dump($result);
echo "<br>";*/


$arr1 = array (1, 2, 3, 4, 5); // Задание 43
$arr2 = array (3, 4, 5, 6, 7);
$result = array_intersect($arr1, $arr2);

var_dump($result);

echo "<br>";


$arr1 = array (1, 2, 3, 4, 5); // Задание 44
$arr2 = array (3, 4, 5, 6, 7);
$result = array_diff($arr1, $arr2);

var_dump($result);

echo "<br>";


$num = 1234567890; // Задание 45

echo array_sum(str_split($num, 1)) . "<br>";


$arr1 = range("a", "z"); // Задание 46
$arr2 = range(1, 26);
$arr = array_combine($arr1, $arr2);

var_dump($arr);

echo "<br>";


$arr = range(1, 9); // Задание 47

var_dump(array_chunk($arr, 3));

echo "<br>";


$arr = [1, 2, 4, 5, 5] // Задание 48
$arr = array_unique($arr));