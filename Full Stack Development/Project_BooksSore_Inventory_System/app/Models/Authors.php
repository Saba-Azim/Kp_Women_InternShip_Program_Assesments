<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Authors extends Model
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
        return $this->belongsToMany(Books::class, 'book_author');
    }
}
