<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Level extends Model
{
    use HasFactory;

    protected $table = 'Level';

    // public static function index($id)
    // {
    //     return DB::table('user')
    //     ->where('id', $id)
    //         ->select('id', 'nama', 'email')
    //         ->first();
    // }

}
