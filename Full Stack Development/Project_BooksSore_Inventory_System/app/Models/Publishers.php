<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publishers extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'website',
        'status'
    ];

    public function books()
    {
        return $this->hasMany(Books::class);
    }
}
