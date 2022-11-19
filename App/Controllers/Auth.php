<?php

namespace App\Controllers;

use App\Models\User;

class Auth
{
    public $isLogged = false;

    public static function login($username, $password)
    {
        $user = User::getAll('username = ? and password = ?', [$username, $password]);
        if ($user) {
            $_SESSION["username"] = $username;
            return true;
        } else {
            return false;
        }
    }

    public static function logout()
    {
        unset($_SESSION['username']);
        session_destroy();
    }

    public static function isLogged()
    {
        return isset($_SESSION['username']);
    }

    public static function getName()
    {
        return (Auth::isLogged() ? $_SESSION['username'] : "");
    }
}