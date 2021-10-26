<?php
//requirement files 
require './Bootstrap.php';

//usages package
use app\Data\Repository\UserRepository;
use app\Helpers\UserData;
use app\Helpers\ManageSession;


//get variables from input
$AllDataFromForm = $_REQUEST;
$email = UserData::requestData("email");
$password = $_REQUEST['password'];


// validate the variable from input
UserData::requirement($AllDataFromForm,"/loginGET.php");


// find user by email 
$user =new UserRepository();


// validate password
$result = $user->findByEmail($email);
$HashPassword = $result['password'];
$isLogin  = UserRepository::loginAccess($password,$HashPassword);

if ($isLogin) {
    ManageSession::loginUserSession($result);
    header("Location: /dashboard.php");
}
