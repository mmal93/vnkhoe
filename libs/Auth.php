<?php
/**
 * 
 */
class Auth
{
    public static function handleLogin()
    {
        @session_start();
        $logged = $_SESSION['loggedIn'];
        if ($logged == false) {
            session_destroy();
            header('location: '.BASE_URL.'account/admin.html?repos='.BASE_URL.'dashboard.html');
            exit;
        }
    }
    
}