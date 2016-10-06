<?php

$URL_Path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$URL_Parts = explode('/', trim($URL_Path, ' /'));
$Page = array_shift($URL_Parts); 
$Module = array_shift($URL_Parts);


if (!empty($Module)) {
$Param = array(); 
for ($i = 0; $i < count($URL_Parts); $i++) {
$Param[$URL_Parts[$i]] = $URL_Parts[++$i];
}
}


echo " ";


if (!$_SESSION['USER_ACTIVE_EMAIL'])
	{ 

		$Email= base64_decode(substr($Param['code'],5).substr($Param['code'],0,5));
		if(strpos($Email,'@') !==false){
			mysqli_query($CONNECT,"UPDATE 'users' SET 'active' = 1 WHERE 'email' = '$Email'");
			$_SESSION['USER_ACTIVE_EMAIL']=$Email;
					}
			else MessageSend(1,"unknown email.");


	}
 ?>	
