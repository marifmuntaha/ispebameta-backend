<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'user',
        'name',
        'nip',
        'subject',
        'phone'
    ];

    public function users(): object
    {
        return $this->hasOne(
            User::class,
            'id',
            'user'
        );
    }

    public function subjects(): object
    {
        return $this->hasOne(
            Subject::class,
            'id',
            'subject'
        );
    }
}
