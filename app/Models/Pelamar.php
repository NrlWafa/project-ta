<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pelamar extends Model
{
    use HasFactory;

    protected $table = 'Pelamar';
    protected $guarded = [];

    // Ketika Database yg ada pada pelamar dihapus, maka data yang ada pada tabel perhitungan juga ikut terhapus. 
    // untuk menghubungkan antar tabel
    public function admin()
    {
        return $this->hasOne(Admin::class, 'id_pelamar');
    }

    public function cleaningservice()
    {
        return $this->hasOne(CleaningService::class, 'id_pelamar');
    }

    public function driver()
    {
        return $this->hasOne(Driver::class, 'id_pelamar');
    }

    public function helper()
    {
        return $this->hasOne(Helper::class, 'id_pelamar');
    }

    public function operator()
    {
        return $this->hasOne(Operator::class, 'id_pelamar');
    }

    public function satpam()
    {
        return $this->hasOne(Satpam::class, 'id_pelamar');
    }

    public function teknisi()
    {
        return $this->hasOne(Teknisi::class, 'id_pelamar');
    }
}
