<html>
<head>
<title>Авторизирую......</title>

</head>
<body>
<?php 
$link = mysqli_connect('localhost', 'host1539426', 'artemcfki', 'host1539426');
$name = strip_tags($_GET["name"]);
$pword = strip_tags($_GET["pword"]);
$q = mysqli_query($link, "SELECT * FROM users WHERE name = '$name' and pword = '$pword'");
   $row = mysqli_fetch_assoc($q);

if (mysqli_num_rows($q) == 0) {

   header("Location: errorauth.php");
} else {
  $row = mysqli_fetch_assoc($q);

   SetCookie("username","$name");
  header("Location: successauth.php");
  
}
  
?>
</body>
</html>