<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Session for notifications
use Session;
// 
// Model Category
use App\Category;
// 

class CategoryController extends Controller
{
    // Access only to administrators
    public function __construct()
    {
        $this->middleware('Administrador');
    }
    // 



    // Show all category data
    public function index()
    {
        // Database query. Order ascendant.It includes pagination.
        $category = Category::orderBy('id_categories', 'ASC')->paginate(8);;
        //redirect to index of categories
        return view("categories/index", ["category" => $category]);
    }
    // 



    // Create a new category
    public function create()
    {
        $category = new Category;
        return view("categories.create", ["category" => $category]);
    }
    // 



    // Function store(receive parameters)
    public function store(Request $request)
    {
        $category = new Category;
        $category->name = $request->name;

        if ($category->save()) {
            Session::flash('success', 'Categoria ' . $category->name . ' se  agrego correctamente');
            return redirect("categories");
        } else {
            Session::flash('error', 'No se pudo agregar correctamente');
            return view("categories.create");
        }
    }
    //  



    // Function edit(receive parameters)
    public function edit($id)
    {
        $category = Category::find($id);
        return view("categories.edit")->with('category', $category);
    }
    // 



    // Function update
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->name;

        if ($category->save()) {
            Session::flash('success', 'Categoria editada correctamente');
            return redirect("/categories");
        } else {
            Session::flash('error', 'No se pudo editar correctamente');
            return view("categories.edit", ["category" => $category]);
        }
    }
    // 



    // Function destroy
    public function destroy($id)
    {
        $category = Category::find($id);
        $name_category_removed = $category->name;
        $category->delete();
        Session::flash('success', 'Categoría ' . $name_category_removed . ' eliminada correctamente');
        return redirect()->route('categories.index');
    }
    // 


}
