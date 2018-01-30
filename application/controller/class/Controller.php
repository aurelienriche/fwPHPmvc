<?php

class Controller
{

    function __construct($message = null, $code = 0)
    {
        $_SESSION['meta_lang'] = "en-US";
        function ErrorHandler($err_no, $err_msg)
        {
            echo "<pre><code class='error'>";
            if (isset($err_no) AND !empty($err_no)):
                echo 'An error occured : ' . 'Number of exception : ' . $err_no . '. Code: ' . $err_msg;
            else:
                echo 'An error occured : ' . $err_msg;
            endif;
            echo "</pre></code>";
            die();
        }

        set_error_handler('ErrorHandler');
    }

}