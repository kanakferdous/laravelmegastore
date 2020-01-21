<?php

namespace App\Http\Controllers\admin;

use Auth;
use App\backend\adminUser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.user.register');
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
            'uname' => 'required|unique:admin_users',
            'email' => 'required|unique:admin_users',
            'password' => 'required|confirmed',
        ]);
        adminUser::create($request->all());
        return redirect('/admin/register');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function show_login_form()
    {
        return view('admin.pages.login.adminlogin');
    }

    public function login(Request $request)
    {
        $this->validate($request,[
            'uname' => 'required',
            'password' => 'required',
        ]);
        if(Auth::attempt(['uname'=>$request->uname, 'password'=>$request->password])){
            return 'Logged in Successfully';
        }
    }
}
