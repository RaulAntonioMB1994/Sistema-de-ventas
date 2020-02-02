<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale_detail extends Model
{
    protected $primaryKey = 'id_sales_details';

    protected $fillable = ['price', 'quantity', 'discounts','id_products','id_sales'];

}
