<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $fillable = [
        'category-id',
        'title',
        'author_id',
        'isbn',
        'publisher_id',
        'supplier_id',
        'publication-date',
        'price',
        'quantity',
        'image',
        'description',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(Authors::class);
    }

    public function publisher()
    {
        return $this->belongsTo(Publishers::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Suppliers::class);
    }
    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }

    // One book can appear in many sales
    public function sales()
    {
        return $this->hasMany(Sales::class);
    }

}
