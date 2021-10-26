<?php

require './Bootstrap.php';
// useable package  
use app\Data\Repository\UserRepository;
use app\Helpers\UserData;
use app\Helpers\PasswordOption;



// Get Values from inputs 
$DataFromForm = $_REQUEST;
$password = $DataFromForm['password'];


//hash the password
$DataFromForm['password'] = PasswordOption::hashPassword($password);


//make new  obj  
$user = new UserRepository();


//CREATE USER 
$result = $user->create($DataFromForm);


// THE RESULT 
if ($result) {
    header("Location:/loginGET.php");
    return;
}
