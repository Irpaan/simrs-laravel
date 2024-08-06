<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Dokter extends Model
{
    use HasFactory;
    protected $table = "dokter";
    protected $primaryKey = "id_dokter";
    protected $fillable = [
        'id_dokter',
        'nama_dokter',
        'spesialis',
        'alamat',
        'no_telp'
    ];

    public function Obat() {
        return $this->belongsToMany(Obat::class, 'dokter_obat');
    }

    public function Perawat() : HasMany {
        return $this->hasMany(Perawat::class);
    }

    public function Pasien() {
        return $this->belongsToMany(Pasien::class, 'pasien_dokter');
    }
}
