<html>
<head>
<title>Авторизирую......</title>

</head>
<body>
<?php 
$link = mysqli_connect('localhost', 'host1539426', 'artemcfki', 'host1539426');
$name = strip_tags($_GET["name"]);
$pword = strip_tags($_GET["pword"]);
$q = mysqli_query($link, "INSERT INTO host1539426.users (name, pword) VALUES ('$name', '$pword')");
  

  header("Location: successregister.php");
?>
</body>
</html>