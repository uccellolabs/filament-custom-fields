<?php

namespace Uccello\FilamentCustomFields\Models;

use Illuminate\Database\Eloquent\Model;

class CustomField extends Model
{
    protected $fillable = [
        'resource',
        'name',
        'type',
        'data'
    ];

    protected $casts = [
        'data' => 'array',
    ];
}
