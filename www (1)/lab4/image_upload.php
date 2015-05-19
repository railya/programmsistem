<?php

if(isset($_FILES['filename']) && $_FILES['filename']['error'] == 0){
// Директория для закачивания
$dir = '/uploads/images/';
// Допустимые MIME-типы
$arrType = array('image/jpeg','image/gif','image/png',);
// Допустимые расширения
$arrExt = array('png', 'jpg', 'jpeg', 'gif');
// Получаем расширение файла
$ext = pathinfo($_FILES['filename']['name'], PATHINFO_EXTENSION);
$type = false;
if (function_exists('finfo')) {
// 1. Проверка MIME-тип файла и расширение
$finfo = new finfo(FILEINFO_MIME_TYPE);
$type = $finfo->file($_FILES['filename']['tmp_name']);
}
if (!$type || (in_array($type, $arrType) && in_array($ext, $arrExt))){
// 2. Генерирование уникального имени и пути файла
$filepath = $dir.uniqid().'.'.$ext;
if(move_uploaded_file($_FILES['filename']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].$filepath)){
// Если файл загружен, то можем вывести его на экран
//echo '<img src="'.$filepath.'" alt="">'; 
    echo"Загружено изображение ".$_FILES['filename']['name']."<br/><img src='".$name."'/>";
} else {
echo 'Хьюстон! У нас проблемы!';
}
}
}
?>


<html><head><title>PHP-ФopMa для загрузки файлов на cepBep</title></head><body>
<form method='post' enctype='multipart/form-data'>
Выберите файл:<input type='file' name='filename'/>
<input type='submit' value='Загрузить' />
</form>
</body></html>