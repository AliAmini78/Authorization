<?php
//namespace
namespace app\Helpers;

//requirement file
require './app/Helpers/sessionStart.php';

//usage package
use app\Helpers\ErrorManage;

/**
 * session manage class 
 */
class ManageSession{

    /**
     * make login session function
     *
     * @return void
     */
    public static function loginUserSession($data){
        $_SESSION['user_name'] = $data['full_name'];
        $_SESSION['user_email'] = $data['email'];
        $_SESSION['is_login'] = true;
    }

    /**
     * valid user session for access
     *
     * @return redirect
     */
    public static function validUserLogin(){
        if (!isset($_SESSION['is_login'])||$_SESSION['is_login'] == false) {
            ErrorManage::message('لطفا اول وارد سایت شوید!!');
            header('Location: /loginGET.php');
        }
    }
    /**
     * clear user session for logout
     *
     * @return redirect
     */
    public static function userLogout(){
        $_SESSION['is_login'] = false;
    }

}
