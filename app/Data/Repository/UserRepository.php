<?php

namespace App\Data\Repository;

//requirement file
require './app/Helpers/sessionStart.php';

// USAGE PACKAGE
use app\Data\Repository\BaseRepository;
use app\Data\Contracts\UserInterface;
use app\Helpers\PasswordOption;


/**
 * user repository  
 */
class UserRepository extends BaseRepository implements UserInterface
{

    // THE USER TABLE NAME IN DB
    protected $table = 'users';

    // THE SUCCESS REDIRECT ROUT ABOUT USER  
    public $SuccessesRedirectRout =  "/loginGET.php";


    // THE FAILED REDIRECT ROUT ABOUT USER  
    public $FailedRedirectRout =  "/registerGET.php";

    /**
     * get one item with email from db
     *
     * @param string $email
     * @return [user] 
     */
    public  function findByEmail($email)
    {

        try {
            
            $statement = $this->pdo->prepare("SELECT * FROM {$this->table} where email= ? LIMIT 1");
            $statement->execute([$email]);
            return  $statement->fetch($this->pdo::FETCH_ASSOC);
        } catch (\Throwable $th) {
            header("Location: /loginGET.php");
        }
    }
    /**
     * access login function
     *
     * @param [string] $password
     * @param [string] $HashPassword
     * @return redirect
     */
    public static function loginAccess(string $password,string $HashPassword)
    {
        $result = PasswordOption::dehashPassword($password , $HashPassword);
        if (!$result) {
            $_SESSION['email'] = "ایمیل اشتباه میباشد";
            header("Location: /loginGET.php");
            die;
        }
        return $result;
    }
}