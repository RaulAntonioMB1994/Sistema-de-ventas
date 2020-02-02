<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $primaryKey = 'id_sales';

    protected $fillable = ['date_sales', 'total_sale', 'rut'];

}
