<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public $with = ['cat', 'user'];

    public function cat()
    {
        return $this->belongsTo(Category::class, 'category', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function setStatusAttribute($value)
    {
        if ($this->quantity == 0) {
            $this->attributes['status'] = 'out_of_stock';
        } else {
            $this->attributes['status'] = $value;
        }
    }
}
