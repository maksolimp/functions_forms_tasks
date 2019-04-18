<?php
/*Создать форму с элементом textarea.
При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте.
Реализовать с помощью функции.*/

$str = $_POST['message1'];
$str = explode(' ', $str);

function sort_func($a, $b)
{
 	if (mb_strlen($a) > mb_strlen($b)) {
 		return false;
 	} else {
 		return true;
 	}
 	//return (mb_strlen($a) > mb_strlen($b)) ? -1 : 1;
};
usort($str, "sort_func");

echo "Three longest words: <br/>";

foreach ($str as $item => $value){
    if ($item < 3){
        echo $value .'<br/>';
    }
};