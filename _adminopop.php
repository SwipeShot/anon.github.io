<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<script type="text/javascript" src="//yandex.st/jquery/2.1.1/jquery.min.js"></script>
<title>Админка</title>
</head>
<body id="main">
<div class="wrap">
<a href="/">Домой</a>
<?php
$file = "ban.php";
if(isset($_POST['text']))
{
    file_put_contents($file, $_POST['text']);
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}
$text = htmlspecialchars(file_get_contents($file));
?>  
<form method="post" action="">
<textarea name="text"><?=$text?></textarea>
<input type="submit" value=">">
</form>
<style>
	textarea{
		width: 300px;
		height: 300px;
	}
</style>
</div>
</body>
</html>