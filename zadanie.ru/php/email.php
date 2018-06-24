<?php
//$to  = "Odin &lt;a@redstaragency.ru>, " ;
//$to .= "Dwa &lt;rodin@redstaragency.ru>";



$subject = "Тестовое задание_Телешев";

$message = ' 
<html> 
    <head> 
        <title>Письмо по заданию</title> 
    </head> 
    <body> 
        <p>Имя:'.$_POST['name'].'</p> 
        <p>Телефон:'.$_POST['phone'].'</p>
        <p>Email:'.$_POST['email'].'</p>
    </body> 
</html>';

$headers  = "Content-type: text/html; charset=windows-1251 \r\n";

mail($to, $subject, $message, $headers);