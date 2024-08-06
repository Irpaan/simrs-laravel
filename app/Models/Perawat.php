<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Perawat extends Model
{
    use HasFactory;
    protected $table = 'perawat';
    protected $primaryKey = 'id_perawat';
    protected $fillable = [
        'id_perawat',
        'nama_perawat',
        'jenis_kelamin',
        'no_telp',
    ];

    public function Pasien() {
        return $this->belongsToMany(Pasien::class, 'pasien_perawat');
    }

    public function Dokter() : BelongsTo {
        return $this->belongsTo(Dokter::class);
    }
}
