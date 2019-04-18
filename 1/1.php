<?php

function getCommonWords($a, $b)
{
    $a = explode(' ', $a);
    $b = explode(' ', $b);
    $result = array_intersect($a, $b);
    if ($result) {
        echo 'Identical words: <br/>';
        foreach ($result as $item)
            echo $item.'<br/>';
    } else {
        echo 'No identical words';
    }
}
getCommonWords ($_POST ['message1'],$_POST ['message2']);

