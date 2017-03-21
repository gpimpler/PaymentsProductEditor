<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public $timestamps = false;

    public function styles()
    {
        return $this->hasMany(Style::class);
    }

    public static function types()
    {
        return Product::pluck('type')->unique()->all();
    }
}
