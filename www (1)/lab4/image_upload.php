<?php

if(isset($_FILES['filename']) && $_FILES['filename']['error'] == 0){
// ���������� ��� �����������
$dir = '/uploads/images/';
// ���������� MIME-����
$arrType = array('image/jpeg','image/gif','image/png',);
// ���������� ����������
$arrExt = array('png', 'jpg', 'jpeg', 'gif');
// �������� ���������� �����
$ext = pathinfo($_FILES['filename']['name'], PATHINFO_EXTENSION);
$type = false;
if (function_exists('finfo')) {
// 1. �������� MIME-��� ����� � ����������
$finfo = new finfo(FILEINFO_MIME_TYPE);
$type = $finfo->file($_FILES['filename']['tmp_name']);
}
if (!$type || (in_array($type, $arrType) && in_array($ext, $arrExt))){
// 2. ������������� ����������� ����� � ���� �����
$filepath = $dir.uniqid().'.'.$ext;
if(move_uploaded_file($_FILES['filename']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].$filepath)){
// ���� ���� ��������, �� ����� ������� ��� �� �����
//echo '<img src="'.$filepath.'" alt="">'; 
    echo"��������� ����������� ".$_FILES['filename']['name']."<br/><img src='".$name."'/>";
} else {
echo '�������! � ��� ��������!';
}
}
}
?>


<html><head><title>PHP-�opMa ��� �������� ������ �� cepBep</title></head><body>
<form method='post' enctype='multipart/form-data'>
�������� ����:<input type='file' name='filename'/>
<input type='submit' value='���������' />
</form>
</body></html>