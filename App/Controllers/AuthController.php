<?php

namespace App\Controllers;

use App\Config\Configuration;
use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\User;

/**
 * Class AuthController
 * Controller for authentication actions
 * @package App\Controllers
 */
class AuthController extends AControllerBase
{

    public function loginpage()
    {
        return $this->html(
            [
                'error' => $this->request()->getValue('error')
            ]
        );
    }

    public function login(): Response
    {
        $login = $this->request()->getValue('username');
        $password = $this->request()->getValue('password');

        $logged = Auth::login($login, $password);

        if ($logged) {
            $this->redirectcontroller('home', 'index', ['success' => 'Logged in successful']);
        } else {
            $this->redirectcontroller('auth', 'loginpage', ['error'=> 'Wrong login name or password']);
        }
    }

    public function registerpage()
    {
        return $this->html(
            [
                'error' => $this->request()->getValue('error')
            ]
        );
    }

    public function register()
    {
        $newUser = new User();

        $email=$this->request()->getValue('email');
        $username= $this->request()->getValue('username');

        if (!User::getAll('email = ?', [$email])) {
            if (!User::getAll('username = ?', [$username])) {

                $newUser->setEmail($this->request()->getValue('email'));
                $newUser->setUsername($this->request()->getValue('username'));
                $newUser->setPassword($this->request()->getValue('password'));

                $newUser->save();
                $this->redirectcontroller('home', 'index', ['success' => 'User was created']);

            } else {
                $this->redirectcontroller('auth', 'registerpage', ['error'=> 'Username is already used by another member']);
            }
        } else {
            $this->redirectcontroller('auth', 'registerpage', ['error'=> 'Email is already used by another member']);
        }
    }

    public function changepasswordpage()
    {
        return $this->html(
            [
                'error' => $this->request()->getValue('error')
            ]
        );
    }

    public function changepassword() {

        $name = $_SESSION["username"];

        $user = User::getAll('username = ?', [$name]);
        //$oldpassword = User::getAll('password = ?', 'user = $name');
        $usernew = $user[0];
        $newpassword = $this->request()->getValue('newpassword');
        $repeatpassword = $this->request()->getValue('repeatpassword');
        //if ($newpassword != $oldpassword )
        if ($newpassword == $repeatpassword)
        {
            $usernew->setPassword($newpassword);
            $usernew->save();

            $this->redirectcontroller('home', 'index', ['success' => 'Your password was changed']);
        } else {
            $this->redirectcontroller('auth', 'changepasswordpage', ['error' => 'Your new passwords doesnt match']);
        }

    }

    public function deleteuserpage()
    {
        return $this->html(
            [
                'error' => $this->request()->getValue('error')
            ]
        );
    }

    public function deleteuser()
    {
        $name = $_SESSION["username"];

        $user = User::getAll('username = ?', [$name]);
        $usernew = $user[0];
        $usernew->delete();

        unset($_SESSION['name']);
        session_destroy();

        $this->redirectcontroller('home', 'index', ['success' => 'User was deleted']);
    }

    public function logout()
    {
        Auth::logout();
        $this->redirectcontroller('home', 'index', ['success' => 'Successful logout']);
    }

    public function index(): Response
    {
        return $this->html();
    }
}