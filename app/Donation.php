<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $table = 'donations';
    protected $guarded = [];

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

}
