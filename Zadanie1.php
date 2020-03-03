<?

$str = 'Sергадеев Aлексей Lьвович';

$aaaa = explode(' ' , $str);
echo $aaaa[0] . ' ';

$bbb = substr($aaaa[1], 0, 1);
$ccc = substr($aaaa[2], 0, 1);

echo $bbb . '.';
echo $ccc . '.';