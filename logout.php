<?php

//requirement files
require "./Bootstrap.php";


//usage package
use app\Helpers\ManageSession;
use app\Helpers\ErrorManage;

// log out the user 
ManageSession::userLogout();

// make logout message
ErrorManage::message('با موفقیت خارج شدید!!');

header('Location: /');