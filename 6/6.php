<?php
/*6. Создать страницу, на которой можно загрузить несколько фотографий в галерею.
Все загруженные фото должны помещаться в папку gallery и выводиться на странице в виде таблицы.
 */

$dir = __DIR__."\gallery"."\/";
$arr_name = [];
/*
echo '<pre>';
var_dump($_FILES["file"]["tmp_name"]);

var_dump($_FILES["file"]["name"]);
echo '</pre>';
*/

/*
echo "Путь к файлу на сервере следующий: ". $_FILES['file']['tmp_name']."<br>"; 
echo "Путь к файлу на клиентской машине следующий: ". $_FILES['file']['name']."<br>"; 
echo "Размер файла в байтах следующий: ". $_FILES['file']['size']."<br>"; 
echo "Тип файла следующий: ". $_FILES['file']['size']."<br>";
*/

if(isset($_POST["submit"])) {
	foreach ($_FILES["file"]["error"] as $key => $error) {
		if($_FILES["file"]["error"] == UPLOAD_ERR_NO_FILE){
			echo 'no files are added. Select files, please!';
		} else{

			$tmp_name = $_FILES["file"]["tmp_name"][$key];
			$name = basename($_FILES["file"]["name"][$key]);

			move_uploaded_file($tmp_name, $dir.$name);
		}

		$arr_name[] = $name;
		
	}
}


// creating gallery 

echo '<h1>Downloadable gallery by user:</h1>';
echo '<table border="1"><tr>';

foreach ($arr_name as $img)
{
	$img = (string)$img;
	echo '<td><img width="300" height="200" src="./gallery/'. $img .'"></td>';
}
echo '</tr></table></br>';
echo "<button><a href='6.html'>Back to the Homepage!</a></button>";


