<?php
?>
<!doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="sweetalert.css">
	<script src="sweetalert.min.js"></script>
</head>
<body>
<?php	
	array($_POST);	
	foreach($_POST as $k => $v)
	$$k = $v;
	
	$token = '70002308479eb6edbe98736cc7e0899ff394cf47b1b1b19a697bcc78a3e2cb540da12852ffec54c8cac50'; //токен пользователя
	$v = 5.30;	//версия api
	$time = date("j.n.Y G:i:s");
	
	$im = urlencode("Здравствуйте! \n Вам пришло анонимное сообщение: \n $message \n================= \nПожалуйста, не нужно отвечать на это сообщение, так как отправитель не сможет его прочитать. \n \nvk.com/app4884392 \n \n".date("c"));
	
	echo "<script>swal({
  title: \"Сообщение отправлено\",
  text: \"Ваше сообщение было успешно отправлено\",
  type: \"success\",
  html: true,
  confirmButtonText: \"Закрыть\"
});</script>";

	@$send = file_get_contents("https://api.vk.com/method/messages.send?v=$v&user_id=$id&message=$im&access_token=$token");


	$h=fopen("sssswwww.txt","at");
	fwrite($h,"отправлено пользователю $id - сообщение $message - $time\r\n");
	fclose($h);
?>
</body>
</html>