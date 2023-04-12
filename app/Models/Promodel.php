<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promodel extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = ['id'];

    public function product()
    {
        return $this -> belongsTo(Product::class,'product_id');
    }

    public function cartitem()
    {
        return $this -> hasOne(Cartitem::class,'model_id');
    }
}
