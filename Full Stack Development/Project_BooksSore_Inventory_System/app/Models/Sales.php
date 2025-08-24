<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $fillable=[
        'book_id',
        'customer_name',
        'email',
        'phone',
        'address',
        'quantity',
        'price',
        'total_price',
        'sale_date',

    ];

    public function book()
    {
        return $this->belongsTo(Books::class);
    }
}
