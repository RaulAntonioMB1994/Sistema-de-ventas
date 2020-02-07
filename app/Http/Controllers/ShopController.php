<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use App\Shop;

class ShopController extends Controller
{
    
     // Access only to administrators
     public function __construct()
     {
         $this->middleware('Administrador');
     }
     // 

    public function index()
    {
        $shops = Shop::All();

        return view('shops.index',["shops" => $shops]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $shop = new Shop;
        return view("shops.create", ["shop" => $shop]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shop = new Shop;
        $shop->address = $request->address;
        $shop->city = $request->city;
        $shop->office_hours = $request->office_hours;
        $shop->phone = $request->phone;
        $shop->email = $request->email;
        $shop->id_business = '1';

        if ($shop->save()) {
            Session::flash('success', 'Tienda agregada correctamente');
            return redirect("shops");
        } else {
            Session::flash('error', 'No se pudo agregar correctamente');
            return view("shops.create");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shop = Shop::find($id);
        return view("shops.edit")->with('shop', $shop);
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
        $shop = Shop::find($id);
        $shop->address = $request->address;
        $shop->city = $request->city;
        $shop->office_hours = $request->office_hours;
        $shop->phone = $request->phone;
        $shop->email = $request->email;
        $shop->id_business = '1';

        if ($shop->save()) {
            Session::flash('success', 'Tienda editada correctamente');
            return redirect("/shops");
        } else {
            Session::flash('error', 'No se pudo editar correctamente');
            return view("shops.edit", ["shop" => $shop]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shop = Shop::find($id);
        $shop->delete();
        Session::flash('success', 'Tienda eliminada correctamente');
        return redirect()->route('shops.index');
    }
}
