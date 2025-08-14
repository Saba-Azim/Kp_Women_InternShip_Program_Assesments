<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $fillable=[
        'title',
        'author',
        'isbn',
        'publisher',
        'publication-date',
        'price',
        'quantity',
        'image',
        'description',
        'category-id',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
