<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AllpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('admin.index');
    }
    public function login()
    {
        return view('admin.login');
    }
    public function signup()
    {
        return view('admin.signup');
    }

    /**
     * Display a listing of brand the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function productbrands()
    {
        return view('admin.pages.brand.index');
    }
    public function editbrand()
    {
        return view('admin.pages.brand.edit');
    }

    /**
     * Display a listing of category the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function productcategories()
    {
        return view('admin.pages.category.index');
    }
    public function editcategory()
    {
        return view('admin.pages.category.edit');
    }

    /**
     * Display a listing of tag the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function producttags()
    {
        return view('admin.pages.tag.index');
    }
    public function edittag()
    {
        return view('admin.pages.tag.edit');
    }

    /**
     * Display a listing of product the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allproduct()
    {
        return view('admin.pages.product.index');
    }
    public function newproduct()
    {
        return view('admin.pages.product.create');
    }
    public function editproduct()
    {
        return view('admin.pages.product.edit');
    }

    /**
     * Display a listing of order the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allorders()
    {
        return view('admin.pages.order.index');
    }
    public function vieworder()
    {
        return view('admin.pages.order.view');
    }
    public function editorder()
    {
        return view('admin.pages.order.edit');
    }

    /**
     * Display a listing of store settings the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storesettings()
    {
        return view('admin.pages.store-settings.index');
    }
}
