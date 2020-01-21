<?php

namespace App\Http\Controllers\admin;

use Image;
use File;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use App\backend\brand;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class brandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = brand::all();
        return view('admin.pages.brand.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.brand.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|unique:brands',
        ]);
        $brands = new brand;
        $brands->name = $request->name;
        $brands->slug = Str::slug($request->name);
        $brands->parent_id = $request->parent_id;
        $brands->description = $request->description;
        if($request->image){
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('/backend/img/brand/' . $img);
            Image::make($image)->save($location);
            $brands->image = $img;
        }
        $brands->save();
        return redirect ('/admin/product-brands');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $items = brand::all();
        return view('admin.brand.index', compact('items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brands = brand::find($id);
        $allbrand = brand::all();
        return view('admin.pages.brand.edit', compact('brands', 'allbrand'));
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
        $brands = brand::find($id);
        $brands->name = $request->name;
        $brands->slug = Str::slug($request->name);
        $brands->parent_id = $request->parent_id;
        $brands->description = $request->description;
        if($request->image){
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('/backend/img/brand/' . $img);
            Image::make($image)->save($location);
            $brands->image = $img;
        }
        $brands->save();
        return redirect ('/admin/product-brands');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brands = brand::find($id);
        if ( !is_null($brands) )
        {
            // If it is Parent Category, Then We will Delete all it's Sub Category
            if ($brands->parent_id == NULL){
                // Delete Sub Categories
                $sub_brands = brand::orderBy('name', 'asc')->where('parent_id', $brands->id)->get();
                foreach( $sub_brands as $sub ){
                    if ( File::exists('backend/img/brand/' .$sub->image) ){
                        File::delete('backend/img/brand/' .$sub->image);
                    }
                    $sub->delete();
                }
            }
            if ( File::exists('backend/img/brand/' .$brands->image) ){
                File::delete('backend/img/brand/' .$brands->image);
            }
            $brands->delete();
        }
        session()->flash('success', 'Brand Successfully Deleted');
        return back();
    }
}
