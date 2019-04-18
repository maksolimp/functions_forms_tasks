<?php
/*
11. Написать функцию, которая в качестве аргумента принимает строку,
и форматирует ее таким образом, что каждое новое предложение начиняется с большой буквы.
*/


$str = $_POST['text'];

function newString($string){
    $arr = explode(". ", $string);
    foreach ($arr as $value){
        $new = mb_strtoupper(mb_substr($value, 0, 1));
        $newarr[] = $new.mb_substr($value, 1);
    }
    $result = implode('. ', $newarr);
    return $result;
}
echo newString($str);




