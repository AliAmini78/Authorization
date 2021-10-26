<?php

namespace app\Helpers;

//requirement file
require './app/Helpers/sessionStart.php';

/**
 * class for prepare user data for insert to db
 */
class UserData
{
    /**
     * prepare input data for db
     *
     * @param array $data = user data array
     * @return array 
     */
    public static function makeDataForDb(array $data)
    {
        $DataArray = [];
        $fields = join(",", array_keys($data));
        $DataArray['fields'] = $fields;
        $params = join(",", array_map(fn ($item) => ":$item", array_keys($data)));
        $DataArray['params'] = $params;
        return $DataArray;
    }

    /**
     * Get input Value function
     *
     * @param [string] $filed = input name
     * @return void
     */
    public static function requestData($filed)
    {
        return isset($_REQUEST[$filed]) && trim($_REQUEST[$filed]) != "" ? trim($_REQUEST[$filed]) : null;
    }


    /**
     * validate the require item from input of add the contact function
     *
     * @param string $value = the input value 
     * @param [string] $InputName = the input name
     * @param [string] $ErrorMsg = the error message text
     * @return redirect 
     */
    public static function requirement($data, $FailRout)
    {
        $isEmpty=false;

        // make session foe each value
        foreach ($data as $key => $value) {
            if ($value == null) {
                $_SESSION[$key] = "لطفا   فیلد  را پر کنید";
                $isEmpty=true;
            }
        }

        // if error exist
        if($isEmpty){
            header("Location: {$FailRout}");
            die;
        }
    }
}
