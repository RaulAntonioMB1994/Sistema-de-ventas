<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //la clase para sacar los datos de una persona logeada
use App\Product;
use App\Sale;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        setlocale(LC_TIME, "es_ES");
        $hoy = date("Y-m-d");
        $sales = Sale::all();
        $cant_sales = 0;
        foreach ($sales as $sales) {
            if ($sales->date_sale == $hoy) {
                $cant_sales++;
            }
        }

        $products = Product::all();
        $cant_products = 0;
        foreach ($products as $product) {
            $cant_products++;
        }





        return view("dashboard.index")->with('cant_products', $cant_products)->with('cant_sales', $cant_sales);
    }
}
