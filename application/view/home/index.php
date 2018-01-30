<a href="#" class="btn btn-primary" title="Link">Next</a>
<a href="#" class="btn btn-primary" title="Link">Next</a>
<?php

//$session->setFlash('warning', 'This is a warning message');
//$session->setFlash('error', 'This is an error message');
//$session->setFlash('success', 'This is a success message');
//$session->setFlash('info', 'This is an info message');

$username = "Username";
$pass = "PassWord!123456";
$mail = "test@gmail.com";
$cmail = "test@gmail.com";
$password = password_hash('PassWord!123456', PASSWORD_DEFAULT);

echo '<br>';

if($verif->notEmpty($username, $mail)){
    echo 'true';
} else {
    echo 'false';
}


$str->vdsession();
$session->displayFlash();

echo '<br>';

//print(URL);
