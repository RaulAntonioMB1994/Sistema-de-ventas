<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $primaryKey = 'id_products';

    protected $fillable = ['title', 'description', 'stock','price','pages_book','author','editorial','discounts_percent','id_categories'];

//scope

    public function scopeName($query, $name){

        if ($name) {
            return $query->where('title','LIKE','%'.$name.'%');
        }
    }

    
}
