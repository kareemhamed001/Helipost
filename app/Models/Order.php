<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded=[];

    function items(){
        return $this->hasMany(OrderItem::class);
    }

    function batch(){
        return $this->belongsTo(Batch::class);
    }

    function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    function receiver(){
        return $this->belongsTo(User::class,'receiver_id');
    }
}
