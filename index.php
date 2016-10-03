<?php
include_once 'setting.php';

session_start();
$CONNECT = mysqli_connect(HOST,USER,PASS,DB);
if ($CONNECT) ;//echo '<div style="position:absolute;">connection bd OK</div>';
else echo '<div style="position:absolute;">error connection</div>';

echo $page;
if ($_SERVER['REQUEST_URI'] == '/')    $page = 'index';
else {
    $page = substr($_SERVER['REQUEST_URI'], 1);

   if (!preg_match('/^[A-z0-9]{3,15}\/$/', $page))
       exit('error url');
}



//echo '<meta charset="UTF-8"><br><br> page = '. $page;

if (file_exists($page . '.php'))
    include 'index.html';
else if ($_SESSION['ulogin'] != 1 and file_exists('guest/' . $page . '.php'))
    include 'guest/' . $page . '.php';
else if ($_SESSION['ulogin'] == 1 and file_exists('auth/' . $page . '.php'))
    include 'auth/' . $page . '.php';
else if (file_exists('all/' . $page . '.php'))
    include 'all/' . $page . '.php';
  else if (file_exists('form/' . $page . '.php'))
    include 'form/' . $page . '.php';
    else if (file_exists('source/' . $page . '.php'))
    include 'source/' . $page . '.php';
  else if (is_dir($page))
    include 'admin/index.php';
      else if (file_exists('admin/' . $page))
    include 'admin/' . $page;
else
    exit('Страница недоступна ошибка 404');
//echo "<br>1234  Тест тест</br>";


function Title($title){
	echo '<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>'.$title.'</title>
	<link rel="stylesheet" type="text/css" href="../style/style1.css">
</head>
<body>
<div class="wrapper">

<div class="menu">
<a href="/">Главная</a>
<a href="/login">Вход</a>
<a href="/register">Регистрация</a>
</div>


<div class="content">
<div class="block">
';

}

function Bottom(){
	echo '</div>
</div>
</div></body>
</html>';

}







function Head($fl1){
	echo '<!DOCTYPE html><html lang="ru"><head><meta charset="UTF-8"><title>Сайт недвижимости!</title><link rel="stylesheet" type="text/css" href="style/style.css" media="all"><script type="text/javascript">function hideandseek(){ if(document.getElementById("fon").style.display == "none")  	{document.getElementById("fon").style.display = "";}  else document.getElementById("fon").style.display = "none";    if(document.getElementById("form").style.display == "none")  	{document.getElementById("form").style.display = "";}  else document.getElementById("form").style.display = "none";}	</script></head>' ;
}


function Menu ($Logon){
	echo '<div style="border: 0;padding: 0;margin: 0;">
			<div id="mainMenu" class="cool" style="width:100%; min-height: 40px; margin: 0;">
				<div style="float:right;" class="cool">
					<menu class="cool">
						<li style="border: 0;padding: 0;margin: 0;">
							<a href="/registr" style="border: 0;padding: 0;	margin: 0;">
							<div style=""> 
								<div class="menu" onclick="hideandseek();">Регистрация
								</div>
							</div>
						</a>
					</li>
					<li>

						<div class="menu"  onclick="hideandseek();">'.$Logon.'</div>

				</li>
			</menu>
		</div>
	</div>
</div>';
}
?>

<?php
//echo 'hi teste';
?>
</>
</body>
</html>