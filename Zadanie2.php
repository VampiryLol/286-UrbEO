<?

echo strtoupper("php") . "<br>"; // Задание 1


echo strtolower("PHP") . "<br>"; // Задание 2


echo ucfirst("london") . "<br>"; // Задание 3


echo strtolower("London") . "<br>"; // Задание 4


echo ucwords("london is the capital of great britain") . "<br>"; // Задание 5


echo ucfirst(strtolower("LONDON")) . "<br>"; // Задание 6


echo strlen("html css php") . "<br>"; // Задание 7


$password = "kssndf"; // Задание 8 
$strlen = strlen($password);


if ($strlen > 5 & $strlen < 10) {
    echo "Пароль подходит";
} else { 
    echo "Придумайте другой пароль" ;
}

echo "<br>";


$Rex = explode(" ", "html css php"); // Задание 9

echo substr($Rex[0], 0, 4) . "<br>";
echo substr($Rex[1], 0, 3) . "<br>";
echo substr($Rex[2], 0, 3) . "<br>";


echo substr("jdfnbjfdnbjdmfb", -3) . "<br>"; // Задание 10


$Site = "http://www.google.com"; // Задание 11
$httpChek = substr($Site, 0,7);
$http = "http://";
if ($httpChek == $http) {
    echo "Да";
} else {
    echo "Нет";
}

echo "<br>";


$cite = "http://www.google.com"; // Задание 12
$Chek = substr($cite, 0,7);
$chek2 = substr($cite, 0,8);
$httpio = "http://";
$https = "https://";
if ($Chek == $httpio or $chek2 == $https) {
    echo "Да";
} else {
    echo "Нет";
}

echo "<br>";


$file = "aaaa.png"; // Задание 13
$fileChek = substr($file, -4);
$png = ".png";
if ($fileChek == $png) {
    echo "Да";
} else {
    echo "Нет";
}

echo "<br>";


$file2 = "aaaa.png"; // Задание 14
$fileChek2 = substr($file2, -4);
$jpg = ".jpg";
$png2 = ".png";
if ($fileChek2 == $png2 or $fileChek2 == $jpg) {
    echo "Да";
} else {
    echo "Нет";
}

echo "<br>";


$sir = "lkdnfghmdf"; // Задание 15
$sirChek = strlen($sir);

if ($sirChek > 5) {
    substr($sir, 0, 5);	
} else {
    echo "Нет";
}

echo "<br>";


$line = "oprnghklfg"; //Задание 15
$lineChek = strlen($line);
if ($lineChek > 5) {
    echo substr($line, 0, 5) . "...";
} else {
    echo $line;
}

echo "<br>";


echo  str_replace(".", "-", "31.12.2013") . "<br>"; // Задание 16


$str = "abc"; //Задание 17
echo  str_replace(["a", "b", "c"], [1, 2, 3], $str) . "<br>";


$stroka = "1a2b3c4b5d6e7f8g9h0"; // Задание 18
str_replace(1, "", $stroka);
 
echo $stroka . "<br>";


$aaabbbabccabbacbcabca = "aaabbbabccabbacbcabca"; // Задание 19

echo  strtr($aaabbbabccabbacbcabca, ["a" => "1", "b" => "2", "c" => "3"]) . "<br>";

echo  strtr($aaabbbabccabbacbcabca, "abc", "123") . "<br>";


$strochka = "pklpgdfkgp"; // Задание 20

echo substr_replace($strochka, "!!!", 3, 5) . "<br>";


echo strpos("abc abc abc", "b") . "<br>"; // Задание 21


echo strrpos("abc abc abc", "b") . "<br>"; // Задание 22


echo strpos("abc abc abc", "b", 3) . "<br>"; // Задание 23


echo strpos("aaa aaa aaa aaa aaa", " ") . "<br>"; // Задание 24


if (strpos("dfgdfglk..mdfg", ".." )) { // Задание 25
    echo "Есть";
} else {
    echo "Нет";
}

echo "<br>";


if (strpos("http://google.com", "http://") === 0) { // Задание 26
    echo "Да";
} else {
    echo "Нет";
}

echo "<br>";


$massive = explode(" ", "html css php"); // Задание 27
var_dump($massive) . "<br>";


$massive2 = ["html", "css", "php"]; // Задание 28
$implode = implode(",", $massive2);
echo $implode . "<br>";


$date = "2013-12-31"; // Задание 29
$explode1 = explode("-", $date);
echo $explode1[2] . "." . $explode1[1] . "." . $explode1[0] . "<br>";


$str_split1 = str_split("1234567890", 2); // Задание 30
var_dump($str_split1) . "<br>";


$str_split2 = str_split("1234567890", 1); // Задание 31
var_dump($str_split2) . "<br>";


$zifri = "1234567890"; // Задание 32
$str_split3 = str_split($zifri, 2);

echo $str_split3[0] . "-" . $str_split3[1] . "-" . $str_split3[2] . "-" . $str_split3[3] . "-" .$str_split3[4] . "<br>";

echo trim(" hello ") . "<br>"; // Задание 33


echo trim("/php/", "/") . "<br>"; // Задание 34


$words = "слова слова слова"; // Задание 35
$rtrim = rtrim("слова слова слова.", ".");
echo $rtrim . "." . "<br>";


echo strrev("12345") . "<br>"; // Задание 36


$word = "level"; // Задание 37
$strrev = strrev($word);

if ($word==$strrev) {
    echo "Слово является палиндромом";
} else {
    echo "Слово не является палиндромом";
}

echo "<br>";

echo str_shuffle("I`am baby shark") . "<br>"; // Задание 38


$cookie = "qwertyuiopasdfghjklzxcvbnm"; // Задание 39
echo substr(str_shuffle($cookie), 0, 6) . "<br>";


echo number_format("12345678", 0, " ", " ") . "<br>"; // Задание 40


for ($i = 1; $i <= 9; $i++) { // Задание 41
	echo str_repeat("x", $i) . "<br>";
}
echo "<br>";

for ($i = 1; $i <= 9; $i++) { // Задание 42
	echo str_repeat($i, $i) . "<br>";
}

echo "<br>";


echo strip_tags("html, <b>php</b>, js") . "<br>"; // Задание 43


$str = "<p>html</p>, <div>css</div>, <b>php</b>, <i>js</i>"; // Задание 44
echo strip_tags($str, "<b>,<i>") . "<br>";


echo htmlspecialchars("html, <b>php</b>, js") . "<br>"; // Задание 45


echo ord("a") . "<br>";  // Задание 46
echo ord("b") . "<br>";
echo ord("c") . "<br>";
echo ord(" ") . "<br>";


echo chr(33) . "<br>"; //Задание 48


$str = chr(mt_rand(65,90)); // Задание 49
echo $str . "<br>";


$len = 1; // Задание 50

for ($i = 1; $i <= $len; $i++) {
    $str = chr(mt_rand(97, 122));
}

echo $str . "<br>";	


$letter = "a"; // Задание 51
if (ord($letter) >= 65 & ord($letter) <= 90) {
    echo "Большая буква";
} elseif (ord($letter) >= 97 & ord($letter) <= 122) {
    echo "Маленькая буква";
}

echo "<br>";


echo strstr("ab--cd--ef", "-") . "<br>"; // Задание 52


$str = "var_test_text"; // Задача 1
$massive = explode("_", $str);

echo $massive[0]. ucfirst($massive[1]).ucfirst($massive[2]) . "<br>";


$massive = [13, 21, 42, 103, 53, 67, 28, 167]; // Задача 2
foreach ($massive as $elem) {
	if (strpbrk($elem, 3) != false) {
		echo $elem . "<br>";
    }
} 

echo "<br>";