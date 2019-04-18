<?php
/*
12. Написать функцию, которая в качестве аргумента принимает строку,
и форматирует ее таким образом, что предложения идут в обратном порядке.
*/


$str = 'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.';

function newString($string){
    $arr = explode(". ", $string);

    $new_arr = array_reverse($arr);

    //remove '.' in first reversed sentence,
    $new_arr[0] = substr($new_arr[0], 0, -1);

    // adding '.' to the last sentence.
    $new_arr[count($new_arr)-1] .= '.';

    // match all changes in one string
    $result = implode('. ', $new_arr);

    print_r($result);
}

newString($str);




