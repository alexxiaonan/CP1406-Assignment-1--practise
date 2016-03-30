<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<META http-equiv="refresh" content"0;URL=thankyou.html">
<title>Email Form</title>
</head>

<body>
<?php
$from="alex.xiaonan@gmail.com";
$email="alex.xiaonan@gmail.com";
 $name=addslashes($_POST['name']);
 $tel=addslashes($_POST['tel']);
 $number=addslashes($_POST['number']);
 $message=addslashes($_POST['message']);
 
 
mail ($email, $name,$message,"From:".$from) 

			

 ?>
</body>
</html>