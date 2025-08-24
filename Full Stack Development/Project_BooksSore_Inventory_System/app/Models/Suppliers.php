<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    protected $fillable = [
        'name',
         'email',
         'phone',
         'address',
         'status'
    ];

    public function books()
    {
        return $this->hasMany(Books::class);
    }
    public function purchase()
    {
        return $this->hasMany(Suppliers::class);
    }
}
