<?php namespace app\Helpers;

//requirement file
require './app/Helpers/sessionStart.php';

/**
 * class for manage errors 
 */
class ErrorManage {

    /**
     * input requirement error function
     *
     * @param [type] $InputName
     * @return string = error
     */
    public static function requireErrorMessages($InputName)
    {
       
        $Error = null;
        if (isset($_SESSION[$InputName])) {
            $Error = $_SESSION[$InputName];
            unset($_SESSION[$InputName]);
        }
        return $Error;
    }

    public static function message( $message){
        $_SESSION['Message']= $message;
    }
}