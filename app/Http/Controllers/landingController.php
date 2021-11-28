<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class landingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('landing.app');
    }
    public function loginMember()
    {
        return view('landing.loginMember');
    }
    public function loginADmin()
    {
        return view('landing.loginAdmin');
    }
    public function register()
    {
        return view('landing.register');
    }
    public function postRegister(Request $request)
    {
        User::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'level' => $request->level,
            'status' => $request->status,
        ]);
        return redirect('loginMember');
    }
    public function postloginMembers(Request $request)
    {
        if (Auth::attempt($request->only('username', 'password', 'status', 'level'))) {
            return redirect('dashboardIdMembers');
        }
        return redirect('loginMember');
    }
    public function postLoginAdmin(Request $request)
    {
        if (Auth::attempt($request->only('username', 'password', 'status', 'level'))) {
            return redirect('dashboardAdmin');
        }
        return redirect('loginAdmin');
    }
    public function logoutMembers()
    {
        Auth::logout();
        return redirect('loginMember');
    }
    public function logoutAdmin()
    {
        Auth::logout();
        return redirect('loginAdmin');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
}
