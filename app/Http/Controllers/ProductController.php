<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;



class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product->sku = $request->sku;
        $product->product_category = $request->product_category;
        $product->product_name = $request->product_name;
        $product->product_detail = $request->product_detail;
        $product->product_brand = $request->product_brand;
        $product->product_price = $request->product_price;
        $product->status = $request->status;
        $product->slug = $request->slug;
        $product->save();
        return redirect()->route('products.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // dd($id);
        $products = DB::table('products')->find($id);
        return view('products.edit', ['products' => $products]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->sku = $request->sku;
        $product->product_category = $request->product_category;
        $product->product_name = $request->product_name;
        $product->product_detail = $request->product_detail;
        $product->product_brand = $request->product_brand;
        $product->product_price = $request->product_price;
        $product->status = $request->status;
        $product->save();
        
        return redirect()->route('products.index');
        // update
        // DB::table('unit')
        //     ->where('id', $id)
        //     ->update(
        //         [
        //             'id' => $request->input('kodeunit'),
        //             'nama_unit' => $request->input('namaunit'),
        //         ]
        //     );

        // return redirect('/unit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::table('products')->where('id', $id)->delete();

        return redirect('/products');
    }
}
