﻿<html>
<head>
<title>Авторизирую......</title>

</head>
<body>
<?php 


$ip=$_SERVER['REMOTE_ADDR'];
echo $ip;
$link = mysqli_connect('localhost', 'host1539426', 'artemcfki', 'host1539426');
$name = strip_tags($_GET["name"]);
$pword = strip_tags($_GET["pword"]);
$regip = $_SERVER["REMOTE_ADDR"];
$q = mysqli_query($link, "INSERT INTO host1539426.users (name, pword,regip) VALUES ('$name', '$pword', '$regip')");
  

  header("Location: successregister.php");
?>
</body>
</html>