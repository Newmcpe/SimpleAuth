<html>
<head>
<title>Авторизация</title>
<link rel="stylesheet" type="text/css" href="css/indexstyle.css">
    <style type="text/css">
   .auth { 
  

	
		
text-align: center;
    height:200px;

   }
  </style> 
</head>
<body>
<?




?>
<div class="auth">
<form action="authinit.php" method="GET">
<h1>Логин:</h1> <input type=text name=name><br>
<h1>Пароль:</h1><input type=text name=pword><br><br>
<input type=submit value="Авторизация">
</form>
<button onclick="window.location.href='register.php'">Регистрация</button>

</div>

</body>
</html>