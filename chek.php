<?php
    $name = $_POST['name'];
    $text = $_POST['text'];
        
    // Подключение к базе данных
    $mysql = new mysqli('localhost', 'root', 'root', 'wel');
	// Если есть ошибка соединения, выводим её и убиваем подключение
	if ($mysqli->connect_error) 
	{
	 die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
    $mysql->query("INSERT INTO 'wes' ('name', 'text') 
	VALUES ('$name', '$text')");
    
    $mysql->close();
?>