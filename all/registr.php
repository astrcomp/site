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
		<?php
			if ($_POST['enter']){
				echo '<br>Запрос...
				</section>
	<footer id="bottom" class="cool" style="display: block; padding: 0 !important;">11 </footer>
</body>
</html>';
				exit;
			}

		?>
                <div id="mainContent" style="margin-left: 10px;">
                    Форма регистрации нового пользователя!
                    
											<form action="/account" method="POST" style="margin-left: 10px;">
												<br><input type="text" name="login" style="margin: 2px;" required> - Логин:
												<br><input type="email" name="email" style="margin: 2px;" > - E-Mail:
												<br><input type="password" name="password" style="margin: 2px;" required> - Пароль:
												<br><input type="text" name="name" style="margin: 2px;"  > - Имя: 
												<br><input type="text" name="captcha" style="margin: 2px;" placeholder="Captcha"><img src="/style/captcha.php" alt="Каптча">
												<br><br><input type="submit" name="enter" value="Регистрация" required>
												<input type="reset" value="Очистить" required>
											</form>
                </div>
	</section>
	<footer id="bottom" class="cool" style="display: block; padding: 0 !important;"> Подвал сайта </footer>
</body>
</html>