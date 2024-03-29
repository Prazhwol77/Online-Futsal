<?php

namespace App\Models;

use Laratrust\Models\LaratrustRole;

class Role extends LaratrustRole
{
    public $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'foreign_key');
    }
}

