<?php

$directory = APP . 'helpers/';
if (is_dir($directory)) {
    $rep = opendir($directory);
    while ($file = readdir($rep)) {
        if (is_file($directory . '/' . $file) && $file != '/' && $file != '.' && $file != '..' && strtolower(substr($file, -4)) == ".php") {
            require $directory . '/' . $file    ;
        }
    }
    closedir($rep);
}

$db = App::getDatabase();
$session = Session::getInstance();

$helper = new Helper();
$arr = new Arr();
$str = new Str();
$lorem = new Lorem();
$redirect = new Redirect();
$verif = new Verification();
$RMail = new RefractorMail();
$num = new Numbers();
$qBuild = new QueryBuild();
$cookie = new Cookie();
$captcha = new Captcha('zertzetr', 'ergsdgf');
