<?php
/**
 * Created by PhpStorm.
 * User: caesaralves
 * Date: 25-08-2017
 * Time: 18:54
 */
require_once "Conexao.php";
class Session
{

    const LOGGED = 'logged';

    /**
     * @return bool
     */
    public static function isSessionSet() {
        self::start();
        if(isset($_GET["logout"]) && $_GET["logout"] == true && isset($_SESSION[self::LOGGED])){
            self::logout();
        }else{
            return isset($_SESSION[self::LOGGED]) && $_SESSION[self::LOGGED] == true;
        }
    }

    public static function logout() {
        unset($_SESSION[self::LOGGED]);
    }


    public static function start() {
        session_start();
    }

    public static function checkUser() {
        if(isset($_POST["user"]) && isset($_POST["pass"])) {
            if(Conexao::validateUser($_POST["user"],$_POST["pass"])) {
                self::start();
                $_SESSION[self::LOGGED] = true;
            }
        }
    }

}