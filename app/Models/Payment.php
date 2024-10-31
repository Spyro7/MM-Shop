<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $guarded = false;

    protected $table = 'payment';

    public function order(){
        return $this->belongsTo(Order::class);
    }
}
