<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use App\ShoppingCart;
use App\InShoppingCart;
use App\City;
use App\Region;


class SaleDetailController extends Controller
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


    public function index()
    {
        $shopping_cart_id = \Session::get('shopping_cart_id');

        $shopping_cart = ShoppingCart::encuentra_o_crea_session_con_id($shopping_cart_id);

        $products = $shopping_cart->products()->get();

        $total = $shopping_cart->total();

        // $total = $shopping_cart->products()->sum("price");


        $regions = Region::all();
        $cities = City::all();

        return view("sales_details.index", ["total" => $total, "products" => $products, "regions" => $regions, "cities" => $cities ]);




    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name= $request->name;
        $rut = $request->rut;
        $email = $request->email;
        $regions = $request->regions;
        $cities = $request->cities;
        $address = $request->address;
        $quantily = $request->quantily;
        dd('name:'.$name.' rut:'.$rut.' email:'.$email.' regions:'.$regions.' cities:'.$cities.' address:'.$address.' quantily:'.$quantily);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
