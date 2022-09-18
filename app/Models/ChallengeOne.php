<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChallengeOne extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'userName',
        'email',
        'zipCode',
        'password',
    ];
}
