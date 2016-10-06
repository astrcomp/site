<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="style/style.css" media="all">
</head>
<body style="width:100%;margin:0;">
	<section style="flex: 1;	display: flex;	flex-direction: column;	height: 100vh;">
		<div style="border: 0;padding: 0;margin: 0;">
			<a href="/">
			<div id="mainMenu" class="cool" style="width:100%; min-height: 45px; margin: 0;">
				<div style="float:left;" class="menu"> <svg xmlns="http://www.w3.org/2000/svg" width="120px" height="42px" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="4.009355068206787 6.868319034576416 152.27584838867188 43.33542251586914" preserveAspectRatio="xMidYMid meet" ><defs id="svgEditorDefs"><polygon id="svgEditorShapeDefs" fill="khaki" stroke="black" style="vector-effect: non-scaling-stroke; stroke-width: 1px;"/></defs><rect id="svgEditorBackground" x="0" y="0" width="1360" height="630" style="fill: none; stroke: none;"/><text fill="black" style="font-family: Arial; font-size: 20px;" x="50" y="43.5" id="e1_texte">ALLHOME</text><path d="M-693.267,-420.298 h108.445 c5.39999,0 9.77802,-4.378 9.77802,-9.778 v-84.445 c0,-5.4 -4.37799,-9.778 -9.77798,-9.778 h-46.222 v-14.222 c0,-5.4 -4.37799,-9.778 -9.77802,-9.778 h-52.444 c-5.39999,0 -9.778,4.378 -9.778,9.778 v108.445 c0,5.4 4.37801,9.778 9.778,9.778 z M-599.045,-508.298 h8 v16 h-8 v-16 z M-599.045,-484.298 h8 v16 h-8 v-16 z M-615.045,-508.298 h8 v16 h-8 v-16 z M-615.045,-484.298 h8 v16 h-8 v-16 z M-631.045,-508.298 h8 v16 h-8 v-16 z M-631.045,-484.298 h8 v16 h-8 v-16 z M-655.045,-532.298 h8 v16 h-8 v-16 z M-655.045,-508.298 h8 v16 h-8 v-16 z M-655.045,-484.298 h8 v16 h-8 v-16 z M-671.045,-532.298 h7.99998 v16 h-8 v-16 z M-671.045,-508.298 h7.99998 v16 h-8 v-16 z M-671.045,-484.298 h7.99998 v16 h-8 v-16 z M-687.045,-532.298 h8 v16 h-8 v-16 z M-687.045,-508.298 h8 v16 h-8 v-16 z M-687.045,-484.298 h8 v16 h-8 v-16 z" style="vector-effect: non-scaling-stroke; stroke-width: 1px;" stroke="black" id="e30_shape" transform="matrix(0.261719, 0, 0, 0.261719, 194.5, 155.5)" fill="black"/></svg></div></a>


				<div style="float:right;" class="cool">
					<menu class="cool">
						<li style="border: 0;padding: 0;margin: 0;">
							<a href="/registr" style="border: 0;padding: 0;	margin: 0;">
							<div style=""> 
								<div class="menu" onclick="">Регистрация
								</div>
							</div>
						</a>
					</li>
					<li>

						<div class="menu"  onclick="hideandseek();">Вход</div>

				</li>
			</menu>
		</div>
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