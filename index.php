<?php
include_once 'setting.php';

session_start();
$CONNECT = mysqli_connect(HOST,USER,PASS,DB);
if ($CONNECT) echo 'connection bd OK';
else echo 'error connection';

echo $page;
if ($_SERVER['REQUEST_URI'] == '/')    $page = 'index';
else {
    $page = substr($_SERVER['REQUEST_URI'], 1);

    if (!preg_match('/^[A-z0-9]{3,15}$/', $page))
        exit('error url');
}




if (file_exists($page . '.php'))
    include 'index.html';
else if ($_SESSION['ulogin'] != 1 and file_exists('guest/' . $page . '.php'))
    include 'guest/' . $page . '.php';
else if ($_SESSION['ulogin'] == 1 and file_exists('auth/' . $page . '.php'))
    include 'auth/' . $page . '.php';
else if (file_exists('all/' . $page . '.php'))
    include 'auth/' . $page . '.php';
else
    exit('Страница недоступна ошибка 404');
echo "<br>1234  Тест тест</br>";
echo $page;
?>

<?php
echo 'hi teste';
?>
test
</>
</body>
</html>