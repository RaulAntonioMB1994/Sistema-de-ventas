<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'description', 'stock','price','pages_book','author','editorial','discounts_percent','id_categories'];
}
