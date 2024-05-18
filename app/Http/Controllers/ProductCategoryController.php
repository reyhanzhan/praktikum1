<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\DB;


class ProductCategoryController extends Controller
{
    public function index()
    {
        $productCategories = ProductCategory::all();
        return view('product_categories.index', compact('productCategories'));
    }

    public function create()
    {
        return view('product_categories.create');
    }

    public function store(Request $request)
    {
        $productCategories = new ProductCategory;
        $productCategories->product_category_name = $request->product_category_name;
        $productCategories->status = $request->status;
        $productCategories->save();
        return redirect()->route('product_categories.index');
    }

    public function edit($id)
    {
        // dd($id);
        // $productCategories = DB::table('product_categories')->find($id);
        // return view('product_categories.index', ['product_categories' => $productCategories]);
        $productCategory = ProductCategory::findOrFail($id);
        return view('product_categories.edit', compact('productCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $productCategories = ProductCategory::find($id);
        $productCategories->product_category_name = $request->product_category_name;
        $productCategories->status = $request->status; 
        $productCategories->save();
        return redirect()->route('product_categories.index');
    }

    public function destroy($id)
    {
        ProductCategory::destroy($id);
        return redirect()->route('product_categories.index');
    }
}