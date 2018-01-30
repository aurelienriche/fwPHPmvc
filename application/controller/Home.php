<?php

class Home extends Controller
{
    public function index()
    {
        $_SESSION['meta_title'] = "Title";
        $_SESSION['meta_desc'] = "Describe the content of your page";
        $_SESSION['meta_color'] = "#fff";

        require APP . 'view/_include/header.php';
        require APP . 'view/_include/init.php';
        require APP . 'view/home/index.php';
        require APP . 'view/_include/footer.php';
    }

}
