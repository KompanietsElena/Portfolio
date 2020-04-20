<?php
  function can_upload($file){
	// Проверка выбран ли файл
    if($file['name'] == '')
		return 'Вы не выбрали файл';
	
	//Проверка на размер файла
	if($file['size'] == 0)
		return 'Файл слишком большой';
	
	// Проверка расширения файла
	$getMime = explode('.', $file['name']);
	$mime = strtolower(end($getMime));
	$types = array('jpg', 'png', 'gif', 'bmp', 'jpeg');
	if(!in_array($mime, $types))
		return 'Недопустимый тип файла';
	return true;
  }
  
  function make_upload($file){	
	// Формирование уникального имени для загруженной картинки
	$name = mt_rand(0, 10000) . $file['name'];
	copy($file['tmp_name'], '../img/' . $name);
  }