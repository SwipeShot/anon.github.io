
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<script type="text/javascript" src="//yandex.st/jquery/2.1.1/jquery.min.js"></script>
<script src="sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="sweetalert.css">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="height.js"></script>
<script src="http://vk.com/js/api/xd_connection.js?2" type="text/javascript"></script>
<script type="text/javascript" language="javascript">
    function call() {
		$("#loader").show();
      var msg   = $('#form').serialize();
        $.ajax({
          type: 'POST',
	  url: 'http://anon.swipeshot.ru/send.php',
          data: msg,
          success: function(data) {
            $('.results').html(data);
			$("#loader").hide();
          },
          error:  function(xhr, str){
                alert('Возникла ошибка: ' + xhr.responseCode);
				$("#loader").hide();
            }
        });
 
    }
</script>
<title>Анонимное сообщение ВК</title>
</head>
<body>
<div class="wrap">
<form id="form" method="POST" action="javascript:void(null);" onsubmit="call()">
	<input value="" name="id" placeholder="ID. Только цифры" type="text" required/><br/>
	<textarea name="message" placeholder="Что отправляем" required></textarea><br/>
	<input type="submit" value="Отправить"/>
</form>
<div id="loader"><svg class="circle-loader progress" width="40" height="40" version="1.1" xmlns="http://www.w3.org/2000/svg">
	<circle cx="20" cy="20" r="15">
</svg></div>
<div class="results"></div>
</div>
</body>
</html>
