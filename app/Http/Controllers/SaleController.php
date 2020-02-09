<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sale;
use App\Product;
use App\Category;
use App\InShoppingCart;
use App\ShoppingCart;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(Request $request) //El request es opcional
    {

        $name = $request->get('title');
        $products = Product::orderBy('id_products', 'DESC')->name($name)->paginate(10);

        $n_c = $request->get('n_c');
        $categories = Category::orderBy('id_categories', 'DESC')->NameCategories($n_c)->get();


        // busca el id en la session, en caso de no encontrarlo sera null
        $shopping_cart_id = \Session::get('shopping_cart_id');

        $shopping_cart = ShoppingCart::encuentra_o_crea_session_con_id($shopping_cart_id);
        // para poner algun dato dentro de la session del servidor con el metodo put
        \Session::put("shopping_cart_id", $shopping_cart->id);

        $data_in_shopping_carts = $shopping_cart->data_in_shopping_carts()->get();

        $cantidad = $request->get('cantidad');

        return view('sales.index', ["products" => $products, "categories" => $categories, "data_in_shopping_carts" => $data_in_shopping_carts, "cantidad" => $cantidad]);
    }


   

     
     // Function update
    public function update(Request $request, $id)
    {

        $id_shopping_carts = $request->id_shopping_carts;


        $shopping_carts = InShoppingCart::find($id_shopping_carts);
        $shopping_carts->quantity = $request->quantity;
        $shopping_carts->save();

        return redirect('sales_details');



    }

    // show one product only
    public function show($id)
    {



        $shopping_cart_id = \Session::get('shopping_cart_id');

        $shopping_cart = ShoppingCart::encuentra_o_crea_session_con_id($shopping_cart_id);

            $response = InShoppingCart::create([
                "shopping_cart_id" => $shopping_cart->id,
                "product_id_products" => $id,
                "quantity" => '0'
            ]);    


        // Recupera todos los datos de la tabla in_shopping_carts
         $shopping_cart = InShoppingCart::all()->last();  
        //  guarda la id en una variable
        $id_shopping_carts = $shopping_cart->id;

        $products = Product::findOrFail($id);

        return view("sales.show")->with('product', $products)->with("id_shopping_carts", $id_shopping_carts);
    }
    // 


  
}
