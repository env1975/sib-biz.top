<?php
 
$to = 'hurghadardesea@yandex.ru'; // адрес получателя
$subject = 'Письмо с сайта'; // тема письма
$message = "Имя: {$_POST['name']}\r\n"; // добавляем имя в текст
$message .= "E-mail: {$_POST['e-mail']}"; // добавляем 'E-mail' в текст
$headers .= 'Content-type: text/plain; charset=utf-8' . "\r\n"; // установливаем кодировку
$headers .= 'From: gremlin1975@mail.ru' . "\r\n"; // добавляем отправителя
 
if( mail($to, $subject, $message, $headers) ){
 echo '<p style="color: green;">Ваше сообщение отправлено</p>';
}else{
 echo '<p style="color: red;">Ошибка!</p>';
}