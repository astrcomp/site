<?php
include_once 'setting.php';

session_start();
$CONNECT = mysqli_connect(HOST,USER,PASS,DB);
if ($CONNECT) ;//echo '<div style="position:absolute;">connection bd OK</div>';
else echo '<div style="position:absolute;">error connection</div>';

echo $page;
if ($_SERVER['REQUEST_URI'] == '/')    $page = 'index';
else if ($_SERVER['REQUEST_URI'] == '/admin/')  $page = $page.'index.php';
else {
    $page = substr($_SERVER['REQUEST_URI'], 1);
   if (!preg_match('/^[A-z0-9]{3,15}$/', $page))
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
      else if (file_exists($page))
    include  'admin/' .$page;
else
    exit('Страница недоступна ошибка 404');
//echo "<br>1234  Тест тест</br>";

function MessageSend($p1,$p2)
{
	if($p1==1) $p1='Ошибка';
	else if ($p1==2) $p1='Ошибка';
	else if ($p1==3) $p1='Ошибка';

	$_SESSION['message']='<div class="MessageBlock"><b>'.$p1.$p2.'</div>';
	exit (header('Location'.$_SERVER['HTTP_REFERER']));
}

function MessageShow(){

if ($_SESSION['message'])$Message=$_SESSION['message'];
echo $Message;
$_SESSION['message']=array();
}


function FormChars ($p1) {
return nl2br(htmlspecialchars(trim($p1), ENT_QUOTES), false);
}


function GenPass ($p1, $p2) {
return md5('MRSHIFT'.md5('321'.$p1.'123').md5('678'.$p2.'890'));
}

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
	echo '<!DOCTYPE html><html lang="ru"><head><meta charset="UTF-8"><title>Сайт недвижимости!</title><link rel="stylesheet" type="text/css" href="style/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="/style/fontell.css" media="all">
	<script type="text/javascript">function hideandseek(){ if(document.getElementById("fon").style.display == "none")  	{document.getElementById("fon").style.display = "";}  else document.getElementById("fon").style.display = "none";    if(document.getElementById("form").style.display == "none")  	{document.getElementById("form").style.display = "";}  else document.getElementById("form").style.display = "none";}	</script></head>' ;
}



function Menu ($Logon){
	echo '<div style="border: 0;padding: 0;margin: 0;">
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