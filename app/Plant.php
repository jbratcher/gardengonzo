<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    // for types of plants related to a user and/or garden

    protected $guarded = [];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
