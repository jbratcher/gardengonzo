<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{

    protected $fillable = ['title', 'time', 'description', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
