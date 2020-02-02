<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Http\Requests;

use App\Product;
use App\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('Administrador');
    }

    public function index()
    {
        $categories = Category::all();
        $products = Product::all(); //se utiliza el metodo all para sacar la lista de productos y guardarlos en la variable $products
        return view("products.index",["products" => $products, "categories" => $categories]); // retorna la vista products.index junto a la variable que contiene los productos
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all(); 
        $products = new Product;
        return view("products.create",["products" => $products, "categories" => $categories]);
   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        
        if ($hasFile) {
            $extension = $request->file->extension();
            $products->extension = $extension;

        }
 
        if($products->save()){
            if($hasFile){
                $request->file->storeAs('images',"$products->id_products".".$extension");
            }
            return redirect("products");
        }else{
            return view("products.create");
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
        $categories = Category::all(); 
        $products = Product::findOrFail($id);
        return view("products.show")->with('product', $products)->with("categories", $categories);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all(); 
        $products = Product::find($id);

        return view("products.edit")->with('product', $products)->with("categories", $categories);
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
        $products->extension = $request->extension;
        $products->id_categories = $request->id_categories;
        

        if ($hasFile) {
            $extension = $request->file->extension();
            $products->extension = $extension;

        }

        
        if($products->save()){
            if($hasFile){
                $request->file->storeAs('images',"$products->id_products".".$extension");
            }
            return redirect("products");
        }else{
            return view("products.edit",["products" => $products, "categories" => $categories]);
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
        $product = Product::find($id);

        $image_path= storage_path().'/app/images/products/'.$product->id_products.'.'.$product->extension;
        unlink($image_path);
        $product->delete();

        return redirect()->route('products.index')->with('success','Producto eliminado satisfactoriamente');
    
    }
}
