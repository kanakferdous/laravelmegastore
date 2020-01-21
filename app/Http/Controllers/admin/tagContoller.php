<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use App\backend\tag;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class tagContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = tag::all();
        return view('admin.pages.tag.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.tag.index');
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
            'name' => 'required|unique:tags',
        ]);
        $tags = new tag;
        $tags->name = $request->name;
        $tags->slug = Str::slug($request->name);
        $tags->description = $request->description;
        $tags->save();
        return redirect ('/admin/product-tags');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $items = tag::all();
        return view('admin.tag.index', compact('items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tags = tag::find($id);
        $alltag = tag::all();
        return view('admin.pages.tag.edit', compact('tags', 'alltag'));
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
        $tags = tag::find($id);
        $tags->name = $request->name;
        $tags->slug = Str::slug($request->name);
        $tags->description = $request->description;
        $tags->save();
        return redirect ('/admin/product-tags');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tags = tag::find($id);
        if ( !is_null($tags) )
        {
            $tags->delete();
        }
        session()->flash('success', 'Tag Successfully Deleted');
        return back();
    }
}
