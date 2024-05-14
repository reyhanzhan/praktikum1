<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Brand;


class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('brands', compact('brands'));
    }

    public function create()
    {
        return view('create_brand');
    }

    public function store(Request $request)
    {
        $brand = new Brand;
        $brand->product_brand = $request->product_brand;
        $brand->status = $request->status;
        $brand->save();
        return redirect()->route('brands.index');
    }
    
    public function show($id)
    {
        $brand = Brand::findOrFail($id);
        return view('brands.edit', compact('brand'));
    }
    public function edit($id)
    {
        $brand = Brand::findOrFail($id);
        return view('brands.edit', compact('brand'));
    }

    public function update(Request $request, $id)
    {
        $brand = Brand::findOrFail($id);
        $brand->product_brand = $request->product_brand;
        $brand->status = $request->status;
        $brand->save();
        return redirect()->route('brands.index');
    }

    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);
        $brand->delete();
        return redirect()->route('brands.index');
    }


}

