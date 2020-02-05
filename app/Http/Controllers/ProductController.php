<?php

namespace App\Http\Controllers;

// Session for notifications
use Session;
// 

use Illuminate\Http\Request;

// DomPDF for export pdf
use Barryvdh\DomPDF\Facade as PDF;
// 

// Model Product and Category
use App\Product;
use App\Category;
// 

class ProductController extends Controller
{

    // Access only to administrators
    public function __construct()
    {
        $this->middleware('Administrador');
    }
    // 


    // Show all category data
    public function index(Request $request)
    {
        // name for query in database. Search
        $name = $request->get('title');
        $products = Product::orderBy('id_products', 'DESC')->name($name)->paginate(2);
        // 
        // n_c for query in database. Search
        $n_c = $request->get('n_c');
        $categories = Category::orderBy('id_categories', 'DESC')->NameCategories($n_c)->get();
        // 
        return view('products.index', ["products" => $products, "categories" => $categories]);
    }
    //



    // Function exportPDF 
    public function exportPdf()
    {
        $products = Product::get();
        $pdf = PDF::loadView('products.pdf', compact('products'));
        return $pdf->download('products-list.pdf');
    }
    //



    // function create
    public function create()
    {
        $categories = Category::all();
        $products = new Product;
        return view("products.create", ["products" => $products, "categories" => $categories]);
    }
    // 



    //function store 
    public function store(Request $request)
    {
        $hasFile = $request->hasFile('file') && $request->file->isValid();
        $products = new Product;
        $products->title = $request->title;
        $products->description = $request->description;
        $products->stock = $request->stock;
        $products->price = $request->price;
        $products->pages_book = $request->pages_book;
        $products->author = $request->author;
        $products->editorial = $request->editorial;
        $products->discounts_percent = $request->discounts_percent;
        $products->id_categories = $request->id_categories;

        // Condition. Does the file exist? 
        if ($hasFile) {
            $extension = $request->file->extension();
            $products->extension = $extension;
        }
        // 

        // condition. save
        if ($products->save()) {
            // If exist the file..
            if ($hasFile) {
                // Save the file in the directory
                $request->file->storeAs('images/products/', "$products->id_products" . ".$extension");
                // 
            }
            // 

            // Notification success
            Session::flash('success', 'Producto ' . $products->title . ' se  agrego correctamente');
            // 
            return redirect("products");
        } else {
            // Notification error
            Session::flash('error', 'No se pudo agregar correctamente');
            // 
            return view("products.create");
        }
    }
    // 


    // show one product only
    public function show($id)
    {
        $categories = Category::all();
        $products = Product::findOrFail($id);
        return view("products.show")->with('product', $products)->with("categories", $categories);
    }
    // 



    // Function edit
    public function edit($id)
    {
        $categories = Category::all();
        $products = Product::find($id);
        return view("products.edit")->with('product', $products)->with("categories", $categories);
    }
    // 

    // Function update
    public function update(Request $request, $id)
    {
        $hasFile = $request->hasFile('file') && $request->file->isValid();
        $categories = Category::all();
        $products = Product::find($id);
        $products->title = $request->title;
        $products->description = $request->description;
        $products->stock = $request->stock;
        $products->price = $request->price;
        $products->pages_book = $request->pages_book;
        $products->author = $request->author;
        $products->editorial = $request->editorial;
        $products->discounts_percent = $request->discounts_percent;
        $products->id_categories = $request->id_categories;

        if ($hasFile) {
            // Route
            $image_path = storage_path() . '/app/images/products/' . $products->id_products . '.' . $products->extension;
            //    
            // delete one file
            unlink($image_path);
            // 
            $extension = $request->file->extension();
            $products->extension = $extension;
        } else {
            $extension = $products->extension;
        }


        // Condicion save
        if ($products->save()) {
            if ($hasFile) {
                // Save the file in the directory
                $request->file->storeAs('images/products/', "$products->id_products" . ".$extension");
                // 
            }
            // notification success
            Session::flash('success', 'Producto ' . $products->title . ' editado correctamente');
            // 
            return redirect("products");
        } else {
            // notification error
            Session::flash('error', 'No se pudo editar los datos correctamente');
            return view("products.edit", ["products" => $products, "categories" => $categories]);
        }
        // 
    }



    // Function destroy
    public function destroy($id)
    {
        $product = Product::find($id);
        $title_product_removed = $product->title;
        $image_path = storage_path() . '/app/images/products/' . $product->id_products . '.' . $product->extension;
        unlink($image_path);
        $product->delete();
        Session::flash('success', 'Producto ' . $title_product_removed . ' eliminado correctamente');
        return redirect()->route('products.index');
    }
    //
}
