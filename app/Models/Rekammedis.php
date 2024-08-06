<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Rekammedis extends Model
{
    use HasFactory;
    protected $table = 'rekammedis';
    protected $primaryKey = 'id_rekammedis';
    protected $fillable = [
        'id_rekammedis',
        'keluhan',
        'pemeriksaan',
        'pengobatan'
    ];

    public function Pasien(): HasMany
    {
        return $this->hasMany(Pasien::class, 'foreign_key', 'local_key');
    }
}
