<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InShoppingCart extends Model
{

    protected $primaryKey = 'id';

    protected $fillable = ["product_id_products", "shopping_cart_id", "quantity"];

   
}
