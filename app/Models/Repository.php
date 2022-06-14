<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Repository extends Model
{
    protected $fillable = [
        'github_id',
        'name',
        'url',
        'description',
        'language'
    ];

    protected $keyType = 'string';
}
