<?php
// namespace

namespace app\Data\Contracts;

// usage package
use app\Data\Contracts\BaseInterface;
 
interface UserInterface   {
    public  function findByEmail( $email);
    public static function loginAccess(string $password, string $HashPassword);
}