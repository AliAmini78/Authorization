<?php
// CLASS NAMESPACE
namespace App\Data\Repository;


//USAGE PACKAGE
use app\Data\Contracts\BaseInterface;
use app\Models\db\ApplicationDb;
use app\Helpers\UserData;

/**
 * main repository for  CRUD 
 */
class BaseRepository extends ApplicationDb  implements BaseInterface
{

    // create item for db
    public function Create(array $data)
    {
        // require the value 
        UserData::requirement($data, $this->FailedRedirectRout);
        // prepare input data for insert to db 
        $PrepareData = UserData::makeDataForDb($data);

        // try to insert data in db
        try {
            $statement = $this->pdo->prepare("insert into {$this->table} ({$PrepareData['fields']}) values ({$PrepareData['params']})");
            return $statement->execute($data);
        } catch (\Throwable $th) {
            header("Location: {$this->FailedRedirectRout}");
        }
    }

    // edit item for db
    public function Edit()
    {
        return "";
    }

    // delete item for db
    public function Delete()
    {
        return "";
    }

    // get one item for db
    public function GetItem()
    {
        return '';
    }

    // get all item for db
    public function GetAllItems()
    {
        return '';
    }
}
