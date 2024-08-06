<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;
    protected $table = 'obat';
    protected $primaryKey = 'kode_obat';
    protected $fillable = [
        'kode_obat',
        'nama_obat',
        'jenis_obat',
        'tahun_produksi',
        'masa_berlaku'
    ];

    public function Dokter() {
        return $this->belongsToMany(Dokter::class, 'dokter_obat');
    }

    public function Pasien() {
        return $this->belongsToMany(Pasien::class, 'pasien_dokter');
    }
}
