<?php
//name space 
namespace app\Helpers;

/**
 * password option class
 */
class PasswordOption
{
    /**
     * hashing password function
     *
     * @param [string] $password
     * @return void = return hash result
     */
    public static function hashPassword(string $password)
    {
        $HashResult = password_hash($password, PASSWORD_DEFAULT);
        return $HashResult;
    }


    /**
     * de hash the password function
     *
     * @param string $InputPassword
     * @param string $HashPassword
     * @return boolean
     */
    public static function dehashPassword(string $InputPassword, string $HashPassword): bool
    {
        return password_verify($InputPassword,  $HashPassword);
    }
}
