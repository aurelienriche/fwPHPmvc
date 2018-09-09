<?php
$v = phpversion();
if ($v < 7.0) {
    echo '<style>html,body{margin: 0; padding: 0;}code{display:block;padding:12px;font-style:italic;color:#3f3f3f;background:#f5f5f5}code:before{content:\'Debug result : \A0\';font-weight:bolder;text-transform:uppercase;display:block;padding-bottom:10px}.error{display:block;padding:12px;font-style:italic;color:#fff;background:#c91d15}</style>';
    echo "<pre><code class='error'>";
    echo 'You must use a newer version of php (version >= 7.0.1)';
    echo "</pre></code>";
    die();
}
?><!DOCTYPE html>
<html lang="<?= $_SESSION['meta_lang'] ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $_SESSION['meta_title'] ?></title>
    <meta name="description" content="<?= $_SESSION['meta_desc'] ?>">
    <meta name="theme-color" content="<?= $_SESSION['meta_color'] ?>">
    <link href="<?= URL ?>css/app.css" rel="stylesheet">
</head>
<body>
