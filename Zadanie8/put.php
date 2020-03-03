<?php
/* PUT данные приходят в потоке ввода stdin */
$putdata = fopen("http://sergadaev/286-UrbEO/Zadanie8/form.html", "r");

/* Открываем файл на запись */
$fp = fopen("anketa.ext", "w");

/* Читаем 1 KB данных за один раз
   и пишем в файл */
while ($data = fread($putdata, 1024))
  fwrite($fp, $data);

/* Закрываем потоки */
fclose($fp);
fclose($putdata);

?>