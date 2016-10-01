<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="style/style.css" media="all">
</head>
<body style="width:100%;margin:0;">
	<section style="flex: 1;	display: flex;	flex-direction: column;	height: 100vh;">
		<div id="mainMenu" class="cool" style="width:100%; height: 43px; position: relative;">
                		<div style="float:right;">
				<a href="/registr" style="display: inline-block;vertical-align: middle;">
				<div style="position: relative;"> <div class="menu">Регистрация</div>
				</div>
				</a>
				<a href="/home" align="center"><div class="menu" text-align: center;>Вход</div></a>
                                </div>
                </div>
		<div id="search"></div>
                <div id="mainContent">
                    Форма регистрации нового пользователя!
                    
                    <form method="POST" action="/all/registr.php">
                        Логин<input type="text" name="login"><br>
                        E-mail<input type="email" name="email"><br>
                        Пароль<input type="password" name="pass"><br>
                        Имя<input type="text" name="name"><br>
                        
                        
                        
                    </form>
                </div>
	</section>
	<footer id="bottom" class="cool" style="display: block; padding: 0 !important;">11 </footer>
</body>
</html>