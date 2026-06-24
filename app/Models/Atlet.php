<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\TesFisik;

class Atlet extends Model
{
    protected $table = 'atlet';

    protected $fillable = [
        'kode_atlet',
        'nama_atlet',
        'jenis_kelamin',
        'umur',
        'cabang_olahraga'
    ];

    public function tesFisik(): HasMany
    {
        return $this->hasMany(TesFisik::class);
    }
}
