<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $guarded = [];

    public $with = ['product'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'productID', 'id');
    }
}
