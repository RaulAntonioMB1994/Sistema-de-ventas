<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{

    // protected $primaryKey = 'id';

    protected $fillable = ['status'];

    // Un producto esta en muchos carros
    public function inShoppingCarts(){
        return $this->hasMany('App\ShoppingCart');
    }

    public function products(){
        // (modelo,nombre_de_tabla)
        return $this->belongsToMany('App\Product', 'in_shopping_carts');
    }

    public function productsSize(){
        return $this->products()->count();
    }

    public function total(){
        return $this->products()->sum("price");
    }
    
    public function data_in_shopping_carts(){
        return $this->hasMany('App\inShoppingCart');
    }

    //Esta funcion determina si el carro de compra se desea crear o ya existe
    public static function encuentra_o_crea_session_con_id($shopping_cart_id){
        if($shopping_cart_id){ //En caso de que exista
            //buscar el carrido de compras con el id
            return ShoppingCart::buscar_en_session_con_id($shopping_cart_id);//retorna utilizando la funcion mencionada en la linea 39.
        }else{ //En caso de que no exista
            //Crea un carrito de compra
            return ShoppingCart::crear_carrito_si_no_hay_session_con_id();
        }
    }

    // funcion que retorna una id en session
    public static function buscar_en_session_con_id($shopping_cart_id){
        return ShoppingCart::find($shopping_cart_id);
    }

    public static function crear_carrito_si_no_hay_session_con_id(){
  


        $shopping_cart = new ShoppingCart;
        $shopping_cart->status = "incompleted";
        $shopping_cart->save();
        return $shopping_cart;
    }
}
