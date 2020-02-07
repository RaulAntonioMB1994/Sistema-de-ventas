<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $primaryKey = 'id_shops';

    protected $fillable = ['address','city','office_hours','phone','email'];
}
