<?php

namespace App\Models\BobWatts;

use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'description',
        'options',
        'level',
        'permission',
        'category'
    ];

    protected $keyType = 'string';
}
