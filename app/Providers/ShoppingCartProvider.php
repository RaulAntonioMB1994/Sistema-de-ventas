<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ShoppingCart;



class ShoppingCartProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    } 

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer("*", function($view){
        // busca el id en la session, en caso de no encontrarlo sera null
            $shopping_cart_id = \Session::get('shopping_cart_id');

            $shopping_cart = ShoppingCart::encuentra_o_crea_session_con_id($shopping_cart_id);
        // para poner algun dato dentro de la session del servidor con el metodo put
            \Session::put("shopping_cart_id", $shopping_cart->id);

            // Envia una variable a la vista llamada shopping_cart con los datos recuperados desde $shopping_cart
            $view->with("shopping_cart", $shopping_cart);
        });
    }
}
