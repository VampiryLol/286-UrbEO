<?

// Самая первая функция, по заданию надо именно из неё надо сделать вторую, но я её оставил, на всякий случай.
/*
function getPlus10($num1, $num2 = 10)
{
	$sum = $num1 + $num2;
	echo "Сумма чисел равна $sum";
}
getPlus10(7);

echo '<br>';
*/


// Функция 2
function getPlus10($num1, $num2 = 10)
{
	$sum = $num1 + $num2;
	return $sum;
}
$return_value = getPlus10(8);

echo 'Сумма чисел равна $return_value.'. '<br>';


// Функция 3
function pythagoras($katet1, $katet2)
{
	$gipotenusa = sqrt($katet1**2 + $katet2**2);
	return $gipotenusa;
}

$return_gipotenusa = pythagoras(3, 4);

echo 'Гипотенуза равна $return_gipotenusa.'. '<br>';


// Функция 4
function ipoteka($proc_stavka, $srok, $kredit_sum)
{
	$mes_proc = $proc_stavka / 100 / 12;
	$tmp = (1 + $mes_proc) ** ($srok * 12);
	$mes_plat = $kredit_sum * $mes_proc * ($tmp / ($tmp - 1));
	echo 'Ипотечный платеж равен $mes_plat рублей в месяц.';
}

ipoteka(11.5, 20, 1500000);

echo '<br>';


// Функция 5
function col()
{
	$numargs = func_num_args();
	echo 'Количество аргументов: $numargs\n.';
}

col(215, 61, 34, 78);

echo '<br>';


// Функция 6
function mid_value(int $arg1, int $arg2, int $arg3)
{
	$args = [$arg1, $arg2, $arg3];
	$count = count($args);
	$sum = array_sum($args);
	echo $sum / $count;
}

mid_value(3, 4, 2);

echo '<br>';


// Функция 7 
function op($num1, $num2, $operator)
{
	if ($operator == '+') {
		$sum = $num1 + $num2;
		return $sum;
	} elseif ($operator == '-') {
		$min = $num1 - $num2;
		return $min;
	} elseif ($operator == '*') {
		$um = $num1 * $num2;
		return $um;
	} elseif ($operator == '/') {
		$odd = $num1 / $num2;
		return $odd;
	}
}

$return_num = op(2, 6, '*');

echo 'Результат выполнения операции равен $return_num' . '<br>';

// Функция 8
function add($num1, $num2)
{
	$sum = $num1 + $num2;
	return $sum;
}

$return_sum = add(2, 4);

echo 'Сумма чисел равна $return_sum.' . '<br>';


// Функция 9
function sub($num1, $num2)
{
	$sub = $num1 - $num2;
	return $sub;
}

$return_sub = sub(6, 2);

echo 'Разность чисел равна $return_sub.' . '<br>';


// Функция 10 
function op2($num1, $num2, $callable)
{
	
}

$return_callable = op2(2, 3);

echo $return_callable;