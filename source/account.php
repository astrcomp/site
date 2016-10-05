<?php 
echo '<meta charset="utf8">';
if ($_POST['enter']){
	$_POST['login'] = FormChars($_POST['login']);
	$_POST['email'] = FormChars($_POST['email']);
	$_POST['password'] = GenPass(FormChars($_POST['password']), $_POST['login']);
	$_POST['name'] = FormChars($_POST['name']);



	if (!$_POST['login'] or !$_POST['email'] or !$_POST['password'] or !$_POST['name']) MessageSend(1,'Ошибка валидации формы.');

	$Row = mysqli_fetch_assoc(mysqli_query($CONNECT, "SELECT `login` FROM `users` WHERE `login` = '$_POST[login]'"));
	if ($Row['login']) exit('Логин <b>'.$_POST['login'].'</b> уже используеться.');
	$Row = mysqli_fetch_assoc(mysqli_query($CONNECT, "SELECT `email` FROM `users` WHERE `email` = '$_POST[email]'"));
	if ($Row['login']) exit('E-Mail <b>'.$_POST['email'].'</b> уже используеться.');

	if (mysqli_query($CONNECT, "INSERT INTO `users`  VALUES ('', '$_POST[login]', '$_POST[email]', '$_POST[password]', '$_POST[name]', NOW())")) echo "STATUS OK";
	else echo 'STATUS FAILD';

	echo '<meta charset="utf8"><br>Внесение в бд... имя '.$_POST['login'].' почта '.$_POST['email'].' пароль '.$_POST['password'].' логин '.$_POST['name'];
			
				
Head('test');}
?>
<br>
<br>
аккаунт

