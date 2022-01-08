<?php 
$count_text = "count_text.txt";
$count = file_get_contents($count_text);
$count++;
$f = fopen($count_text, "w");
fwrite($f ,$count);
echo "Обновили количество раз $count";
echo "\n"; 
