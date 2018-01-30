<?php

class Str
{

    /**
     * @param $length
     * @return bool|string
     */
    public function random($length)
    {
        $alphabet = "0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
        return substr(str_shuffle(str_repeat($alphabet, $length)), 0, $length);
    }

    /**
     * @param $length
     * @return bool|string
     */
    public function randomNum($length)
    {
        $alphabet = "0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN0123456789";
        return substr(str_shuffle(str_repeat($alphabet, $length)), 0, $length);
    }

    /**
     * @param $str
     */
    public function println($str)
    {
        print($str);
        print("<br />");
    }

    public function vdsession()
    {
        if (isset($_SESSION) AND !empty($_SESSION)) {
            echo "<pre><code>";
            print_r($_SESSION);
            echo "</pre></code>";
        } else {
            echo "<pre><code>";
            print_r('$_SESSION does not exist. Try to set a session var and debug again.');
            echo "</pre></code>";
        }
    }

    public function vdget()
    {
        echo "<pre><code>";
        print_r($_GET);
        echo "</pre></code>";
    }

    public function vdpost()
    {
        echo "<pre><code>";
        print_r($_POST);
        echo "</pre></code>";
    }

    /**
     * @param $str
     */
    public function debugdie($str)
    {
        if (isset($str) AND !empty($str)):
            echo "<pre><code>";
            print("The value of your character string : " . $str);
            echo "</pre></code>";
            die();
        endif;
    }

    /**
     * @param $var
     * @return string
     */
    public function htmlSC($var)
    {
        return htmlspecialchars($var);
    }

    /**
     * @param $password
     * @return bool|string
     */
    public function hashPass($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }


}
