<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pasien extends Model
{
    use HasFactory;
    protected $table = 'pasien';
    protected $primaryKey = 'id_pasien';
    protected $fillable = [
        'id_pasien',
        'nama_pasien',
        'jenis_kelamin',
        'alamat',
        'tanggal_lahir',
        'no_telp'
    ];

    public function Obat() {
        return $this->belongsToMany(Obat::class, 'pasien_obat');
    }

    public function Perawat() {
        return $this->belongsToMany(Perawat::class, 'pasien_perawat');
    }

    public function Dokter() {
        return $this->belongsToMany(Dokter::class, 'pasien_dokter');
    }

    public function Rekammedis() {
        return $this->belongsTo(Rekammedis::class);
    }

}
