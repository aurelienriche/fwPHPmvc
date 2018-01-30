<?php

class Session
{

    static $instance;

    /**
     * @return Session
     */
    static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new Session();
        }
        return self::$instance;
    }

    /**
     * Session constructor.
     */
    public function __construct()
    {
        session_start();
    }

    /**
     * @param $key
     * @param $message
     */
    public function setFlash($key, $message)
    {
        $_SESSION['flash'][$key] = $message;
    }

    /**
     * @return bool
     */
    public function hasFlashes()
    {
        return isset($_SESSION['flash']);
    }

    /**
     * @return mixed
     */
    public function getFlashes()
    {
        $flash = $_SESSION['flash'];
        unset($_SESSION['flash']);
        return $flash;
    }

    /**
     * @param $key
     * @param $value
     */
    public function write($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    /**
     * @param $key
     * @return null
     */
    public function read($key)
    {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }

    /**
     * @param $key
     */
    public function delete($key)
    {
        if (isset($_SESSION['flash']) AND !empty($_SESSION['flash'])) {
            unset($_SESSION[$key]);
        }
    }

    public function deleteFlash()
    {
        if (isset($_SESSION['flash']) AND !empty($_SESSION['flash'])) {
            unset($_SESSION['flash']);
        }
    }

    public function displayFlash()
    {
        if (isset($_SESSION['flash']) AND !empty($_SESSION['flash'])) {

            foreach ($_SESSION['flash'] as $k => $val):
                echo '<div class="alert"><p class="'. $k .'-title"></p>';
                echo '<p>' . $val . '</p>';
                echo '</div>';
            endforeach;

        }
    }


}
