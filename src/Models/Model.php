<?php
namespace App\Models;

use App\DB;

class Model {
    protected static $table;
    
    public static function all() {
        $db = new DB();
        return $db->all(static::$table, static::class);
    }
    
    public static function find($id) {
        $db = new DB();
        return $db->find(static::$table, static::class, $id);
    }
    
    public static function where($field, $value) {
        $db = new DB();
        return $db->where(static::$table, static::class, $field, $value);
    }
    
    public function save() {
        // Your save logic
    }
    
    // Other model methods...
}