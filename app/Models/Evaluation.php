<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;
    protected $fillable = [
        'user',
        'teacher',
        'aspect',
        'finish',
        'result',
        'feedback'
    ];

    public function teachers(): object
    {
        return $this->hasOne(
            Teacher::class,
            'id',
            'teacher'
        );
    }
}
