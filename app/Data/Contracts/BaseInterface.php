<?php  namespace App\Data\Contracts;


interface BaseInterface{
    public function Create(array $data);
    public function Edit();
    public function Delete();
    public function GetItem();
    public function GetAllItems();

}