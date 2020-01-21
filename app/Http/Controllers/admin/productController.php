<?php

namespace App\Http\Controllers\admin;

use Image;
use File;
use App\backend\product;
use App\backend\brand;
use App\backend\category;
use App\backend\tag;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = product::all();
        return view('admin.pages.product.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands= brand::all();
        $categories=category::all();
        $tags=tag::all();
        return view('admin.pages.product.create',compact('categories','tags','brands'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product= new product;
        $product->title = $request->title;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->tag_id = $request->tag_id;
        $product->description = $request->description;
        $product->regular_price =$request->regular_price;
        $product->sale_price =$request->sale_price;
        $product->sku =$request->sku;
        $product->quantity =$request->quantity;
        $product->status = $request->productstatus ? $request->productstatus : 1;
        $product->featured = $request->fetproduct ? $request->fetproduct : 0;
        if($request->feat_image){
            $image = $request->file('feat_image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('/backend/img/product/' . $img);
            Image::make($image)->save($location);
            $product->feat_image = $img;
        }
        $product->save();
        return redirect ('/admin/products');
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
        $products = product::find($id);
        $allcategory = category::all();
        $allbrand = brand::all();
        $alltag = tag::all();
        return view('admin.pages.product.edit', compact('products', 'allcategory', 'allbrand', 'alltag'));
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
        $product = product::find($id);
        $product->title = $request->title;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->tag_id = $request->tag_id;
        $product->description = $request->description;
        $product->regular_price =$request->regular_price;
        $product->sale_price =$request->sale_price;
        $product->sku =$request->sku;
        $product->quantity =$request->quantity;
        $product->status = $request->productstatus ? $request->productstatus : 1;
        $product->featured = $request->fetproduct ? $request->fetproduct : 0;
        if($request->feat_image){
            $image = $request->file('feat_image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('/backend/img/product/' . $img);
            Image::make($image)->save($location);
            $product->feat_image = $img;
        }
        $product->save();
        return redirect ('/admin/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = product::find($id);
        if ( File::exists('backend/img/product/' .$product->feat_image) ){
            File::delete('backend/img/product/' .$product->feat_image);
        }
        $product->delete();
        session()->flash('success', 'Product Successfully Deleted');
        return back();
    }
}
