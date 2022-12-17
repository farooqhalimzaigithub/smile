<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $table = 'donations';
    protected $guarded = [];
    protected $fillable = ['name','email','amount','payment_type','plan','image','status','user_id'];


    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

}
