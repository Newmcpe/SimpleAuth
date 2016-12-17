<html>
<head>
<title>Добро пожаловать!</title>
</head>
<body>
<?

if($_COOKIE["banned"] == 1){
header("Location: errorauth.php");
} else {


echo "Привет, ".$_COOKIE["username"];

if($_COOKIE["userlevel"] == 1){

echo "<form action='baninit.php' method='GET'>
<h1>Ник:</h1> <input type=text name=name><br>
<input type=submit value='Авторизация'>
</form>";
}

}
?>
</body>
</html>