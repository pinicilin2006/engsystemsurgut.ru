<?php
foreach($_POST as $key => $val){
	if(empty($val)){
		continue;
	}
	$$key = filter_var($val, FILTER_SANITIZE_STRING);
	//echo $key."<br>";
}
if(!$name || !$name2 || !$name3 ){
	echo 'Все поля должны быть заполнены';
	exit();
}
$to      = 'mun.r@inbox.ru';
$subject = 'Сообщение с сайта';
$message = 'Сообщение с сайта с сайта: Имя:'.$name.'. Фамилия'.$name2.'. Отчество:'.$name3;
$headers = 'From: site@engsystemsurgut.ru' . "\r\n" .
    'Reply-To: site@engsystemsurgut.ru' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers)){
	echo 'Ваше сообщение успешно отправлено. С вами свяжутся в ближайшее время. Спасибо.';
}
?>
