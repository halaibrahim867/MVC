<?PHP

namespace core\database;
use PDO;
use PDOException;

class Connection{
    public static function make($config)
    {
        try{
            return new PDO(
                $config['connection'].';dbname'.$config['dbname'],
                $config['username'],
                $config['password'],
                $config['optional']

            );
        }

        catch(PDOException $e){
            die($e->getMessage());
        }
    }
} 
