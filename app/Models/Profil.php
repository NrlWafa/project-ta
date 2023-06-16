<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class profil extends Model
{
    // use HasFactory;

    public static function detail_profil($id){
        return DB::table('user')
            ->where('id', $id)
            ->select('id', 'nama', 'email')
            ->first();
    }
    
}
