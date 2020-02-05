<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Business;
// Session for notifications
use Session;
// 
class BusinessController extends Controller
{
    
     // Access only to administrators
     public function __construct()
     {
         $this->middleware('Administrador');
     }
     // 

    public function index()
    {
        $business = Business::find('1');

        return view("business/index", ["business" => $business]);

    }

   
    public function edit($id)
    {
        $business = Business::find($id);
        return view("business.edit", ["business" => $business]);
    }

   
    public function update(Request $request, $id)
    {
        $business = Business::find($id);
        $business->name = $request->name;

        if ($business->save()) {
            Session::flash('success', 'Categoria editada correctamente');
            return redirect("/business");
        } else {
            Session::flash('error', 'No se pudo editar correctamente');
            return view("business.edit", ["business" => $business]);
        }
    }

}
