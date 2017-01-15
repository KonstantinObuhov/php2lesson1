<?php

namespace App\Models;

use App\Model;
use App\Db;

class Author
    extends Model
{

    public static $table = 'authors';

    public $firstname;
    public $lastname;

    public static function getLatest() {
        $db = new Db();
        $sql = 'SELECT * FROM ' . self::$table . ' LIMIT 3';
        return $db->query($sql, [], self::class);
    }

}