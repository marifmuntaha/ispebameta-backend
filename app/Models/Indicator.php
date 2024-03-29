<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indicator extends Model
{
    use HasFactory;
    protected $fillable = [
        'instrument',
        'code',
        'value',
        'desc',
        'reference'
    ];

    public function instruments(): object
    {
        return $this->hasOne(
            Instrument::class,
            'id',
            'instrument'
        );
    }
}
