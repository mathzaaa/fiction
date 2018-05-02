<?php
session_start();
header('content-type: text/html; charset=utf-8');

// checking lang value
if(isset($_COOKIE['sy_lang'])) {
    $load_lang_code = $_COOKIE['sy_lang'];
} else {
    $load_lang_code = "en";
}

// including lang files
switch ($load_lang_code) {
    case "en":
        require(__DIR__ . '/lang/en.php');
        break;
    case "pl":
        require(__DIR__ . '/lang/pl.php');
        break;
}

require(__DIR__ . "/pluginconfig.php");

/*$tmpusername = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$tmppassword = md5(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));*/

//$sql = "select * from tk_member_ticket where username = '$_POST[username]' and password = '$_POST[password]'";
$username = md5(filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING));
$password = md5(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));
echo $username;
if($username == "21232f297a57a5a743894a0e4a801fc3" && $password == "6ec12d0cebe9dee3052d59e5a379dc21"){
	$_SESSION['username'] = $username;
    header("Location: imgbrowser.php");
}

/*if($tmpusername == $username and $password == $tmppassword) {
    $_SESSION['username'] = $tmpusername;
    header("Location: imgbrowser.php");
} */
else {
	/* $_SESSION['username'] = $tmpusername;
    header("Location: imgbrowser.php");*/
    echo '
        <script>
        alert("'.$loginerrors1.'");
        history.back();
        </script>
    ';
}

