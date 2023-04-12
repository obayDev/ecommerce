<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = ['id','date'];

    public function cart()
    {
        return $this -> belongsTo(Cart::class,'cart_id');
    }
}
