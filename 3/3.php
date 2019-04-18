<?php
/*Есть текстовый файл. 
Необходимо удалить из него все слова, длина которых превыщает N символов. 
Значение N задавать через форму. 
Проверить работу на кириллических строках - найти ошибку, найти решение.
*/

if(!empty($_POST)) {
    $number = $_POST['number']; //getting the max.number value
    $file = file_get_contents('text.txt'); //getting he file content
    $arr_file = explode(' ', $file);
   
    foreach ($arr_file as $item) {
        if ($number >= strlen($item)) {
            $new_arr[] = $item;
            }
    }
    
    $new_string = implode(" ", $new_arr);
    file_put_contents('filtered_text.txt', $new_string);
    $new_file = file_get_contents('filtered_text.txt');  
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>task 3</title>
</head>
<body>
	<form method="post">
		<input type="number" name="number" placeholder="Max. word length is...">
		<button type="submit"> Let's go</button>
	</form>
	<p> The result is presented below:</p>
	<p><?=@$new_file;?></p> <!--@ is for hide the notice line-->
</body>
</html>