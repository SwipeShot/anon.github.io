<?php
	//Настя Крутикова - 22755581
	//Арс Хуесос - 261742180
	$viewerId = (int) $_REQUEST["viewer_id"];
		$banned = [261742180,159500217];
		if (in_array($viewerId, $banned)) {
		exit('<!doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="sweetalert.css">
	<link rel="stylesheet" type="text/css" href="ban.css">
	<script src="sweetalert.min.js"></script>
</head>
<body>
	<script>swal({
  title: "К сожалению, вы были заблокированы в приложении",
  text: "Если у вас есть вопросы, пишите <a href=\'//vk.com/swipeshot\'>сюда</a>",
  type: "error",
  html: true,
  confirmButtonText: "Закрыть"
});</script>
</body>
</html>');
	};
?>