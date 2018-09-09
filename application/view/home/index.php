<?php

//$session->setFlash('warning', 'This is a warning message');
//$session->setFlash('error', 'This is an error message');
//$session->setFlash('success', 'This is a success message');
$session->setFlash('info', 'This is an info message');

$username = "Username";
$pass = "PassWord!123456";
$mail = "test@gmail.com";
$cmail = "test@gmail.com";
$password = password_hash('PassWord!123456', PASSWORD_DEFAULT);

echo '<br>';

$req = $db->query('SELECT * FROM sk_users u INNER JOIN sk_settings_users s ON s.id_user = u.id ORDER BY u.id DESC LIMIT 0, 5');

foreach ($req as $item) {
    echo $item->name . ' ' . $item->card . '<b>' . $item->card_cvv . '</b><br>';
}

$str->vdsession();
$session->htmlFlash();

//$cookie->setCookie('name', 'contenu', 30, '/');
//$cookie->deleteCookie('name');
$tab = [1, 2, 3, 4, 5, 6, 7, 8, 9];

heading('1', 'Salut ceci est un titre');
alert('success', 'Ceci est un message de succès');
selectCountry();

listing(23);


