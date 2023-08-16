<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UkmNurulWafa extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'ukm',
        'deskripsi'
    ];

    protected $table = 'ukm_nurulwafa';
}
