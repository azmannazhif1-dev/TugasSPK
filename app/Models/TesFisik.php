<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Atlet;

class TesFisik extends Model
{
    protected $table = 'tes_fisik';

    protected $fillable = [
        'atlet_id',
        'tanggal_tes',
        'beep_test',
        'sprint_20m',
        'illinois_agility',
        'vertical_jump',
        'push_up',
        'fatigue_index'
    ];

    public function atlet(): BelongsTo
    {
        return $this->belongsTo(Atlet::class);
    }
}
