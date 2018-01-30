<?php

class Server extends Controller
{
    public function index()
    {
        $_SESSION['meta_title'] = "404";
        $_SESSION['meta_desc'] = "404 Page not found";
        $_SESSION['meta_color'] = "#fff";

        require APP . 'view/_include/header.php';
        require APP . 'view/_include/init.php';
        require APP . 'view/error/index.php';
        require APP . 'view/_include/footer.php';
    }

    public function err404()
    {
        $_SESSION['meta_title'] = "404";
        $_SESSION['meta_desc'] = "404 Page not found";
        $_SESSION['meta_color'] = "#fff";

        require APP . 'view/_include/header.php';
        require APP . 'view/_include/init.php';
        require APP . 'view/error/index.php';
        require APP . 'view/_include/footer.php';
    }
}
