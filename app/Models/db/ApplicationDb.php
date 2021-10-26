<?php namespace app\Models\db;

use pdo;
/**
 * Application database class
 */
class ApplicationDb
{
    // database type name 
    private $DbType = 'mysql';
    // database name
    private $DbName = "authorizationDb";
    // database host
    private $host = 'localhost';
    // database user name 
    private $UserName = 'root';
    // database pass word
    private $Password = '';



    public function __construct()
    {
        // connect to db
        $this->pdo = new PDO("{$this->DbType}:host={$this->host};dbname={$this->DbName}", $this->UserName, $this->Password);
    }
}
