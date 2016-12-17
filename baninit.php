<html>
<head>
<title>Баню.....</title>

</head>
<body>
<?php 


$ip=$_SERVER['REMOTE_ADDR'];
echo $ip;
$link = mysqli_connect('localhost', 'host1539426', 'artemcfki', 'host1539426');
$name = strip_tags($_GET["name"]);
$q = mysqli_query($link, "UPDATE host1539426.users SET banned = '1' WHERE name = '$name'");
  

  header("Location: successregister.php");
?>
</body>
</html>