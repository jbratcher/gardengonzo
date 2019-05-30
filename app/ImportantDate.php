<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImportantDate extends Model
{
    protected $fillable = ['name', 'description', 'time', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
