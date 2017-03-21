<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
    protected $table = 'styles';
    public $timestamps = false;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
