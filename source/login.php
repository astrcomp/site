<?php 
ULogin(0);

$_POST['login'] = FormChars($_POST['login']);
$_POST['password'] = GenPass(FormChars($_POST['password']), $_POST['login']);

if (!$_POST['login'] or !$_POST['password'] ) MessageSend(1, 'Невозможно обработать форму.');
$Row = mysqli_fetch_assoc(mysqli_query($CONNECT, "SELECT `pass`, `active` FROM `users` WHERE `login` = '$_POST[login]'"));
if ($Row['password'] != $_POST['pass']) {echo MessageSend(1, 'Не верный логин или пароль.');}
if ($Row['active'] == 0) MessageSend(1, 'Аккаунт пользователя <b>'.$_POST['login'].'</b> не подтвержден.');
$Row = mysqli_fetch_assoc(mysqli_query($CONNECT, "SELECT `id`, `name`, `date`, `email`  FROM `users` WHERE `login` = '$_POST[login]'"));
$_SESSION['USER_ID'] = $Row['id'];
$_SESSION['USER_NAME'] = $Row['name'];
$_SESSION['USER_REGDATE'] = $Row['regdate'];
$_SESSION['USER_EMAIL'] = $Row['email'];
$_SESSION['USER_LOGIN_IN'] = 1;
exit(header('Location: /'));

 ?>