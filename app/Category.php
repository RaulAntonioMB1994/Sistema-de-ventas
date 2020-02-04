<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'id_categories';

    protected $fillable = ['name'];
    


    //scope

    public function scopeNameCategories($query, $n_c){

        if ($n_c) {
            return $query->where('name','LIKE','%'.$n_c.'%');
        }
    }
}
