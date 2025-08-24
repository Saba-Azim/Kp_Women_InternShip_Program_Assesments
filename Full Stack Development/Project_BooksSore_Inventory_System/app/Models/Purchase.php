<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
   protected $fillable=[
        'book_id',
        'supplier_id',
        'quantity',
        'price',
        'total',
        'purchase_date',

    ];

    public function book()
    {
        return $this->belongsTo(Books::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Suppliers::class);
    }
}
