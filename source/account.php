<?php 
echo '<meta charset="utf8">';
if ($_POST['enter']){
	$_POST['login'] = FormChars($_POST['login']);
	$_POST['email'] = FormChars($_POST['email']);
	$_POST['password'] = GenPass(FormChars($_POST['password']), $_POST['login']);
	$_POST['name'] = FormChars($_POST['name']);
	$_POST['captcha'] = FormChars($_POST['captcha']);

if ($_SESSION['captcha'] != md5($_POST['captcha'])) MessageSend(1, 'Капча введена неверно.');

	if (!$_POST['login'] or !$_POST['email'] or !$_POST['password'] or !$_POST['name']) MessageSend(1,'Ошибка валидации формы.');

	$Row = mysqli_fetch_assoc(mysqli_query($CONNECT, "SELECT `login` FROM `users` WHERE `login` = '$_POST[login]'"));
	if ($Row['login']) exit('Логин <b>'.$_POST['login'].'</b> уже используеться.');
	$Row = mysqli_fetch_assoc(mysqli_query($CONNECT, "SELECT `email` FROM `users` WHERE `email` = '$_POST[email]'"));
	if ($Row['email']) exit('E-Mail <b>'.$_POST['email'].'</b> уже используеться.');

	if (mysqli_query($CONNECT, "INSERT INTO `users`  VALUES ('', '$_POST[login]', '$_POST[email]', '$_POST[password]', '$_POST[name]', 0,NOW())")) echo "STATUS OK";
	else echo 'STATUS FAILD';
	$Code=substr(base64_encode($_POST['email']),0,-1);
	mail($_POST[email],'Регистрация на сайте AllHome','Ссылка для активации: http://localhost/source/activate.php/code/'.substr($Code, -5).substr($Code,0,-5),'From: astrcomp@mail.ru\nContent-type: text/plain; charset=\"utf-8\"');
	
		//echo $Code;

		//echo '<br>'.substr($Code, -5).substr($Code,0,-5);
	//MessageSend(3,"Регистрация аккаунта успешно завершена, на Ваш почтовый адрес ".$_POST['email']."отправлено письмо подтверждения регистрации. ");

//	echo '<meta charset="utf8"><br>Внесение в бд... имя '.$_POST['login'].' почта '.$_POST['email'].' пароль '.$_POST['password'].' логин '.$_POST['name'];		
				
//Head('test');}
}
?>

