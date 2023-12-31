<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='categories';
    protected $fillable=[
        'name',
        'id',
    ];
    public function products()
    {
        return $this->hasMany(Products::class, 'category'); 
    }
}

