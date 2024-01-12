<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instrument extends Model
{
    use HasFactory;
    protected $fillable = [
        'aspect',
        'name',
        'desc',
    ];

    public function aspects(): object
    {
        return $this->hasOne(
            Aspect::class,
            'id',
            'aspect'
        );
    }

    public function indicators(): object
    {
        return $this->hasMany(
            Indicator::class,
            'instrument',
            'id'
        );
    }
}
