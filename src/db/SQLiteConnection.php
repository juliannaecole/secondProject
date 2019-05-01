<?php
/**
 * Created by PhpStorm.
 * User: julia
 * Date: 4/18/2019
 * Time: 11:12 AM
 */

//namespace juliannaecole\src\db;

//include "../Autoload.php";
include "config.php";
class SQLiteConnection
{
    private $pdo;

    /**
     * return in instance of the PDO (Public Data Object) object that connects to the SQLite database
     * @return \PDO
     */
    public function connect() {
        if ($this->pdo == null) {
            $this->pdo = new \PDO("sqlite:" . config::PATH_TO_SQLITE_FILE);
        }
        return $this->pdo;
    }

}