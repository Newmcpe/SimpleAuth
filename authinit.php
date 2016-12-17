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

   while ($row = mysqli_fetch_assoc($q)) {
       $banned = $row["banned"];
	   $userlevel = $row["userlevel"];
    }

if (mysqli_num_rows($q) == 0) {
if($banned == 1){
header("Location: errorauth.php");
}
   header("Location: errorauth.php");
} else {
  

   SetCookie("username","$name");
   SetCookie("banned",$banned);
   SetCookie("userlevel","$userlevel");
  header("Location: successauth.php");
  
}
  
?>
</body>
</html>