<?php
/*
10. Написать функцию, которая считает количество уникальных слов в тексте. 
Слова разделяются пробелами. Текст должен вводиться с формы.
*/


$words = $_POST['text'];

function countUniqueWords(string $str) :int
{
	$lower_words = strtolower($str);
	$arr_words = explode(" ", $lower_words);
	$unique = array_unique($arr_words);
	$result = count($unique);

	return $result;
}

$print_result = countUniqueWords($words);

echo "<strong>Your input words:</strong> {$words}<br>";
echo "<b>Unique words are (as integer):</b> {$print_result} <hr>";
