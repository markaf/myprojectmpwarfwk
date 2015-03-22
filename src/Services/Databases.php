<?php
/**
 * Created by PhpStorm.
 * User: Marc
 * Date: 22/03/2015
 * Time: 12:29
 */
namespace Services;

use Mpwarfwk\Component\Bootstrap;
use Mpwarfwk\Component\Database\MysqlProfilerStorage;
class Databases {

    public function __construct(){
        $root = Bootstrap::$documentRoot;
        $configFile = json_decode(file_get_contents($root.'/../config/config.json'), true);
        $configFile = $configFile["parameters"];
        $dsn = 'mysql:host=localhost;dbname='.$configFile['database_name'];
        $this->db = new MysqlProfilerStorage($dsn,$configFile['database_user'], $configFile['database_password']);
    }

    public function getDB(){
        return $this->db;
    }
} 