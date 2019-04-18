
<?php
/*
9.Написать функцию, которая переворачивает строку.
Было "abcde", должна выдать "edcba". Ввод текста реализовать с помощью формы.
*/
if (!empty($_POST)){
	$str = $_POST['text'];
	$result = '';
	function reverse($a)
	{
		echo strrev($a);
	}
	reverse($str);
}

?>

<!DOCTYPE>
<html>
<head>
    <title>Task 9</title>
</head>
<body>
<form action="" method="post">
    <textarea name="text" id="text" cols="30" rows="10"></textarea>
    <input type="submit" value="Reverse it!" name="submit">
</form>
</body>
</html>
