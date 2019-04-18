<?php
/* Написать функцию, которая выводит список файлов в заданной директории,
которые содержат искомое слово.
Директория и  искомое слово задаются как параметры функции */

function current_dir($dir, $word){
    $arr_dir=(scandir($dir));
    for ($i = 0; $i < count($arr_dir); $i++) {
        $pos=strpos($arr_dir[$i],$word);
        if($pos!==false){
            $result[]=$arr_dir[$i];
        }
    }
    return $result;
}
print_r(current_dir(__DIR__,'2'));
