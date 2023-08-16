<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaNurulWafa extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nama',
        'nim',
        'tgl_lahir',
        'alamat',
        'id_ukm'
    ];
    protected $table = 'mahasiswa_nurulwafa';

    public function scopeJoinJenisUkmDeskripsi()
    {
        return $this->join('ukm_nurulwafa', 'mahasiswa_nurulwafa.id_ukm', '=', 'ukm_nurulwafa.id')
            ->select(
                'mahasiswa_nurulwafa.id',
                'mahasiswa_nurulwafa.nama',
                'mahasiswa_nurulwafa.nim',
                'mahasiswa_nurulwafa.tgl_lahir',
                'mahasiswa_nurulwafa.alamat',
                'mahasiswa_nurulwafa.id_ukm',
                'mahasiswa_nurulwafa.id_deskripsi',
                'ukm_nurulwafa.ukm'
            );
    }
}
