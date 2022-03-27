<?php

namespace App\Http\Controllers;


use App\Http\Requests\UpdateProductRequest;
use App\Models\category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $product = DB::table('products')->get();
        $product = Product::all();


        // dd($product->category->id);

        return view('Product.index', ['product' => $product]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->file('image')->store('upload-image');


        // $validateData = $request->validate([
        //     'nama_product' => 'required|max:25'
        // ]);

        Product::create([
            'nama_product' => $request->name,
            'slug_product' => $request->slug,
            'harga' => $request->harga,
            'qty' => $request->quantity,
            'image' => $request->file('image')->store('upload-image'),

        ]);
        $request->file('image')->store('upload-image');
        // if($request->file('image')){
        //     $validateData['image']=$request->file('image')->store('upload-image')
        // }

        return redirect('/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = category::all();
        $product = Product::find($id);
        // return view('Product.edit', ['product' => $product]);
        return view('Product.edit', compact('product', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        Product::where('id', $request->id)->update([
            'nama_product' => $request->name,
            'slug_product' => $request->slug,
            'category_id' => $request->categoryid,
            'harga' => $request->harga,
            'qty' => $request->quantity,
            'image' => $request->file('image')->store('upload-image'),
        ]);
        $request->file('image')->store('upload-image');
        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        // dd($id);

        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('products')->where('id', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/product');
    }
}
