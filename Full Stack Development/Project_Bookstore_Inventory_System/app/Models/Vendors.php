<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendors extends Model
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
}
