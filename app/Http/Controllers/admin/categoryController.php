<?php

namespace App\Http\Controllers\admin;

use Image;
use File;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use App\backend\category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = category::all();
        return view('admin.pages.category.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.category.index');
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
            'name' => 'required|unique:categories',
        ]);
        $categories = new category;
        $categories->name = $request->name;
        $categories->slug = Str::slug($request->name);
        $categories->parent_id = $request->parent_id;
        $categories->description = $request->description;
        if($request->image){
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('/backend/img/category/' . $img);
            Image::make($image)->save($location);
            $categories->image = $img;
        }
        $categories->save();
        return redirect ('/admin/product-categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $items = category::all();
        return view('admin.category.index', compact('items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = category::find($id);
        $allcategory = category::all();
        return view('admin.pages.category.edit', compact('categories', 'allcategory'));
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
        $categories = category::find($id);
        $categories->name = $request->name;
        $categories->slug = Str::slug($request->name);
        $categories->parent_id = $request->parent_id;
        $categories->description = $request->description;
        if($request->image){
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('/backend/img/category/' . $img);
            Image::make($image)->save($location);
            $categories->image = $img;
        }
        $categories->save();
        return redirect ('/admin/product-categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories = category::find($id);
        if ( !is_null($categories) )
        {
            // If it is Parent Category, Then We will Delete all it's Sub Category
            if ($categories->parent_id == NULL){
                // Delete Sub Categories
                $sub_categories = category::orderBy('name', 'asc')->where('parent_id', $categories->id)->get();
                foreach( $sub_categories as $sub ){
                    if ( File::exists('backend/img/category/' .$sub->image) ){
                        File::delete('backend/img/category/' .$sub->image);
                    }
                    $sub->delete();
                }
            }
            if ( File::exists('backend/img/category/' .$categories->image) ){
                File::delete('backend/img/category/' .$categories->image);
            }
            $categories->delete();
        }
        session()->flash('success', 'Category Successfully Deleted');
        return back();
    }
}
