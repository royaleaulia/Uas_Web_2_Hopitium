<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testpost extends Model
{
    private static $testpost = [
        "test" => "aku",
        "testing" => "Coba"
    ];
    
    public static function all() {
        return self::$testpost;
    }

    public static function find()
}
