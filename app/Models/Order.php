<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];

    public $timestamp = false;

    function products()
    {
        return $this->belongsToMany(Product::class);

    }
    function user()
    {
        return $this->belongsTo(User::class);
    }
}