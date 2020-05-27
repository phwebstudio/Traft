<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="theme-color" content="#13528a">
    <title>TRAFT - транспортно-логистическая компания</title>
    <link href="img/icon1.png" rel="shortcut icon">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mail.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css">
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
</head>
<body>
<div class="cont">
<?php 

if(isset($_POST['submit'])){
    $to = "tatova2020@mail.ru";
    $sender_name = $_POST['sender_name'];
    $info = $_POST['sender_name'] . "\r\n" . $_POST['phone'] . "\r\n" . $_POST['message'];
    $subject = 'Обращение с сайта TRAFT';
    $headers = 'From: traft' . "\r\n" .
    'Reply-To: "email"' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	
    mail($to,$subject,$info,$headers);
   // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender - Отключено!
    echo "Сообщение отправлено. Спасибо Вам, " . $sender_name . ", мы скоро свяжемся с Вами.";
	echo "<br /><br /><a href='http://tatova.allite.ru'>Вернуться на сайт.</a>";

}

?>
</div>
<!-- 
<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="https://remontiv.ru");}
window.setTimeout("changeurl();",10);
</script> -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>